@extends('front.layouts.master')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>User Info</h1>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="profile-img">
            @if($user->image == '')
                <img src="{{asset('assets/img/defaultUser.png')}}" alt="User Image" />
            @else 
                <img src="{{asset('/storage'.$user->image)}}" alt="User Image" />
            @endif
            </div>
        </div>
        <div class="col-md-5">
            <div class="profile-head">
                <h5>
                    {{$user->name}}
                </h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">About</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-5">
                            <label>Name</label>
                        </div>
                        <div class="col-md-7">
                            <p>{{$user->name}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Email</label>
                        </div>
                        <div class="col-md-7">
                            <p>{{$user->email}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-7">
                            <p>{{$user->phone}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Address</label>
                        </div>
                        <div class="col-md-7">
                            <p>{{$user->address}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
