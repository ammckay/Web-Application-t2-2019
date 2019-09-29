@extends('layouts.app')
@section('title')
    Welcome 
@endsection 
@section('content')

    <p> <a href="{{url("product")}}">Back to Restaurants</a> <p>
    
    <div id="prod">
        <ul>
        <!-- List of dish for the select restaurant -->
        @foreach ($products as $product)
            <li><a href="{{ url("product", $product->id) }}">{{ $product->name }}</a></li>
        @endforeach
        <!-- 5 dishes per link -->
        {{ $products->links()}}
        </ul>  
    </div><br>

@endsection