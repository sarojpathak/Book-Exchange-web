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

    public function index()
    {
        $books = Book::all();
        //    dd($books);
        return view('front::homepage', compact('books', $books))->with('meta-title', 'Book-Exchange');
    }

    public function getregisteruser()
    {
        return view('front::register')->with('meta-title', 'Register');
    }

    public function getloginuser()
    {
        return view('front::login')->with('meta-title', 'Login');
    }

    public function getAddBook()
    {
        if (session()->has('user')) {
            return view('front::addbook');
        }
        return redirect('/users/login');
    }

    public function getBookDetailPage($id)
    {
        $book = Book::find($id);
        $usersBook = Book::find($id)::where("belongs_to", "=", Auth::user()->id)->get();
        return view('front::book_detail', compact('book', $book, 'usersBook', $usersBook));
    }

    public function getProfile($id)
    {
        $user = User::find($id);
        return view('front::profile', compact('user', $user));
    }

    public function getUsersBook($id)
    {

        $usersBook = Book::where('belongs_to', $id)->get();
        return view('front::users_book', compact('usersBook', $usersBook));
    }
}
