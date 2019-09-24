@extends('layouts.app')
@section('title')
    Welcome 
@endsection 
@section('content')

    <ul>
        @foreach ($manufacturers as $manufacturer)
            <a href="manufacturer/{{$manufacturer->id}}"><li>{{ $manufacturer->name }}</li></a>
        @endforeach
    </ul> 
@endsection