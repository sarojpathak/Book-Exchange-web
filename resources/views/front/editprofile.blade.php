@extends('front.layouts.master')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Edit Your Profile!</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{route('editUserInfo')}}" method="POST" encType="multipart/form-data">
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
                        <label>*Full Name:</label>
                        <input type="text" name="name" value="{{$user->name}}" placeholder="Full Name"
                            class="form-control text-center">
                    </div>

                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>*Email:</label>
                        <h6 class="text-center">{{$user->email}}
                        </h6>
                        <input type="hidden" name="email" value="{{$user->email}}" />
                    </div>
                    <hr>
                </div>


                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>*Phone:</label>
                        <input type="text" name="phone" value="{{$user->phone}}" placeholder="Phone number"
                            class="form-control text-center" required>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Address:</label>
                        <input type="text" name="address" value="{{$user->address}}" placeholder="Address"
                            class="form-control text-center" required>
                    </div>
                </div>

                <div class="control-group">
                    <div class="profile-img">
                        @if($user->avatar == 'users/default.png')
                        <img style="height: 200px; width: 200px;" src="{{asset('assets/img/defaultUser.png')}}"
                            alt="User Image" />
                        @else
                        <img style="height: 200px; width: 200px;" src={{asset('storage/'.($user->avatar))}}
                            alt="User Image" />
                        @endif
                    </div>
                    <div class="form-group floating-label-form-group controls">
                        <label>Image:</label>
                        <input type="file" name="image" placeholder="Image" class="form-control text-center">
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$user->id}}">

                <div class="form-group my-4 text-center">
                    <button type="submit" class="btn btn-primary btn-block">update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
