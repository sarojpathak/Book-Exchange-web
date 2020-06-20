<?php


namespace App\Http\Controllers\Api;

use App\Http\Daos\PostDao;
use App\Http\Traits\ConrtrollerResponseTrait;
use App\Http\Transformers\PostTransformer;

class PostController extends ApiController
{
    use ConrtrollerResponseTrait;
    public function __construct(PostDao $dao,PostTransformer $transformer)
    {
        $this->dao= $dao;
        $this->transformer = $transformer;
    }
}
