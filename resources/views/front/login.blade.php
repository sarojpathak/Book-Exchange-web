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
                <div class="alert alert-danger text-center block">{{$errors->first()}}</div>
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
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                </div>
                <a href="{{route('confirmEmail')}}" class="pull-right">Forgot Password?</a>
            </form>
        </div>
    </div>
</div>
@endsection
