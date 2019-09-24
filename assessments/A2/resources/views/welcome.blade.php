@extends('layouts.app')
@section('title')
    Welcome 
@endsection 
@section('content')
    <h1>Welcome Page!</h1>
<br>
    <h3><a href="{{url("product")}}">Restaurants</a></h3>
@endsection