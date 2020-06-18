@layout('layouts.app')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Createt A Account!</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="/users/register" method="POST" encType="multipart/form-data">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Name:</label>
            <input type="text" name="name" placeholder="Name" class="form-control">
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Email:</label>
            <input type="email" name="username" placeholder="Email" class="form-control">
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
        </div>
        
        <div class="form-group my-4 text-center">
          <button class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection