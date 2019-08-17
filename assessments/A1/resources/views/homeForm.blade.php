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
      <input type="submit" value="Add Post">
      </form>

    </div>
    
    <hr>

    <div class="posts">

    <h1>Posts</h1>

    @foreach($posts as $post)
      @if ($post)
        <div class="display">

          <div class="left">
            <div class="icon">
              <img src="images/user1.jpg" alt="User Icon" width="100" height="100"> 
            </div>
            <div class="text">
              <b>{{$post->name}}</b><br>
              <h2>{{$post->date}}</h2>
              <h3>{{$post->title}}</h3>
              <p>{{$post->message}}</p>

              <hr>

              @foreach($comments as $comment)
                <a href="{{url("comments/$post->id")}}">Comments {{$comment->num}}</a><br>
              @endforeach
            </div>
          </div> 

          <div class="right">
            <a href="{{url("delete_post/$post->id")}}">Delete</a>
            <a href="{{url("update_post/$post->id")}}">Edit</a>
          </div> 

        </div> 
        @else
        <p>No results found.</p>
      @endif
    @endforeach

    </div>

@endsection