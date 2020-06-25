@extends('front.layouts.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Login!</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{route('postlogin')}}" method="POST">
                    @csrf

                    @if($errors->any())
                        <h4 class="alert alert-danger">{{$errors->first()}}</h4>
                    @endif
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email:</label>
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group my-4 text-center">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
