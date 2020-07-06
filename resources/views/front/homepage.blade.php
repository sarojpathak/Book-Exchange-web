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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h1>Find book to Exchange</h1>
                <p>In this section you can find books to exchange</p>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- single product -->
        @foreach ($books as $book)
        <div class="col-lg-3 col-md-6 m-2 p-2 border border-primary">
            <div class="single-product">
                <img class="img-fluid" style="width: 250px; height: 250" src="{{asset('storage/'.($book->image))}}"
                    alt="Book Image">
                <div class="product-details">
                    <h6>{{$book->name}}</h6>
                    <div class="price">
                        <p>{{Str::limit($book->description,40)}}</p>
                        <h6 class="text-muted text-right">{{$book->author}}</h6>
                    </div>

                </div>
            </div>
            <a href="{{route('book-detail',$book->id)}}" class="btn btn-primary border-light mx-0">Exchange</a>
        </div>
        @endforeach
    </div>
</div>


</div>

@endsection
