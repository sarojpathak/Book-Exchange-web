@extends('front::layouts.master')

@section('content')
<div class="container mt-2">



    <div class="card col-md-6 mx-auto text-center">
      <div class="card-header">
 <h2>{{$book->name}}</h2></div>
         
       <img src="{{asset($book->image)}}" class="img-fluid mt-2" style="height: 200; width: 200" alt="Responsive image">
      <h1> Author:{{$book->author}}</h1>
      


      <div  class="card-body"> <p class="card-text">{{$book->description}} </p>
        <a href="#" class="btn btn-primary">Request Book</a></div>
   
    </div>

 </div>
@endsection
