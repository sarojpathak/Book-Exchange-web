@extends('front.layouts.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Hi! Fello User</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="profile-head">
                                    <h5>
                                        Kshiti Ghelani
                                    </h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
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
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-7">
                                                <p>Aangan ko Bhitta, Karesha ko cheu</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn-primary text-light text-uppercase btn-sm" name="btnEdit" value="Edit Profile">Edit Profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-7">
                        
                    </div>
                </div>          
        </div>

        @endsection