@extends('layouts.app') 
@section('title')
    Order Placed 
@endsection 
@section('content')
    <h1>Your order has been placed at {{ $order->manufacturer->name }}.</h1>

    <p>Name: {{ $order->user_name }}</p>
    <p>Date: {{ $order->updated_at->format('Y/m/d') }}</p>
    <p>Dish: {{ $order->product_name }}</p>
    <p>Price: ${{ $order->price }}</p> 
    <p>Address: {{ $order->address }}</p>
    
    <p><a href='{{url("product")}}'>Restaurants</a></p> 

@endsection