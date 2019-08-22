<!--
    This page displays the name of all the people who have a posts
-->
@extends('layout.master')

@section('title')
  Unique
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
      <a href="doc">Documentation</a>
    </div>
  </div>

  
  <h1>Unique Users</h1>

  @foreach($posts as $post)
    @if ($post)
      <div class="display3">
        <a href="{{url("usersPosts/$post->name")}}">{{$post->name}}</a>
      </div>
    @else
      <p>No results found.</p>
    @endif
  @endforeach

@endsection