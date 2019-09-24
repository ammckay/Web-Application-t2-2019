@extends('layouts.app') 
@section('title')
    Products 
@endsection 
@section('content') 
    <!-- Name of Restaurants -->
    <h1>{{$product->manufacturer->name}}</h1>

    <!-- Create a new product -->
    <p><a href="{{url("product/create")}}">Create</a></p>
    
    <ul>
        <a href="products/{{$products->id}}"><li>{{ $products->name }}</li></a>
    </ul> 

    
@endsection