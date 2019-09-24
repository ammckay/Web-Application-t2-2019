@extends('layouts.app') 
@section('title')
    Products 
@endsection 
@section('content') 
    
    <ul>
        Welcome 
    </ul> 

    <ul>
        @foreach ($manufacturers as $manufacturer)
            <a href="product/{{ $manufacturer->id }}"><li>{{ $manufacturer->name }}</li></a>
        @endforeach
    </ul> 

@endsection