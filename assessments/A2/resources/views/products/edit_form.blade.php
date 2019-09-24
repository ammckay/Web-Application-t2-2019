@extends('layouts.master') 
@section('title')
    Products 
@endsection 
@section('content')
    <h1>Update Product</h1>

    <form method="POST" action= '{{url("product/$product->id")}}'>
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <!-- Product Name -->
        </p><label>Name</label>
        <!-- Display product name in input, and if not a valid name when submited, display the not valid name in input -->
        <input type="text" name="name" value="{{ $errors->first('name') ? old('name') : $product->name }}"> {{$errors->first('name')}}  </p> 

        <!-- Product Price -->
        <p><label>Price</label>
        <!-- Display product name in input, and if not a valid name when submited, display the not valid name in input -->
        <input type="text" name="price" value="{{ $errors->first('price') ? old('price') : $product->price }}"> {{$errors->first('price')}} <br></p> 

        <!-- Product Manufacturer -->
        <p><select name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
            <!-- Display product manufacturer as selected -->
            @if($manufacturer->id === $product->manufacturer_id)
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
            @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
            @endif
        @endforeach
        </select>
        
        <!-- Submit updated product -->
        <input type="submit" value="Update">
    </form> 
@endsection