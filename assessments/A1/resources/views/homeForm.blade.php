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
      <a class="active" href="{{url("/")}}">Home</a>
      <a href="unique">Unique</a>
      <a href="recent">Recent</a>
    </div>
  </div>

  
  <h1>Add a New Post</h1>

  <div class="addPost">

    <!-- Add New Post Form -->
    <form method="post" action="add_post">
    {{csrf_field()}}
    <p>
      <label>Date:</label>
      <input type="text" name="date">
    </p>
    <p>
      <label>Name:</label>
      <input type="text" name="name">
    </p>
    <p>
      <label>Title:</label>
      <input type="text" name="title">
    </p>
    <p>
      <label>Message:</label>
      <textarea type="text" name="message"></textarea>
    </p>
    <input type="submit" value="Add">
    </form>

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
        <p><a href="{{url("comments/$post->id")}}">Number of Comments / View Comments</a></p>
      </div> 

    @endforeach
    @else
    No posts found
  @endif
  </div>

@endsection