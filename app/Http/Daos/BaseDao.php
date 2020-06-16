<?php


namespace App\Http\Daos;

use App\Http\Traits\FilterTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Marcelgwerder\ApiHandler\Facades\ApiHandler;

class BaseDao
{
    use FilterTrait;
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        $res = $this->filterIt($this->model);
        return $res->get();
    }


    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug)
    {
        return $this->model->where('slug',$slug)->first();
    }

    /**
     * @param $data
     * @param $id
     * @return mixed
     */

    public function update($data,$id)
    {
        $modelData = $this->model->find($id);
        if(!$modelData)
        {
            return false;
        }
        $modelData->fill($data);
        $modelData->save();
        return $modelData;

    }

    public function fillAndSave($data)
    {
        $modelData = $this->model->fill($data);
        $modelData->save();
        return $modelData;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getByParentSlug($slug)
    {
        $request = new Request();
        $pageSize = (Input::input('pageSize'))?Input::input('pageSize'):10;
        return $this->model->where('publish',1)->where('parent_slug',$slug)->paginate($pageSize);
    }

    /**
     * @param $whereArray
     * @return mixed
     */
    public function getByCondition($whereArray, $onlyPublish = true)
    {
        $pageSize = (Input::get('pageSize'))?Input::get('pageSize'):10;


        return $this->model->where($whereArray)->paginate($pageSize);
    }

    /**
     * @param $whereArray
     * @param $with
     * @return mixed
     */
    public function getOneByConditionWith($whereArray, $with)
    {
        $withString = implode(',',$with);
        return $this->model->where('publish',1)->where($whereArray)->with($withString)->first();
    }

    /**
     * @param $whereArray
     * @return mixed
     */
    public function getOneByCondition($whereArray)
    {
        return $this->model->where($whereArray)->first();
    }

    /**
     * @param $whereArray
     * @return mixed
     */
    public function getOneByOrCondition($whereArray)
    {

        foreach ($whereArray as $key=>$where)
        {
            $this->model->orWhere($key,$where);
        }
        return $this->model->first();
    }

    /**
     * @param $whereArray
     * @param bool $onlyPublish
     * @return mixed
     */
    public function getByCond($whereArray, $onlyPublish = true)
    {
        $result = $this->model;
        if($onlyPublish)
        {
            $result = $result->where('publish',1);
        }
        return $result->where($whereArray)->get();
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function getByOrder($orderBy='id', $orderType='DESC', $onlyPublish = true)
    {
        $res = $this->model;
        if($onlyPublish){
            $res = $res->where('publish',1);
        }
        return $res->orderBy($orderBy,$orderType)->get();
    }

}
