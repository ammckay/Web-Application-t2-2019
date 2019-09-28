@extends('layouts.app') 
@section('title')
    Orders 
@endsection 
@section('content') 

    <h1> Orders </h1> <br>

    <table style="width:95%">
        <tr>
            <th> Date Ordered </th>
            <th> Restaurants  </th>
            <th> User Name </th>
            <th> Dish Name </th>
            <th> Dish Price </th>
            <th> User Address </th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td> {{ $order->updated_at->format('Y/m/d') }}  </td>
                <td> {{ $order->manufacturer->name }}  </td>
                <td> {{ $order->user_name }}  </td>
                <td> {{ $order->product_name }}  </td>
                <td> ${{ $order->price }}  </td>
                <td> {{ $order->address }}  </td>
            </tr>
        @endforeach
    </table> 
@endsection