<?php


namespace App\Http\Controllers;


use App\Http\Daos\UserDao;
use App\Http\Services\HomeService;
use App\Book;
use App\Exchanges;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
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
        $books = Book::orderBy('created_at', 'desc')->get();
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

    // book controller


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
        $user = Auth::user();
        $book->belongs_to = $user->id;



        if ($request->has('image')) {
            $file = $request->file('image');

            $destinationPath = storage_path('app/public/books' . '/' . date('F') . date('Y'));
            $file->move($destinationPath, time() . "-" . $file->getClientOriginalName());
            $book->image = 'books/' . date('F') . date('Y') . '/' . time() . "-" . $file->getClientOriginalName();
        }


        $book->save();
        return redirect('/');
    }


    public function getRequests()
    {
        $exchangeRequests = DB::table('exchanges')
            ->join('users As RB', 'exchanges.requested_by', '=', 'RB.id')
            ->join('users AS RT', 'exchanges.requested_to', '=', 'RT.id')
            ->join('books AS BO', 'exchanges.book_offered', '=', 'BO.id')
            ->join('books AS BW', 'exchanges.book_wanted', '=', 'BW.id')
            ->select(
                'exchanges.*',
                'RB.id As by_uid',
                'RB.name As requested_by',
                'RT.id AS to_uid',
                'RT.name AS requested_to',
                'BO.name As book_offered',
                'BW.name As book_wanted'
            )
            ->where('RT.id', Auth::user()->id)
            ->where('exchanges.status', 'requested')
            ->orWhere('exchanges.status', 'accepted')
            ->get();
        return view('front::activity', compact('exchangeRequests', $exchangeRequests));
    }

    public function updateRequestStatus(Request $request)
    {
        $exchangeRequests = Exchanges::find($request->id);
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
}
