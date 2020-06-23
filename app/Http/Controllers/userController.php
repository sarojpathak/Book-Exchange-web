<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Support\Str;



class userController extends Controller
{
 
    public function getregisteruser(){
        return view('front.register');
    }

     public function registerUser(Request $request){
          $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'phone' => ['required','string','min:10'],
            'address'=>['required','string'],
        ]);
    //    dd('validated');
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address=$request->address;
         $user->api_token = Str::random(60);
//        $user->user_avatar = $request->name;
        $user->save();
    }

    public function getLogin(){
        return view('front.login');
    }

    public function postLogin(Request $request){
           $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);
           if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
             return redirect('/');
            
        }
     return Redirect::back()->withErrors(['Invalid Email or password']);
        
       
    }
    

}
