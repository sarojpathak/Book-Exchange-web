@extends('app')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Create A Account!</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="{{route('postRegister')}}" method="POST" encType="form-data">
      @csrf
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Full Name:</label>
            <input type="text" name="name" placeholder="Full Name" class="form-control text-center" required>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Email:</label>
            <input type="email" name="email" placeholder="Email" class="form-control text-center" required>
          </div>
        </div>
         <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password" required class="form-control text-center">
          </div>
        </div>
         <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>confirm Password:</label>
             <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control text-center" name="password_confirmation " required>
          </div>
        </div>
        
           <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Phone:</label>
            <input type="number" name="phone" placeholder="Phone number" class="form-control text-center" required>
          </div>
        </div>
            <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Address:</label>
            <input type="text" name="address" placeholder="Address" class="form-control text-center" required>
          </div>
        </div>
        
        <div class="form-group my-4 text-center">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection