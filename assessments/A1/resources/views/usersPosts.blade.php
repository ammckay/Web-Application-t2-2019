<!--
    This page does ........
-->
@extends('layout.master')

@section('title')
  Social Media
@endsection
  
@section('content') 

  <!-- Navigation Bar-->
  <div class="navbar">
    <li>Welcome</li>
    <!-- Right side of bar -->
    <div class="navbar-right">
      <a href="{{url("/")}}">Home</a>
      <a href="unique">Unique</a>
      <a href="recent">Recent</a>
      <a href="doc">Documentation</a>
    </div>
  </div>

  

    <h1>User's Posts</h1>

    @foreach($userP as $user)
      @if ($user)
        <div class="display">

          <div class="left">
            <div class="icon">
              <img src="{{$icon}}" alt="User Icon" width="100" height="100">
            </div>
            <div class="text">
              <b>{{$user->name}}</b><br>
              <h2>{{$user->date}}</h2>
              <h3>{{$user->title}}</h3>
              <p>{{$user->message}}</p>
            </div>
          </div> 

        </div> 
        @else
        <p>No results found.</p>
      @endif
    @endforeach


@endsection