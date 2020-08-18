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
       // print_r($request->all()); exit;
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
        $book->status = 'available';
//        $user = Auth::user();
//        print_r($user); exit;
        $book->belongs_to=$request->belongs_to;



        if ($request->has('image')) {
            $file = $request->file('image');

            $destinationPath = storage_path('app/public/books' . '/' . date('F') . date('Y'));
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $book->image = 'books/' . date('F') . date('Y') . '/' . time() . "-" . $file->getClientOriginalName();

//            print_r($book->image); exit;
        }

        $book->save();
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

    public function getAllBook()
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->getAllBook();
        return $this->sendResponse($result);
    }

    public function getBookDetail($bookId)
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->getBoookData($bookId);
        return $this->sendResponse($result);
    }

    public function updateBook(Request $request,$id)
    {
        $this->transformer->includeRelations = true;
        $book = new Book;
        $data = $request->all();
        if ($request->has('image')) {
            $file = $request->file('image');

            $destinationPath = storage_path('app/public/books' . '/' . date('F') . date('Y'));
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $book->image = 'books/' . date('F') . date('Y') . '/' . time() . "-" . $file->getClientOriginalName();

        }
        $result = $this->dao->update($data,$id);
        if($result){
            $success['token'] =  $book->createToken('BookExchange')->accessToken;
            $success['id'] =  $id;
            return response()->json(['success'=>$success], $this->successStatus);
        }else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function deleteBook($id)
    {
        $this->transformer->includeRelations = true;
        $result = $this->dao->delete($id);

        if($result) {
            $book = new Book;
            $success['token'] = $book->createToken('BookExchange')->accessToken;
            $success['id'] = $id;
            return response()->json(['success' => $success], $this->successStatus);
        }else{
            return response()->json(['error'=>'Result Not Found'], 401);
        }
    }
}
