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
    </div>
  </div>

  <h1>Most Recently Viewed Posts</h1>

@endsection