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

  <div id="container">

    <div class="addPost">

      <h1>Add a New Post</h1>

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

    
    <hr>
    </div>
    

    <div class="posts">

    <h1>Posts</h1>

    @foreach($posts as $post)
      @if ($post)
        <div class="display">

          <div class="left">
            <img src="{{$post->name}}" width="70" height="70"> 
            <b>{{$post->name}}</b>
            <h2>{{$post->title}}</h2>
            <p>{{$post->message}}</p>
          </div> 

          <div class="right">
            @foreach($comments as $comment)
            <a href="{{url("comments/$post->id")}}">Comments {{$comment->num}}</a><br>@endforeach
            {{$post->date}}<br>
            <a href="{{url("delete_post/$post->id")}}">Delete</a>
            <a href="{{url("update_post/$post->id")}}">Edit</a>
          </div> 

        </div> 
        @else
        <p>No results found.</p>
      @endif
    @endforeach

    </div>
  </div>

@endsection