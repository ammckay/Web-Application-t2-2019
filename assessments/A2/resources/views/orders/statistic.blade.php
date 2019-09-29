<!-- Statistics of restaurant user's restaurant -->
@extends('layouts.app') 
@section('title')
    Statistics 
@endsection 
@section('content') 

    <h1> Total amount of sales. </h1> <br>
    
    <table style="width:50%">
    @foreach ($sum as $s)
        <tr>
            <!-- Display the total amount of sales in dollars -->
            <th> ${{ $s->total }} </th>
        </tr>
    @endforeach
    </table>
    <br>

    <h1> Total weekly sales in the past 12 weeks. </h1> <br>

    
    <table style="width:50%">
    @foreach ($weekly as $week)
        <tr>
            <th> ${{ $week->updated_at->format('Y/m/d') }} </th>
            <!-- Display the total amount of sales in dollars -->
            <th> ${{ $week->price }} </th>
        </tr>
    @endforeach
    </table>
    

@endsection