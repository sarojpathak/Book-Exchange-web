<?php


namespace App\Http\Controllers\Api;


use App\Http\Daos\UserDao;
use App\Http\Traits\ConrtrollerResponseTrait;
use App\Http\Transformers\UserTransformer;

class UserController extends ApiController
{
    use ConrtrollerResponseTrait;
    public function __construct(UserDao $dao,UserTransformer $transformer)
    {
        $this->dao = $dao;
        $this->transformer = $transformer;
    }
}
