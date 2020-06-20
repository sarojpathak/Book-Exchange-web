<?php


namespace App\Http\Helpers;

trait Helpers
{
    /**
     * @var
     */
    protected $responseStatusCode;


    /**
     * @return mixed
     */
    public function getResponseStatusCode()
    {
        return $this->responseStatusCode;
    }

    /**
     * @param $responseStatusCode
     * @return $this
     */
    public function setResponseStatusCode($responseStatusCode)
    {
        $this->responseStatusCode = $responseStatusCode;
        return $this;
    }

    /**
     * @param $data
     * @param string $message
     * @return mixed
     */
    public function respondSuccess($data,$message='Success')
    {
        return $this->setResponseStatusCode(200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'])->respondWithSuccess($data,$message);
    }
    public function respondSuccessQuiz($data,$message,$count)
    {
        return $this->setResponseStatusCode(200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'])->respondWithSuccessQuiz($data,$message,$count);
    }

    public function respondSuccessPaginate($data,$count = null,$total = null)
    {
        if($count === null){
            $data = $data->all();
            $count = $data->count();
        }

        if($total === null){
            $total = $data->total();
        }
        return $this->setResponseStatusCode(200,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'])->respondWithSuccessPaginate($data,$count,$total);
    }


    public function respondCreated($data,$message="Success"){
        return $this->setResponseStatusCode(200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'])->respondSuccess($data,$message);
    }

    /**
     * @param $data
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($data,$message='Error')
    {
        return  $this->setResponseStatusCode(404)->respondWithError($data,$message);

    }


    public function respondError($data,$message="Error")
    {
        return $this->setResponseStatusCode(400)->respondWithError($data,$message);
    }


    public function respondInternal($data,$message="Error")
    {
        return $this->setResponseStatusCode(500)->respondWithError($data,$message);
    }

    public function respondForbidden($data,$message="Error")
    {
        return $this->setResponseStatusCode(403)->respondWithError($data,$message);
    }

    /**
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data,$headers = [])
    {
        return response()->json($data,$this->getResponseStatusCode(),$headers);
    }


    /**
     * @param $data
     * @param $message
     * @return mixed
     */
    public function respondWithSuccess($data,$message)
    {
        return  $this->respond([
            'status_code' => $this->getResponseStatusCode(),
            'message' => $message,
            'data'=>$data
        ]);
    }

    public function respondWithSuccessQuiz($data,$message,$count)
    {
        return  $this->respond([
//            'status_code' => $this->getResponseStatusCode(),
            'message' => $message,
            'count'=>$count,
            'data'=>$data
        ]);
    }

    /**
     * @param $data
     * @param $resultCount
     * @param $totalCount
     * @return mixed
     */

    public function respondWithSuccessPaginate($data, $resultCount,$totalCount)
    {
        $message='Success';
        return  $this->respond([
//            'status_code' => $this->getResponseStatusCode(),
            'result_count' => $resultCount,
            'total_count' => $totalCount,
            'message' => $message,
            'data'=>$data
        ]);
    }

    /**
     * @param $data
     * @param $message
     * @return mixed
     */
    public function respondWithError($data = ['Something Went Wrong'],$message)
    {
        return $this->respond([
            'status_code' => $this->getResponseStatusCode(),
            'message' => $message,
            'errors'=>$data
        ]);
    }

}

