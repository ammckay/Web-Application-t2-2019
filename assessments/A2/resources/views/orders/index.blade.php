@extends('layouts.app') 
@section('title')
    Orders 
@endsection 
@section('content') 

    <h1> Orders </h1> <br>

    <table style="width:90%">
        <tr>
            <th> User Name </th>
            <th> Product Name </th>
            <th> Product Price </th>
            <th> User Address </th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td> {{ $order->user_name }}  </td>
                <td> {{ $order->product_name }}  </td>
                <td> ${{ $order->price }}  </td>
                <td> {{ $order->address }}  </td>
            </tr>
        @endforeach
    </table> 
@endsection