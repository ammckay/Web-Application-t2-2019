@extends('layouts.app')
@section('title')
    Welcome 
@endsection 
@section('content')
    <ul>
        Welcome Page!
    </ul> 
    <h1><a href="{{url("product")}}">Restaurants</a></h1>
@endsection