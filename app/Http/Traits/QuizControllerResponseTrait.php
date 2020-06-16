<?php


namespace App\Http\Traits;

use App\Http\Helpers\Helpers;

trait QuizControllerResponseTrait
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
    protected function sendResponse($result,$count)
    {
        if(!$result)
        {
            return $this->respondNotFound(static::NOT_FOUND);
        }

        return $this->respondSuccessQuiz(fractal($result, $this->transformer),$message='Success',$count);

    }
}
