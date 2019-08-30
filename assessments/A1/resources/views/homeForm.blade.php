<!--
    This page displays the posts timeline
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
      <a class="active" href="{{url("/")}}">Home</a>
      <a href="unique">Unique</a>
      <a href="recent">Recent</a>
      <a href="doc">Documentation</a>
    </div>
  </div>

    <div class="addPost">

      <h1>Add a New Post</h1>

      <!-- Add New Post Form -->
      <!-- action specifies the URL to submit the form -->
      <form method="post" action="add_post">

      <!-- Laravel function that guards against cross-site request forgery attacks -->
      {{csrf_field()}}
      
      <p>
        <label>Name:</label>
        <!-- required attribute specifies that the input / textarea field cannot be left blank when submitting the form -->
        <input type="text" name="name" required>
      </p>
      <p>
        <label>Title:</label>
        <input type="text" name="title" required>
      </p>
      <p>
        <label>Message:</label>
        <textarea type="text" name="message" required></textarea>
      </p>
      <p>
        <!-- Submit the form -->
        <input type="submit" value="Add Post">
      </p>
      </form>

    </div>
    
    <hr>

    <div class="posts">
    
    <h1>Posts</h1>

    <!-- Foreach loop -->
    @foreach($posts as $post)
      @if ($post)
        <div class="display">

          <div class="left">
            <!-- Icon image from web.php -->
            <div class="icon">
              <img src="{{$icon}}" alt="User Icon" width="100" height="100">
            </div>
            <!-- Display information from web.php / database -->
            <div class="text">
              <b>{{$post->name}}</b><br>
              <h2>{{$post->date}}</h2>
              <h3>{{$post->title}}</h3>
              <p>{{$post->message}}</p>

              <hr>
              
              <!-- Link to comments page for selected post -->
              <a href="{{url("comments/$post->id")}}"><img src="{{$com}}" alt="User Icon" width="45" height="40">{{$post->num}}</a><br>
               
            </div>
          </div> 

          <div class="right">
            <!-- Image from web.php for the dropdown content -->
            <img src="{{$dots}}" alt="User Icon" width="40" height="15" class="dropBtn">
            <div class="dropdown-content">
              <!-- Link to updates page for selected post -->
              <a href="{{url("update_post/$post->id")}}">Edit</a>
              <!-- Link to delete selected post -->
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