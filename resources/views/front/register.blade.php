@extends('front.layouts.master')

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
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger block text-center">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <div class="form-group floating-label-form-group controls">
            <label>Full Name:</label>
            <input type="text" name="name" placeholder="Full Name" class="form-control text-center">
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
            <input type="text" name="phone" placeholder="Phone number" class="form-control text-center" required>
          </div>
        </div>
            <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Address:</label>
            <input type="text" name="address" placeholder="Address" class="form-control text-center" required>
          </div>
        </div>

        <div class="control-group">
          <div class="form-group controls pt-4 text-center">
            <input type="checkbox" class="form-check-input mt-2" id="terms" class="terms" />
            <label class="form-check-label text-primary pointer" id="checkTerm" data-toggle="modal" data-target="#exampleModalCenter"><u>Terms and Conditions</u></label>
          </div>
        </div>
        
        <div class="form-group my-4 text-center">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
        <li>The application will store your personal details. i.e; Name, Email, Phone and Address.</li>
        <li>When your exchange request is accepted or you accepts incomming request your contact information will be shared to the user of other end.</li>
        <li>You will be banned form the application if you post any kind of books or magazines that contain porn.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection