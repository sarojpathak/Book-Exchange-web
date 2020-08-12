<?php


namespace App\Http\Controllers\Api;

use App\Exchange;
use App\Http\Daos\BookDao;
use App\Http\Daos\ExchangeDao;
use App\Http\Traits\ConrtrollerResponseTrait;
use Illuminate\Http\Request;
use App\Http\Transformers\ExchangeTransformer;
use function Symfony\Component\String\s;
use Validator;


class ExchangeController extends ApiController
{
    public $successStatus = 200;
    use ConrtrollerResponseTrait;

    public function __construct(ExchangeDao $dao, ExchangeTransformer $transformer,BookDao $bookDao)
    {
        $this->dao = $dao;
        $this->transformer = $transformer;
        $this->bookDao = $bookDao;
    }

    public function postExchange(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'book_wanted' => [ 'integer','required'],
            'book_offered'=>['integer','required'],
            'requested_to' => [ 'integer','required'],
            'requested_by'=>['integer','required'],
            'status'=>['string' ,'required']
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $exchange = new Exchange;
        // $exchange->book_wanted = $request->book_wanted;
        // $exchange->book_offered=$request->book_offered;
        // $exchange->requested_to = $request->requestd_to;
        // $exchange->requested_by=$request->requested_by;
        // $exchange->status=$request->status;

        $input = $request->all();
        // print_r($input); exit;
        $result= Exchange::create($input);
        $success['token'] =  $exchange->createToken('Exchnage')->accessToken;
        $success['result'] =  $result->id;
        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function getExchange()
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->getAll();
        return $this->sendResponse($result);
    }

    public function getExchnageStatus($id)
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->getExchangeByStatus($id);
        return $this->sendResponse($result);
    }

    public function getExchnageRequestedBy($id)
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->getExchangeByRequestedBy($id);
        return $this->sendResponse($result);
    }

    public function updateExchange(Request $request,$id)
    {
        $this->transformer->includeRelations = true;
        $data = $request->all();
        $result = $this->dao->update($data,$id);
        if($result){
            $exchange = new Exchange();
            $success['token'] =  $exchange->createToken('BookExchange')->accessToken;
            $success['id'] =  $id;
            return response()->json(['success'=>$success], $this->successStatus);
        }else{
            return response()->json(['error'=>'Result Not Found'], 401);
        }

    }

    public function updateConfirmExchange(Request $request,$id)
    {
        $this->transformer->includeRelations = true;
        $res= [];
        $res1= [];
        $data = $this->dao->getById($id);
        $id1 = $data['book_offered'];
        $res['belongs_to'] = $data['requested_to'];
        $id2 = $data['book_wanted'];
        $res1['belongs_to'] = $data['requested_by'];
        $a =  $this->bookDao->update($res,$id1);
        $b =  $this->bookDao->update($res1,$id2);
        $delete = $this->dao->delete($id);
        if($delete){
            $exchange = new Exchange();
            $success['token'] =  $exchange->createToken('BookExchange')->accessToken;
            $success['id'] =  $id;
            return response()->json(['success'=>$success], $this->successStatus);
        }else{
            return response()->json(['error'=>'Result Not Found'], 401);
        }

    }

    public function deleteExchange($id)
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->delete($id);
        if($result){
            $exchange = new Exchange();
            $success['token'] =  $exchange->createToken('BookExchange')->accessToken;
            $success['id'] =  $id;
            return response()->json(['success'=>$success], $this->successStatus);
        }else{
            return response()->json(['error'=>'Result Not Found'], 401);
        }

    }


}
