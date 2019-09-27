@extends('layouts.app') 
@section('title')
    Products 
@endsection 
@section('content') 
    
    <ul>
        <!-- If the user is logged in they can see the edit link -->
        @if (Auth::user())
            <!-- Create a new product -->
            <h3><a href="{{ url("product/create") }}">Create New Product</a></h3>
            <!-- See orders page -->
            <h3><a href="{{url("order")}}">View Orders for Restaurant</a></h3>
        @endif
    </ul> 

    <ul>
        @foreach ($manufacturers as $manufacturer)
            <a href="{{ url("product/prod", $manufacturer->id) }}"><li>{{ $manufacturer->name }}</li></a>
        @endforeach
    </ul> 

@endsection