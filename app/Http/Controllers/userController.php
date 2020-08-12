<?php

namespace App\Http\Controllers;

use App\Book;
use App\Exchange;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



class userController extends Controller
{
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'phone' => ['required', 'string', 'min:10'],
            'address' => ['required', 'string'],
        ]);
        //    dd('validated');
        $newuser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,

        ]);
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        $user = Auth::user();
        $request->session()->put('user', $user);
        // dd($user);
        $request->session()->flash('my-alert-success', 'You have been register Successful');
        return redirect('/');
    }



    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role_id == 1) {
                return redirect('/admin');
            } else {
                $request->session()->put('user', $user);
                // dd($user);
                $request->session()->flash('my-alert-success', 'Login Successful');
                return redirect('/');
            }
        }
        return redirect()->back()->withErrors(['Invalid Email or password']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }

    public function getUserInfo(Request $request)
    {
        $uid = $request['uid'];
        $user = User::find($uid);
        return view('front::userinfo', compact('user', $user));
    }

    public function editUserInfo(Request $request)
    {
        $user = User::find($request->id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:10'],
            'address' => ['required', 'string'],
        ]);



        if ($request->hasFile('image')) {
            if (
                $user->avatar
                != 'users/default.png'
            ) {
                // Storage::delete('storage/' . ($user->avatar));
                unlink('storage/' . ($user->avatar));
            }
            $file = $request->file('image');

            $destinationPath = storage_path('app/public/users' . '/' . date('F') . date('Y'));
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $request->image = 'users/' . date('F') . date('Y') . '/' . time() . "-" . $file->getClientOriginalName();
            // Set user name
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->avatar = $request->image;
            $user->save();
            $request->session()->flash('my-alert-success', 'User Edited Successfully');
            return redirect(route('getProfile', Auth::user()->id));
        }
        // Set user name
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        $request->session()->flash('my-alert-success', 'User Edited Successfully');
        return redirect(route('getProfile', Auth::user()->id));
    }

    public function ChangeUserPassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if ($request->email == $user->email) {
            $user->password = Hash::make($request->password);
            $user->save();
            $request->session()->flash('my-alert-success', 'Password Change Successfully');
            return redirect(route('getProfile', Auth::user()->id));
        };
        return redirect()->back()->with('my-alert-error', 'You can only change password of your account');
    }

    public function updateRequestStatus(Request $request)
    {
        $exchangeRequests = Exchange::find($request->id);
        if ($request->has('accepted')) {
            $exchangeRequests->status = 'accepted';
            $exchangeRequests->save();
            $request->session()->flash('my-alert-success', 'You have accepted book exchange request');
            return redirect()->back();
        } else if ($request->has('declined')) {
            $exchangeRequests->status = 'declined';
            $exchangeRequests->save();
            $request->session()->flash('my-alert-success', 'You have decilined book exchange request');
            return redirect()->back();
        }
    }
    public function exchangeCompleted(Request $request)
    {
        $foundid = Exchange::find($request->completed);
        $requestedbook = Book::find($foundid->book_wanted);
        $requestedbook->belongs_to = $foundid->requested_by;
        $gotbook = Book::find($foundid->book_offered);
        $gotbook->belongs_to = $foundid->requested_to;
        $requestedbook->save();
        $gotbook->save();
        $foundid->delete();
        return redirect(route('home'))->with('my-alert-success', 'Book Ownership changed Successfully');
    }
}
