@extends('front::layouts.master')

@section('content')
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row p-5">
            <div class="col-md-12">
                <div class="text-white text-center">
                    <h1>Requests</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    @foreach ($exchangeRequests as $request)
    <div class="card shadow mb-3">
        <div class="card-body row">
            <div class="col-md-9">
                <span class="font-weight-bold text-success">{{$request->requested_by}}</span>
                want to exchange the book <span class="font-weight-bold text-info">"{{$request->book_offered}}"</span>
                with your book <span class="font-weight-bold text-info">"{{$request->book_wanted}}"</span>
            </div>
            <div class="col-md-3 pull-right">
                <div class="pull-right">
                    @if($request->status === 'requested')
                    <form action="{{route('updateRequestStatus')}}" method="POST" encType="form-data">
                        @csrf
                        <button type="submit" name="accepted" value='accepted'
                            class="p-1 px-2 btn-outline-primary btn my-md-1">Accept</button>
                        <button type="submit" name='declined' value='declined'
                            class="p-1 btn-outline-danger btn my-md-1">Decline</button>
                        <input type="hidden" value="{{$request->id}}" name="id">
                    </form>
                </div>
                @elseif($request->status === 'accepted')
                <form action="{{route('getUserInfo')}}" method="POST" encType="form-data">
                    @csrf
                    <input name="uid" value="{{$request->by_uid}}" hidden />
                    <button type="submit" class="p-1 btn-outline-success btn my-md-1">Contact Info</button>
                </form>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
