@extends('layouts.master')

@section('title')
  Item Detial
@endsection
  
@section('content') 

    <h1>{{$item->summary}}</h1>
    <p>{{$item->details}}</p>  

    <a href="{{url("delete_item/$item->id")}}">Delete item</a><br>

    <a href="{{ url("update_item/$item->id") }}">Update item</a><br>
    
    <a href="{{url("/")}}">Home</a><br>

@endsection