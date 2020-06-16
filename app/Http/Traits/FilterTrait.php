<?php

namespace App\Http\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;

trait FilterTrait
{
    protected $tableName;

    /**
     * @var array
     */
    protected  $arrayContextMap = [
        'gt'=>'>',
        'gtore'=>'>=',
        'lt'=>'<',
        'ltore'=>'<=',
        'like'=>'like',
        'eq'=>'=',
        'ne'=>'!=',
    ];

    /**
     * @param Model $model
     * @return $this|Model
     */
    public function filterIt(Model $model)
    {
        $requestQuery = Request::except('pageSize','page','q','qactive','qprice');
        $this->tableName = $model->getTable();


        if(isset($requestQuery['order']))
        {
            $model = $this->makeOrder($requestQuery['order'],$model);
            unset($requestQuery['order']);
        }

        foreach ($requestQuery as $k=>$rq)
        {

            $relation = explode(':',$k);
            $relationName = '';
            $relationColumn = '';
            if(count($relation) == 2)
            {
                $relationSnakeCase = $relation[0];
                $relationSnakeCaseArr = explode('_',$relationSnakeCase);
                $relationName = '';
                foreach ($relationSnakeCaseArr as $k=>$v)
                {
                    if($k==0)
                    {
                        $relationName.=$v;
                    }else{
                        $relationName .= ucfirst($v);
                    }
                }
                $relationColumn = $relation[1];
            }

            if(Schema::hasColumn($this->tableName,$k)) {
                $model = $this->applyCondition($model,$rq,$k);
            }else if($model->has($relationName))
            {
                $model = $model->whereHas($relationName, function($query) use($relationColumn,$rq){

                    $this->applyCondition($query,$rq,$relationColumn) ;
                });
            }
        }
        return $model;
    }
    public function applyCondition($model,$rq,$k)
    {
        if (strpos($rq, '::') !== false) {
            $conVal = explode('::', $rq);

            $context = $conVal[1];
            $value = $conVal[2];
            if ($value) {
                if ($context == 'between') {
                    $dateArr = explode(',', $value);
                    if (count($dateArr) == 2) {
                        $formatedDate = [
                            Carbon::parse($dateArr[0])->format('Y-m-d H:i'),
//                                Carbon::parse($dateArr[1] . " 23:59")->format('Y-m-d H:i')
                            Carbon::parse($dateArr[1])->format('Y-m-d H:i')
                        ];

                        $model = $model->whereBetween($k, $formatedDate);
                    }

                } else if ($context == 'in') {

                    $model = $model->whereIn($k, explode(',', $value));
                } else if ($context == 'lkin') {
                    $sParam = explode(',', $value);
                    foreach ($sParam as $v) {
                        $model = $model->where($k, 'like', '%' . $v . '%');
                    }

                } else if ($context == 'lkinor') {
                    $sParam = explode(',', $value);
                    $model = $model->where(function ($query) use ($sParam, $k) {
                        foreach ($sParam as $v) {
                            $query = $query->orWhere($k, 'like', '%' . $v . '%');
                        }
                    });

                } else {
                    if (isset($this->arrayContextMap[$context])) {
                        $model = $model->where($k, $this->arrayContextMap[$context], "$value");
                    }
                }
            }
        }
        return $model;
    }

    /**
     * @param $values
     * @param Model $model
     * @return $this|Model
     */
    protected function makeOrder($values,Model $model)
    {
        $orderArray = explode(',',$values);
        foreach($orderArray as $k=>$v)
        {
            $param = substr($v,1);
            if(Schema::hasColumn($this->tableName,$param))
            {
                $sign = substr($v,0,1);
                $context = $sign=='-'?'DESC':'ASC';
                $model = $model->orderBy($param,$context);
            }

        }
        return $model;
    }
}
