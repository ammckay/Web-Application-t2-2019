<!--
    This page display all the posts the selected user has made
-->
@extends('layout.master')

@section('title')
  User's Post
@endsection
  
@section('content') 

  <!-- Navigation Bar-->
  <div class="navbar">
    <li>Welcome</li>
    <!-- Right side of bar -->
    <div class="navbar-right">
      <a href="{{url("/")}}">Home</a>
      <a href="{{url("unique")}}">Unique</a>
      <a href="{{url("recent")}}">Recent</a>
      <a href="{{url("doc")}}">Documentation</a>
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

              <hr>
              
              <a href="{{url("comments/$user->id")}}"><img src="{{$com}}" alt="User Icon" width="45" height="40">{{$user->num}}</a><br>
            </div>
          </div> 

        </div> 
        @else
        <p>No results found.</p>
      @endif
    @endforeach


@endsection