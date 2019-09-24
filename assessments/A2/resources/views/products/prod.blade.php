@extends('layouts.app')
@section('title')
    Welcome 
@endsection 
@section('content')

<!-- Create a new product -->
<h1><a href="{{ url("product/create") }}">Create</a></h1>
    
    <ul>
    @foreach ($products as $product)
        <li><a href="{{ url("product/item", $product->id) }}">{{$product->name}}</a></li>
    @endforeach
    {{ $products->links()}}
    </ul> 
@endsection