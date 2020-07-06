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
        <div class="col-md-6">
          <img class="img-thumbnail" src={{asset('storage/'.($book->image))}} alt="Book Image"/>
        </div>
        <div class="col-md-6">
          <h3>{{$book->name}}</h3>
          <h6 class="text-muted">{{$book->author}}</h6>
          <p>{{Str::limit($book->description,50)}}
          </p>
          <h6 class="text-secondary">Condition: <span class="text-info">{{$book->condition}}</span></h6>
        </div>
        </div>
        <hr>
        <div clsss="row p-3">
        <div class="clo-md-12">
        <h4 class="text-center text-dark py-2">Want this book? : Exchange with yours!</h4>
        <form>
        <div class="row">
          <div class="col-md-6">
          <h6 for="book_offered" class="font-weight-bold text-muted">Choose your book to exchange</h6>
        <select class="form-control" name="book_offered" id="book_offered">
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select>
          </div>
          <div class="col-md-6">
          <button href="#" class=" btn btn-sm btn-success mt-3 btn-block">Send Exchange Request</button></div>
          </div>
        </div>
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
