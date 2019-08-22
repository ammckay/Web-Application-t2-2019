<!--
    This page does is for the documentation and ER diagram
-->
@extends('layout.master')

@section('title')
  Documentation and ER Diagram
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
      <a class="active" href="doc">Documentation</a>
    </div>
  </div>

@endsection