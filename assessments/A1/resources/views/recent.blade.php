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

  <div class="posts">

  <h1>Most Recent Posts</h1> 

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

                <a href="{{url("comments/$post->id")}}">Comments</a><br>
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