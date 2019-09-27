@extends('layouts.app') 
@section('title')
    Products 
@endsection 
@section('content')

    <h1>{{$product->manufacturer->name}}</h1>
    <h2>{{$product->name}}</h2>
    <p>Price: ${{$product->price}}</p> 
    <img src="{{url($product->image)}}" alt="product image" style="width:300px;height:300px;">
    
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

    <!-- If the user is a Consumer (0) user they can see the button to purchase this item -->
    @if (Auth::user()->isRestaurant == 0)
    <form method="POST" action='{{url("order")}}'>
        {{csrf_field()}}
        <!-- user_name -->
        <p><input type="text" name="user_name" value="{{ Auth::user()->name }}">  </p> 
        <!-- product_name -->
        <p><input type="text" name="product_name" value="{{ $product->name }}">  </p> 
        <!-- price -->
        <p><input type="text" name="price" value="{{ $product->price }}">  </p> 
        <!-- price -->
        <p><input type="text" name="address" value="{{ Auth::user()->address }}">  </p> 

        <input type="submit" value="Purchase">
    </form> 
    @endif

@endsection