<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Exchange;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function postBook(Request $request)
    {
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
        $book->status = 'available';
        $user = Auth::user();
        $book->belongs_to = $user->id;



        if ($request->has('image')) {
            $file = $request->file('image');

            $destinationPath = storage_path('app/public/books' . '/' . date('F') . date('Y'));
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $book->image = 'books/' . date('F') . date('Y') . '/' . time() . "-" . $file->getClientOriginalName();
        }


        $book->save();
        $request->session()->flash('my-alert-success', 'Book Exchange Added');

        return redirect('/');
    }

    public function postBookExchange(Request $request)
    {
        // dd($request->all());
        $exchange = new Exchange;
        $exchange->book_offered = $request->book_offered;
        $exchange->book_wanted = $request->book_wanted;
        $exchange->requested_by = $request->requested_by;
        $exchange->requested_to = $request->requested_to;
        $exchange->status = $request->status;
        $exchange->save();
        $request->session()->flash('my-alert-success', 'Book Exchange requested Successfully');
        return redirect('/');
    }

    public function postEditBook(Request $request)
    {
        $book = Book::find($request->id);

        $request->validate([
            'name' => ['string', 'required'],
            'author' => ['string', 'required'],
            'description' => ['required', 'string',],
            'image'     =>  ['image', 'mimes:jpeg,png,jpg,gif|max:2048'],
            'condition' => ['string', 'required'],
            'status' => ['string', 'required'],
        ]);


        if ($request->hasFile('image')) {
            unlink('storage/' . $book->image);
            $file = $request->file('image');

            $destinationPath = storage_path('app/public/books' . '/' . date('F') . date('Y'));
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $book->image = 'books/' . date('F') . date('Y') . '/' . time() . "-" . $file->getClientOriginalName();
        }

        // Set user name
        $book->name = $request->name;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->condition = $request->condition;
        $book->image = $book->image;
        $book->status = $request->status;
        $book->save();
        $request->session()->flash('my-alert-success', 'Book Edited Successfully');
        return redirect(route('getUsersBooks', Auth::user()->id));
    }

    public function deleteBookRequest(Request $request)
    {
        $exchangeRequest = Exchange::find($request->exchangeId);
        $exchangeRequest->delete();
        return redirect()->back()->with('my-alert-success', 'Request Deleted Successfully');
    }
}
