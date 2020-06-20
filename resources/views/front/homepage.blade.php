@extends('front::layouts.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8 col-md-10 mx-auto">--}}
{{--                @each(post in posts)--}}
{{--                <div class="post-preview">--}}
{{--                    <a href="/post/{{ post._id }}">--}}
{{--                        <h2 class="post-title">--}}
{{--                            {{ post.title }}--}}
{{--                        </h2>--}}
{{--                        <h3 class="post-subtitle">{{ post.subtitle }}</h3>--}}
{{--                    </a>--}}
{{--                    <p class="post-meta">Posted by--}}
{{--                        <a href="#">{{ post.username }}</a>--}}
{{--                        on {{ post.createdAt.toDateString() }}</p>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                @endeach--}}
{{--                <!-- Pager -->--}}
{{--                <div class="clearfix">--}}
{{--                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <hr>
@endsection
