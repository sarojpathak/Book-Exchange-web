<?php


namespace App\Http\Controllers\Api;

use App\Book;
use App\Http\Daos\BookDao;
use App\Http\Traits\ConrtrollerResponseTrait;
use App\Http\Transformers\BookTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;



class BookController extends ApiController
{
    public $successStatus = 200;
    use ConrtrollerResponseTrait;
    public function __construct(BookDao $dao, BookTransformer $transformer)
    {
        $this->dao= $dao;
        $this->transformer = $transformer;
    }
    public function addBook(Request $request)
    {
//        print_r($request); exit;
        $validator = Validator::make($request->all(),[
            'name'              => [ 'string','required'],
            'author'=>['string','required'],
            'description'=>['required','string','max:1000'],
//            'image'     =>  ['required','image','mimes:jpeg,png,jpg,gif|max:2048'],
            'condition'=>['required' ,'string']
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $book = new Book;
        // Set user name
        $book->name = $request->name;
        $book->author=$request->author;
        $book->description=$request->description;
        $book->condition=$request->condition;
//        $user = Auth::user();
//        print_r($user); exit;
        $book->belongs_to=$request->belongs_to;



        if($request->has('image')) {
            $file = $request->file('image');

            $destinationPath = storage_path('app/public/books'.'/'.date('F').date('Y'));
            $file->move($destinationPath, time()."-".$file->getClientOriginalName());
            $book->image = 'books/' .date('F').date('Y').'/'.time()."-". $file->getClientOriginalName();
        }

        $input = $request->all();
        $user = Book::create($input);
        $success['token'] =  $book->createToken('BookExchange')->accessToken;
        $success['name'] =  $book->name;
        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function getBookByUser($userID){
//        print_r($userID); exit;
        $this->transformer->includeRelations = true;
        $result = $this->dao->getAllBookByUser($userID);
        return $this->sendResponse($result);

    }

    public function getBookDetail($bookId)
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->getBoookData($bookId);
        return $this->sendResponse($result);
    }
}
