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
      <a class="active" href="unique">Unique</a>
      <a href="recent">Recent</a>
    </div>
  </div>

  
  <h1>Unique Users</h1>

  @foreach($posts as $post)
    @if ($post)
      <div class="display">
        <a href="{{url("usersPosts/$post->name")}}">{{$post->name}}</a>
      </div>
    @else
      <p>No results found.</p>
    @endif
  @endforeach

@endsection