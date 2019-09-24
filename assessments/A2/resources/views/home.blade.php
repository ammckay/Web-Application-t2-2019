@extends('layouts.app')
@section('title')
    Home 
@endsection 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- Displays if the logged in user is a restaurant or consumer -->
                <div class="card-header">Dashboard - {!! auth()->user()->isRestaurant == 1 ? 'Restaurant' : 'Consumer' !!} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
