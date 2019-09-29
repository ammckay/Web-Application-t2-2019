@extends('layouts.app') 
@section('title')
    Products 
@endsection 
@section('content') 

    <h1> Restaurants </h1>
    
    <!-- If the user is logged in they can see the edit link -->
    @if (Auth::user())
        <!-- Create a new product, only restaurant users can go to create page -->
        <h3><a href="{{ url("product/create") }}">Create New Product</a></h3>
    @endif

    <div id="manufacturers">
        <ul>
            <!-- List of restaurants -->
            @foreach ($manufacturers as $manufacturer)
                <a href="{{ url("product/prod", $manufacturer->id) }}"><li>{{ $manufacturer->name }}</li></a>
            @endforeach
        </ul> 
    </div>

@endsection