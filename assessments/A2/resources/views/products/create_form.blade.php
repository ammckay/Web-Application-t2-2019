@extends('layouts.master') 
@section('title')
    Products 
@endsection 
@section('content')
    <h1>Create a new Product</h1>
    
    <form method="POST" action='{{url("product")}}' enctype="multipart/form-data">
        {{csrf_field()}}
        <p><label>Name: </label>
        <input type="text" name="name" value="{{ old('name') }}"> {{$errors->first('name')}} </p> 
        <p><label>Price: </label>
        <input type="text" name="price" value="{{ old('price') }}"> {{$errors->first('price')}}  </p> 
        <p><select name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
            @if($manufacturer->id == old('manufacturer'))
                <option value="{{ $manufacturer->id }}" selected="selected">{{ $manufacturer->name }}</option>
            @else
                <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
            @endif
        @endforeach
        </select></p>

        <!-- Image -->
        <p><input type="file" name="image"></p>

        <input type="submit" value="Create">

        
    </form> 
@endsection