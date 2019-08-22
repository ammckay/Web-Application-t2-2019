<!--
    This page does ........
-->
@extends('layout.master')

@section('title')
  Recently Posted
@endsection
  
@section('content') 

  <!-- Navigation Bar-->
  <div class="navbar">
    <li>Welcome</li>
    <!-- Right side of bar -->
    <div class="navbar-right">
      <a href="{{url("/")}}">Home</a>
      <a href="unique">Unique</a>
      <a class="active" href="recent">Recent</a>
      <a href="doc">Documentation</a>
    </div>
  </div>

  <div class="posts">

  <h1>Posts from the last seven days</h1> 

  @foreach($posts as $post)
      @if ($post)
        <div class="display">

          <div class="left">
            <div class="icon">
            <img src="{{$icon}}" alt="User Icon" width="100" height="100">
            </div>
            <div class="text">
              <b>{{$post->name}}</b><br>
              <h2>{{$post->date}}</h2>
              <h3>{{$post->title}}</h3>
              <p>{{$post->message}}</p>

              <hr>

                <a href="{{url("comments/$post->id")}}"><img src="{{$com}}" alt="User Icon" width="45" height="40">{{$post->num}}</a><br>
            </div>
          </div> 

          <div class="right">
            <img src="{{$dots}}" alt="User Icon" width="40" height="15" class="dropBtn">
            <div class="dropdown-content">
              <a href="{{url("update_post/$post->id")}}">Edit</a>
              <a href="{{url("delete_post/$post->id")}}">Delete</a>
            </div>
          </div> 

        </div> 
        @else
        <p>No results found.</p>
      @endif
    @endforeach

  </div> 

@endsection