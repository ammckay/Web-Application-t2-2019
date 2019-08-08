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
      <a class="active" href="homeForm">Home</a>
      <a href="unique">Unique</a>
      <a href="recent">Recent</a>
    </div>
  </div>

  
  <h1>Add a New Post</h1>

  <div class="addPost">
      <!-- Add New Post Form -->
      
  </div>
  <hr>
  
  <h1>Posts</h1>

  <div class="posts">
    @if ($posts)
    @foreach($posts as $post)

      <div class="display">
        <b>{{$post->name}}</b>
        {{$post->date}}
        <p>{{$post->title}}</p>
        <p>{{$post->message}}</p>
      </div> 

    @endforeach
    @else
      No item found
    @endif
  </div>

@endsection