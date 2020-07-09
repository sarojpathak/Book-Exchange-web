@extends('front::layouts.master')

@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Book Exchange</h1>
                    <h1 class="subheading">Share Books, Share Knowledge</h1>
                    <a href="{{route('addbook')}}" class="btn btn-primary mt-4 border-light" type="link">Share Your
                        Book</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mt-4 p-4">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-4 mt-4">
            <div class="card " style="width: 18rem;">
                <img class="book-image-big center mt-2" src="{{asset($book->image)}}" alt="Book Image">
                <div class="card-header mt-2">
                    <h5 class="card-title text-primary text-center">{{$book->name}}</h5>
                </div>
                <div class="card-body p-0">
                    <p class="card-text">{{Str::limit($book->description,70)}}
                    </p>
                    <small class="pull-right">
                        By: {{$book->author}}
                    </small>
                </div>

                <div class="card-footer text-right">

                    <a href="{{route('book-detail',$book->id)}}" class="btn btn-primary">Exchange</a>
                </div>
            </div>

        </div>


        @endforeach
    </div>

</div>

@endsection
