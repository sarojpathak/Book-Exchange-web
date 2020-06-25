<?php


namespace App\Http\Daos;


use App\User;
use Illuminate\Database\Eloquent\Model;

class UserDao extends BaseDao
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
