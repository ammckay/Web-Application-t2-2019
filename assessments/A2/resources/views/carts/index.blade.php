@extends('layouts.app') 
@section('title')
    Cart 
@endsection 
@section('content') 

    <h1> Shopping Cart </h1> <br>

    <table style="width:60%">
        <tr>
            <th> Date Added </th>
            <th> Dish Name </th>
            <th> Dish Price </th>
        </tr>
        @foreach ($carts as $cart)
            <tr>
                <td> {{ $cart->updated_at->format('Y/m/d') }}  </td>
                <td> {{ $cart->product_name }}  </td>
                <td> ${{ $cart->price }}  </td>
                <td> 
                    <!-- Delete from cart -->
                    <form method="POST" action='{{url("cart/$cart->id")}}'> 
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Delete Dish">
                    </form> 
                </td>
            </tr>
        @endforeach 
    </table>  <br>

    <table style="width:60%">
        @foreach ($sum as $s)
            <tr>
                <th> Total Price: </th>
                <!-- Display the total amount of sales in dollars -->
                <th> ${{ $s->total }} </th>
            </tr>
        @endforeach
    </table>


    <!-- Form to purchase a single item -->
    <form method="POST" action='{{url("cart")}}'>
        {{csrf_field()}}
        {{ method_field('DELETE') }}
        <input type="submit" value="Purchase">
    </form> 

@endsection