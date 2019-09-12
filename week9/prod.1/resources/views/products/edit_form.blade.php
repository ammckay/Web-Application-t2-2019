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
        <p><select name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
            @if($manufacturer->id === $product->manufacturer_id)
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
            @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
            @endif
        @endforeach
        </select>
        <input type="submit" value="Update">
    </form> 
@endsection