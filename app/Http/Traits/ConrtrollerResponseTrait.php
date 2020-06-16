<?php


namespace App\Http\Traits;

use App\Http\Helpers\Helpers;

trait ConrtrollerResponseTrait
{
    use Helpers;
    protected $dao;
    protected $transformer;


    public function index()
    {
        $result = $this->dao->getAll();
        return $this->sendResponse($result);
    }

    public function show($id)
    {
        $result = $this->dao->find($id);
        return $this->sendResponse($result);
    }

    /**
     * @param $result
     * @return mixed
     */
    protected function sendResponse($result)
    {
        if(!$result)
        {
            return $this->respondNotFound(static::NOT_FOUND);
        }

        return $this->respondSuccess(fractal($result, $this->transformer));

    }
}
