<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Exchanges;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
use App\User;


class BookController extends Controller
{

    public function postBook(Request $request)
    {
        $dir = asset('public');
        $request->validate([
            'name'              => ['string', 'required'],
            'author' => ['string', 'required'],
            'description' => ['required', 'string', 'max:1000'],
            'image'     =>  ['required', 'image', 'mimes:jpeg,png,jpg,gif|max:2048'],
            'condition' => ['required', 'string']
        ]);

        $book = new Book;
        // Set user name
        $book->name = $request->name;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->condition = $request->condition;
        $user = session('user');
        $book->belongs_to = $user->id;
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $book->image = $request->image->move(('books'), $imageName);
        $book->save();
        return redirect('/');
    }

    public function postBookExchange(Request $request)
    {
        // dd($request->all());
        $exchange = new Exchanges;
        $exchange->book_offered = $request->book_offered;
        $exchange->book_wanted = $request->bookWanted;
        $exchange->requested_by = $request->requested_by;
        $exchange->requested_to = $request->requested_to;
        $exchange->status = $request->status;
        $exchange->save();
        $request->session()->flash('my-alert-success', 'Book Exchange requested Successfully');
        return redirect('/');
    }
}
