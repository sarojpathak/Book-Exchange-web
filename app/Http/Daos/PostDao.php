<?php


namespace App\Http\Daos;


use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post;

class PostDao extends BaseDao
{
    public function __construct(Post $model)
    {
        $this->model = $model;
    }
}
