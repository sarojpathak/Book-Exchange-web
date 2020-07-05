@extends('front::layouts.master')

@section('content')
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
