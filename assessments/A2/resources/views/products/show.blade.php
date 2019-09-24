@extends('layouts.app') 
@section('title')
    Products 
@endsection 
@section('content')

    <h1>{{$product->name}}</h1>
    <p>{{$product->price}}</p> 
    <p>{{$product->manufacturer->name}}</p>

    <p><a href='{{url("product")}}'>Home</a></p> 
    
    <!-- If the user is a Restaurant (1) user they can see the edit and delete link -->
    @if (Auth::user()->isRestaurant)
        <!-- Edit the product -->
        <p><a href='{{url("product/$product->id/edit")}}'>Edit</a></p> 

        <!-- Delete the product -->
        <p>
            <form method="POST" action= '{{url("product/$product->id")}}'> 
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <input type="submit" value="Delete">
            </form> 
        </p>
    @endif

    <!-- If the user is a Consumer (0) user they can see the edit and delete link -->
    @if (Auth::user()->isRestaurant == 0)
        <p>Purchase</p> 
        <form method="POST" action= '{{url("product/$product->id")}}'> 
                {{csrf_field()}}
                {{ method_field('ORDER') }}
                <input type="submit" value="Order">
        </form> 
    @endif

    
@endsection