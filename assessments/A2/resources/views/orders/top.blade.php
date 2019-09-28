@extends('layouts.app') 
@section('title')
    Top 5 Dishes 
@endsection 
@section('content') 

    <h1> Top 5 dishes ordered in the last 30 days. </h1> <br>

    <table style="width:50%">
        <tr>
            <th> Orders </th>
            <th> Dish </th>
        </tr>
    @foreach ($top as $t)
        <tr>
            <!-- Display the count of the dish -->
            <td> {{ $t->c }} </td>
            <!-- Display the name of the dish -->
            <td> {{ $t->product_name }} </td>
        </tr>
    @endforeach
    </table>

@endsection