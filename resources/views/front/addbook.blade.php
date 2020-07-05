@extends('front.layouts.master')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Add Your Book!</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="{{route('addbook')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="control-group">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <div class="form-group floating-label-form-group controls">
            <label>Book Name:</label>
            <input type="text" name="name" placeholder="Full Name" class="form-control text-center">
          </div>
  
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Author:</label>
            <input type="text" name="author" placeholder="Author Name" class="form-control text-center" required>
          </div>
        </div>
         <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Description:</label>
            <textarea type="text" name="description" placeholder="Description" required class="form-control text-center"></textarea>
          </div>
        </div>
         <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Image:</label>
             <input  placeholder="Book Image" type="file" class="form-control text-center" name="image" required>
          </div>
        </div>
      <div class="form-group my-4 text-center">
   
    <label for="exampleFormControlSelect1">
      Condition:
    </label>
    <select class="form-control text-center" name="condition">
      <option value="likenew">New</option>
      <option value="used">Used</option>
      <option>3</option>
    </select>
      </div>
        <div class="form-group my-4 text-center">
          <button type="submit" class="btn btn-primary">Add Book</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection