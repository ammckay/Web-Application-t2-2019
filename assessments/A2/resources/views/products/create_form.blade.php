@extends('layouts.master') 
@section('title')
    Products 
@endsection 
@section('content')
    <h1>Create a new Product</h1>

    @if (count($errors) > 0)
        <div class="alert"> 
            <ul>
                @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
    @endif

    <form method="POST" action='{{url("product")}}'>
        {{csrf_field()}}
        <p><label>Name: </label>
        <input type="text" name="name" value="{{ old('name') }}"></p> 
        <p><label>Price: </label>
        <input type="text" name="price" value="{{ old('price') }}"></p> 
        <p><select name="restaurant">
        @foreach ($restaurants as $restaurant)
            @if($restaurant->id == old('restaurant'))
                <option value="{{$restaurant->id}}" selected="selected">{{$restaurant->name}}</option>
            @else
                <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
            @endif
        @endforeach
        </select></p>
        <input type="submit" value="Create">
    </form> 
@endsection