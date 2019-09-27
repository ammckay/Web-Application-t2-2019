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
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td> {{ $order->product->name }}  </td>
            </tr>
        @endforeach
    </table> 
@endsection