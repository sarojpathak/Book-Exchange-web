<?php


namespace App\Http\Controllers;


use App\Http\Services\HomeService;
use App\Book;

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
}
