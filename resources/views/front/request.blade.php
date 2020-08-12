@extends('front::layouts.master')

@section('content')
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row p-5">
            <div class="col-md-12">
                <div class="text-white text-center">
                    <h1>Requests by You</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    @foreach ($exRequests as $request)
    <div class="shadow mb-3">
        @if($request->status === 'requested')
        <div class="row py-2" style="background-color: #d9f5ff">
            <div class="col-md-9">
                You have send a request to <span class="font-weight-bold text-primary">{{$request->requested_to}}</span>
                to exchange the book <span class="font-weight-bold text-info">"{{$request->book_wanted}}"</span>
                with your book <span class="font-weight-bold text-info">"{{$request->book_offered}}"</span>
            </div>
            <div class="col-md-3">
                <div class="pull-right">
                    <form method="post" action="{{route('deleteRequest')}}" encType="form-data">
                        @csrf
                        <input type="hidden" name="exchangeId" value={{$request->id}} />
                        <button type="submit" class="p-1 btn-outline-danger btn my-md-1">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @elseif($request->status === 'accepted')
        <div class="row py-2" style="background: #beffba">
            <div class="col-md-9">
                <span class="font-weight-bold text-primary">{{$request->requested_to}}</span>
                has accepted your request to exchange the book <span
                    class="font-weight-bold text-info">"{{$request->book_wanted}}"</span>
                with your book <span class="font-weight-bold text-info">"{{$request->book_offered}}"</span>
            </div>
            <div class="col-md-3">
                <div class="pull-right">
                    <form action="{{route('getUserInfo')}}" method="POST" encType="form-data">
                        @csrf
                        <input name="uid" value="{{$request->to_uid}}" hidden />
                        <button type="submit" class="p-1 btn-outline-info btn my-md-1">Contact Info</button>
                    </form>
                    <form action="{{route('exchangeCompleted')}}" method="POST" encType="form-data">
                        @csrf
                        <input name="completed" value="{{$request->id}}" hidden />

                        <button type="submit" class="p-1 btn-outline-success btn my-md-1">Exchange Complete</button>
                    </form>
                </div>
            </div>
        </div>
        @elseif($request->status === 'declined')
        <div class="row py-2" style="background: #ffc3bd">
            <div class="col-md-9">
                <span class="font-weight-bold text-primary">{{$request->requested_to}}</span>
                has declined your request to exchange the book <span
                    class="font-weight-bold text-info">"{{$request->book_wanted}}"</span>
                with your book <span class="font-weight-bold text-info">"{{$request->book_offered}}"</span>
            </div>
            <div class="col-md-3">
                <div class="pull-right">
                    <form action="{{route('deleteRequest')}}" method="post" encType="form-data">
                        @csrf
                        <input name="exchangeId" value="{{$request->id}}" hidden />
                        <button type="submit" class="p-1 btn-outline-danger btn my-md-1">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
    @endforeach
</div>

@endsection
