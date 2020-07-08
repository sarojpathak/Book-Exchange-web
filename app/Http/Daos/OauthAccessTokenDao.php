<?php


namespace App\Http\Daos;


use App\OauthAccessToken;
use Illuminate\Database\Eloquent\Model;

class OauthAccessTokenDao extends BaseDao
{
    public function __construct(OauthAccessToken $model)
    {
        $this->model = $model;
    }

    public function getLatestData()
    {
        return $this->model->orderBy('created_at','DESC')->first();
    }
}
