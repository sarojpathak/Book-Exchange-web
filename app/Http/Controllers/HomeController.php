<?php


namespace App\Http\Controllers;


use App\Http\Daos\UserDao;
use App\Http\Services\HomeService;
use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;
use TCG\Voyager\Facades\Voyager;

class HomeController extends Controller
{
    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;

    }

    public function index(){
        $books = Book::all();
    //    dd($books);
        return view('front::homepage',compact('books', $books) )->with('meta-title','Book-Exchange');
    }

    public function getregisteruser(){
        return view('front::register')->with('meta-title','Register');
    }

    public function getloginuser(){
        return view('front::login')->with('meta-title','Login');
    }

    public function getAddBook(){
        if(session()->has('user')){
        return view('front::addbook');
        }
         return redirect('/users/login');
    }





    // book controller


    public function postBook(Request $request){
        $request->validate([
            'name'              => [ 'string','required'],
            'author'=>['string','required'],
            'description'=>['required','string','max:1000'],
            'image'     =>  ['required','image','mimes:jpeg,png,jpg,gif|max:2048'],
            'condition'=>['required' ,'string']
        ]);

        $book = new Book;
        // Set user name
        $book->name = $request->name;
        $book->author=$request->author;
        $book->description=$request->description;
        $book->condition=$request->condition;
        $user = Auth::user();
        $book->belongs_to=$user->id;



        if($request->has('image')) {
            $file = $request->file('image');

            $destinationPath = storage_path('books'.'/'.date('F').date('Y'));
//            print_r($destinationPath); exit;
            $file->move($destinationPath, $file->getClientOriginalName());
            $book->image = 'books/' .date('F').date('Y').'/'. $file->getClientOriginalName();
//            print_r($request->image); exit;
        }


        $book->save();
        return redirect('/');
    }



}
