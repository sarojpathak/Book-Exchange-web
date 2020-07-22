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
    <table class="table table-dark table-responsive">
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
                    <a class="btn text-light text-center btn-primary btn-small btn-block" href="{{route('getEditBook',$item->id)}}">Edit</a>
                    <form>
                        <button class="btn text-light text-center btn-danger btn-small mt-2 btn-block" href="#">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
