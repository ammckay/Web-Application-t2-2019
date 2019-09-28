@extends('layouts.app') 
@section('title')
    Orders 
@endsection 
@section('content') 

    <h1> Orders </h1> <br>

    <table style="width:70%">
        <tr>
            <th> Date Ordered </th>
            <th> User Name </th>
            <th> Dish Name </th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td> {{ $order->updated_at->format('Y/m/d') }}  </td>
                <td> {{ $order->user_name }}  </td>
                <td> {{ $order->product_name }}  </td>
            </tr>
        @endforeach
    </table> 
@endsection