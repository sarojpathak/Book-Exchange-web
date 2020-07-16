<?php


namespace App\Http\Controllers\Api;
use App\Http\Daos\ExchangeDao;
use App\Http\Traits\ConrtrollerResponseTrait;
use App\Http\Transformers\ExchangeTransformer;


class ExchangeController extends ApiController
{
    public $successStatus = 200;
    use ConrtrollerResponseTrait;

    public function __construct(ExchangeDao $dao, ExchangeTransformer $transformer)
    {
        $this->dao = $dao;
        $this->transformer = $transformer;
    }

    public function getExchange()
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->getAll();
        return $this->sendResponse($result);
    }

}
