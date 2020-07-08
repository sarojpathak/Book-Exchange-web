@extends('front.layouts.master')
@section('content')
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Book</th>
            <th scope="col">Author</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Condition</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usersBook as $item)

        <tr>
            <th scope="row">1</th>
            <td>{{$item->name}}</td>
            <td>{{$item->author}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->image}}</td>
            <td>{{$item->condition}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
