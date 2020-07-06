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


<!-- Book list section -->
<div class="container">
    @foreach ($books as $book)
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-thumbnail" src={{asset('storage/'.($book->image))}} alt="Book Image" />
                </div>
                <div class="col-md-6">
                    <h3>{{$book->name}}</h3>
                    <h6 class="text-muted">{{$book->author}}</h6>
                    <p>{{Str::limit($book->description,50)}}
                    </p>

                    <a href="{{route('book-detail',$book->id)}}" class="btn btn-primary border-light">Exchange</a>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
