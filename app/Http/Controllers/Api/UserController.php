<?php


namespace App\Http\Controllers\Api;


use App\Http\Daos\OauthAccessTokenDao;
use App\Http\Daos\UserDao;
use App\Http\Traits\ConrtrollerResponseTrait;
use App\Http\Transformers\UserTransformer;
use Illuminate\Support\Facades\Auth;

class UserController extends ApiController
{
    public $successStatus = 200;
    use ConrtrollerResponseTrait;
    public function __construct(UserDao $dao,UserTransformer $transformer,OauthAccessTokenDao $oauthAccessTokenDao)
    {
        $this->dao = $dao;
        $this->oauthAccessTokenDao = $oauthAccessTokenDao;
        $this->transformer = $transformer;
    }

    public function getLoginUser()
    {
        $this->transformer->includeRelations = true;
        $user = $this->oauthAccessTokenDao->getLatestData();
        $result = $this->dao->getUserDetail($user->user_id);
        return $this->sendResponse($result);
    }
}
