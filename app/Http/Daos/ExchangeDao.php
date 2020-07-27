<?php


namespace App\Http\Daos;


use App\Exchange;
use Illuminate\Database\Eloquent\Model;

class ExchangeDao extends BaseDao
{
    public function __construct(Exchange $model)
    {
       $this->model = $model;
    }

    public function getExchangeByStatus($id)
    {
        $status = 'requested';
        $status1 = 'accepted';
        return $this->model->where(['requested_to'=>$id])->orWhere('status','LIKE',"%$status%")->orWhere('status','LIKE',"%$status1%")->get();
    }

    public function getExchangeByRequestedBy($id)
    {
        return $this->model->where(['requested_by'=>$id])->get();
    }
}
