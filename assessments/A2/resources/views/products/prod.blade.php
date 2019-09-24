@extends('layouts.app')
@section('title')
    Welcome 
@endsection 
@section('content')

    <!-- If the user is logged in they can see the edit link -->
    @if (Auth::user())
        <!-- Create a new product -->
        <h3><a href="{{ url("product/create") }}">Create New Product</a></h3>
        <!-- See orders page -->
        <h3><a href="{{url("order")}}">View Orders for Restaurant</a></h3>
    @endif

    <br>

    <ul>
    @foreach ($products as $product)
        <li><a href="{{ url("product", $product->id) }}">{{$product->name}}</a></li>
    @endforeach
    {{ $products->links()}}
    </ul> 
@endsection