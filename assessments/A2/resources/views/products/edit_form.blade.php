@extends('layouts.master') 
@section('title')
    Products 
@endsection 
@section('content')
    <h1>Update Product</h1>

    <form method="POST" action= '{{url("product/$product->id")}}'>
        {{csrf_field()}}
        {{ method_field('PUT') }}
        </p><label>Name</label>
        <input type="text" name="name" value="{{$errors->all ? old('name') : $product->name}}"> {{$errors->first('name')}}  </p> 
        <p><label>Price</label>
        <input type="text" name="price" value="{{$errors->all ? old('price') : $product->price}}"> {{$errors->first('price')}} <br></p> 
        <p><select name="restaurant">
        @foreach ($restaurants as $restaurant)
            @if($restaurant->id === $product->restaurant)
                <option value="{{$restaurant->id}}" selected="selected">{{$restaurant->name}}</option>
            @else
                <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
            @endif
        @endforeach
        </select>
        <input type="submit" value="Update">
    </form> 
@endsection