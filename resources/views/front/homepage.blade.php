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
                   <a href="{{route('addbook')}}" class="btn btn-primary mt-4 border-light" type="link">Share Your Book</a>
               </div>
           </div>
       </div>
   </div>
</header>

<div class="container">
  <div class="row">
    @foreach ($books as $book)
  <div class="col-md-4">
    <div class="card">
      <div class="card-header text-center">
        {{$book->name}}
      </div> 
      <div>
          <div class="container mt-2" style="height: 200px; width:200px;">
            <img src="{{$book->image}}" class="img-fluid" alt="Responsive image">
        </div> 
      <div  class="card-body">  <p class="card-text">{{Str::limit($book->description,100)}}</p>
        <a href="{{route('book-detail',$book->id)}}" class="btn btn-primary">Read More...</a></div>
      </div>
    </div>
    <div class="card" style="width: 200; height:200">
        <img src="{{asset('storage/'.($book->image))}}" class="img" alt="Responsive image">
  <div class="card-body">
  <h5 class="card-title">{{$book->name}}</h5>
    <p class="card-text">{{$book->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  @endforeach  
</div>

</div>
@endsection
