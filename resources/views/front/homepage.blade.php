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
    <div class="row d-flex">
        @foreach ($books as $book)
        <div class="col-md-3 mt-4">
            <div class="card shadow">
                <div class="book-image-container">
                    <img class="book-image-big center" src={{asset('storage/'.($book->image))}} alt="Book Image" />
                </div>
                <div class="card-body py-2 cardBody">
                    <div class="py-2">
                        <h5 class="text-center">{{$book->name}}</h5>
                        <small class="pull-right text-muted">
                            -{{$book->author}}
                        </small>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a href="{{route('book-detail',$book->id)}}" class="btn btn-primary btn-block">View Detail</a>
                </div>
            </div>

        </div>


        @endforeach
    </div>

</div>

@endsection
