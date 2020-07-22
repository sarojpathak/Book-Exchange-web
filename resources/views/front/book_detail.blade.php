@extends('front::layouts.master')

@section('content')
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row p-5">
            <div class="col-md-12">
                <div class="text-white text-center">
                    <h1>Book Details</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-2">
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img class="book-image-detail" src={{asset('storage/'.($book->image))}} alt="Book Image" />
                </div>
                <div class="col-md-6">
                    <h3>{{$book->name}}</h3>
                    <h6 class="text-muted">{{$book->author}}</h6>
                    <p>{{Str::limit($book->description)}}
                    </p>
                    <h6 class="text-secondary">Condition: <span class="text-info">{{$book->condition}}</span></h6>
                </div>
            </div>
            <hr>
            <div clsss="row p-3">
                <div class="clo-md-12">
                    <h4 class="text-center text-dark py-2">Want this book? : Exchange with yours!</h4>
                    @if(Auth::user()->id==$book->belongs_to)
                    <h2 class="alert alert-danger">You cant exchange your to with yourself</h2>
                    @else
                    @if(count($usersBook)==0)
                    <h2 class="alert alert-danger">Please Post somebook to
                        exchange</h2>
                    @else
                    <form action="{{route('bookexchange')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                @if(count($usersBook)==0) <h4 for="book_offered" class="font-weight-bold text-muted">
                                    Please Post books to exchange
                                    first
                                </h4>
                                @else

                                <h6 for="book_offered" class="font-weight-bold text-muted">Choose your book to
                                    exchange
                                </h6>
                                <select class="form-control" name="book_offered" id="book_offered">
                                    @foreach ($usersBook as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" name="book_wanted" value="{{$book->id}}">
                                <input type="hidden" name="requested_by" value="{{Auth::user()->id}}">
                                <input type="hidden" name="requested_to" value="{{$book->belongs_to}}">
                                <input type="hidden" name="status" value="requested">
                                <button type="submit" class=" btn btn-sm btn-success mt-3 btn-block">Send
                                    Exchange Request</button>
                            </div>
                        </div>

                    </form>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
