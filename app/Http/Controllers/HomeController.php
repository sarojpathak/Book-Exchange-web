<?php


namespace App\Http\Controllers;


use App\Http\Services\HomeService;

class HomeController extends Controller
{
    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function index(){
        return view('front::homepage')->with('meta-title','Book-Exchange');
    }

    public function getregisteruser(){
        return view('front::register')->with('meta-title','Register');
    }

    public function getloginuser(){
        return view('front::login')->with('meta-title','Login');
    }
}
