@extends('front.layouts.master')
@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="text-white text-center text-uppercase">
                    <h1>My Books</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mx-2">
    <table class="table table-dark">
        <thead class="bg-secondary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Book</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Condition</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usersBook as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->description}}</td>
                <td class="text-center">
                    <img class="book-image-small" src="{{asset('/storage/'.$item->image)}}" alt="Book Image" />
                </td>
                <td>{{$item->condition}}</td>
                <td>{{$item->status}}</td>
                <td>
                    <a class="text-light btn btn-primary" href="{{route('getEditBook',$item->id)}}">Edit</a>
                    <a class="text-light btn btn-danger mt-2" href="#">Delete</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
