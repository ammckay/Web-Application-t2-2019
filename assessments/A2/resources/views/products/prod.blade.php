@extends('layouts.app')
@section('title')
    Welcome 
@endsection 
@section('content')

    <ul>
    @foreach ($products as $product)
        <li><a href="{{ url("product", $product->id) }}">{{ $product->name }}</a></li>
    @endforeach
    {{ $products->links()}}
    </ul> 
    
@endsection