@extends('layouts.app') 
@section('title')
    Products 
@endsection 
@section('content')

    <p><a href='{{url("product")}}'> Back to Restaurants </a></p> 
    <!-- Go back to the page with the products for this manufacturer -->
    <p><a href='{{ url("product/prod", $product->manufacturer->id) }}'>Back to {{ $product->manufacturer->name }} Dishes </a><p>
    

    <h1> {{ $product->manufacturer->name }} </h1>
    <h2> {{ $product->name }} </h2>
    <p> Price: ${{ $product->price }} </p> 
    <img src="{{ url($product->image) }}" alt="product image" style="width:200px;height:200px;"> <br>

    <!-- If the user is a Restaurant (1) user and they are linked to this restaurant they can see the edit and delete link -->
    @if (Auth::user()->isRestaurant == 1 && Auth::user()->manufacturer_id == $product->manufacturer->id)
        <!-- Edit the product -->
        <p><a href='{{url("product/$product->id/edit")}}'>Edit Dish</a></p> 

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
    <!-- Form to purchase a single item -->
    <form method="POST" action='{{url("order")}}'>
        {{csrf_field()}}
        <!-- Work on get user and product like manufacturer -->
        <!-- user -->
        <p><input type="hidden" name="user" value="{{ Auth::user()->id }}">  </p> 
        <!-- product -->
        <p><input type="hidden" name="product" value="{{ $product->id }}">  </p> 


        <!-- The information is hidden from the user and can only view the button -->
        <!-- user_name -->
        <p><input type="hidden" name="user_name" value="{{ Auth::user()->name }}">  </p> 
        <!-- product_name -->
        <p><input type="hidden" name="product_name" value="{{ $product->name }}">  </p> 
        <!-- price -->
        <p><input type="hidden" name="price" value="{{ $product->price }}">  </p> 
        <!-- price -->
        <p><input type="hidden" name="address" value="{{ Auth::user()->address }}">  </p> 
        <!-- manufacturer -->
        <p><input type="hidden" name="manufacturer" value="{{ $product->manufacturer_id }}">  </p> 

        <input type="submit" value="Purchase Dish">
    </form> 

    <!-- Form to put an item into cart -->
    <form method="POST" action='{{url("cart")}}'>
        {{csrf_field()}}
        <!-- Work on get user and product like manufacturer -->
        <!-- user -->
        <p><input type="hidden" name="user" value="{{ Auth::user()->id }}">  </p> 
        <!-- product -->
        <p><input type="hidden" name="product" value="{{ $product->id }}">  </p> 


        <!-- The information is hidden from the user and can only view the button -->
        <!-- user_name -->
        <p><input type="hidden" name="user_name" value="{{ Auth::user()->name }}">  </p> 
        <!-- product_name -->
        <p><input type="hidden" name="product_name" value="{{ $product->name }}">  </p> 
        <!-- price -->
        <p><input type="hidden" name="price" value="{{ $product->price }}">  </p> 
        <!-- price -->
        <p><input type="hidden" name="address" value="{{ Auth::user()->address }}">  </p> 
        <!-- manufacturer -->
        <p><input type="hidden" name="manufacturer" value="{{ $product->manufacturer_id }}">  </p> 

        <input type="submit" value="Add to Cart">
    </form> 

    @endif

@endsection