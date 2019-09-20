@extends('layouts.master') 
@section('title')
    Products 
@endsection 
@section('content')
    <h1>{{$product->name}}</h1>
    <p>{{$product->price}}</p> 
    <p>{{$product->manufacturer->name}}</p>

    <!-- If the user is logged in they can see the edit link -->
    @if (Auth::user())
        <p><a href='{{url("product/$product->id/edit")}}'>Edit</a></p> 
    @endif
    
    <p><a href='{{url("product")}}'>Home</a></p> 
    <p>
        <form method="POST" action= '{{url("product/$product->id")}}'> 
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form> 
    </p>
@endsection