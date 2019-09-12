@extends('layouts.app') 
@section('title')
    Products 
@endsection 
@section('content') 
<h1><a href="{{url("product/create")}}">Create</a></h1>
    <ul>
        @foreach ($products as $product)
            <a href="product/{{$product->id}}"><li>{{ $product->name }}</li></a>
        @endforeach
    </ul> 
@endsection