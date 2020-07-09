<?php


namespace App\Http\Daos;


use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserDao extends BaseDao
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getUserDetail($userID)
    {
        return $this->model->where('id',$userID)->get();
    }
}
