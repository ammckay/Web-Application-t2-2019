@extends('layouts.master') 
@section('title')
    Products 
@endsection 
@section('content')
    <h1>Create a new Dish for your restaurant.</h1> 
    
    <form method="POST" action='{{url("product")}}' enctype="multipart/form-data">
        {{csrf_field()}}
        <!-- Input the name of the new dish and will display an error next to the input box if name is not valid -->
        <p><label>Name: </label>
        <input type="text" name="name" value="{{ old('name') }}"> {{$errors->first('name')}} </p> 
        
        <!-- Input the price of the new dish and will display an error next to the input box if price is not valid -->
        <p><label>Price: </label>
        <input type="text" name="price" value="{{ old('price') }}"> {{$errors->first('price')}}  </p> 
        
        <!-- The restaurant is selected based on the user -->
        <p>
        <input type="hidden" name="manufacturer" value="{{ Auth::user()->manufacturer_id }}"> </p> 

        <!-- Image -->
        <p><input type="file" name="image"></p>

        <input type="submit" value="Create">

        
    </form> 
@endsection