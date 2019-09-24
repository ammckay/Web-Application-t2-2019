@extends('layouts.app') 
@section('title')
    Orders 
@endsection 
@section('content') 

    <h1> Orders </h1> <br>

    <table style="width:50%">
        <tr>
            <th> User Name </th>
            <th> Product Name </th>
            <th> Quantity </th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td> {{ $order->user_name }} </td>
                <td> {{ $order->product_name }} </td>
                <td> Q{{ $order->quantity }} </td>
            </tr>
        @endforeach
    </table> 
@endsection