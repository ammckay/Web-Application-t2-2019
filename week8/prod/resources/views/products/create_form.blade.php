@extends('layouts.master') 
@section('title')
    Products 
@endsection 
@section('content')
    <form method="POST" action='{{url("product")}}'>
        {{csrf_field()}}
        <p><label>Name: </label><input type="text" name="name"></p> 
        <p><label>Price: </label><input type="text" name="price"></p> 
        <p><select name="manufacturer">
            @foreach ($manufacturers as $manufacturer)
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option> 
            @endforeach
        </select></p>
        <input type="submit" value="Create"> 
    </form>
@endsection