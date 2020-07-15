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
}
