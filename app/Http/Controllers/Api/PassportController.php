<?php


namespace App\Http\Controllers\Api;
use App\Http\Daos\OauthAccessTokenDao;
use App\Http\Daos\UserDao;
use App\Http\Transformers\UserTransformer;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Traits\ConrtrollerResponseTrait;

class PassportController extends ApiController
{
    public $successStatus = 200;
    use ConrtrollerResponseTrait;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(UserDao $dao,UserTransformer $transformer,OauthAccessTokenDao $oauthAccessTokenDao)
    {
        $this->dao = $dao;
        $this->oauthAccessTokenDao = $oauthAccessTokenDao;
        $this->transformer = $transformer;
    }
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('BookExchange')->accessToken;
            return response()->json(['status' =>$this->successStatus, 'id'=>$user->id, 'success' => $success]);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
//            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $input = $request->all();
//        print_r($input); exit;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');

            $destinationPath = storage_path('app/public/users' . '/' . date('F') . date('Y'));
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $input->avatar = 'users/' . date('F') . date('Y') . '/' . time() . "-" . $file->getClientOriginalName();

            print_r($input->avatar); exit;
        }
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('BookExchange')->accessToken;
        return response()->json(['status' =>$this->successStatus, 'success' => $success]);
    }
    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function getDetails()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }

    public function updateUser(Request $request,$id)
    {
        $this->transformer->includeRelations = true;
        $data = $request->all();
//        print_r($data); exit;
        if($request->password)
        {
            $data['password'] = bcrypt($data['password']);
        }
        if ($request->has('avatar')) {
            $file = $request->file('avatar');
            // print_r($file); exit;
            $destinationPath = storage_path('app/public/users' . '/' . date('F') . date('Y'));
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $data['avatar'] = 'users/' . date('F') . date('Y') . '/' . time() . "-" . $file->getClientOriginalName();

//            print_r($data['avater']); exit;
        }
        $result = $this->dao->update($data,$id);
        if($result){
            $user = new User;
            $success['token'] =  $user->createToken('BookExchange')->accessToken;
            $success['id'] =  $id;
            return response()->json(['success'=>$success], $this->successStatus);
        }else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }

    }
}
