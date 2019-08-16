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
            <img src="{{$post->name}}" width="70" height="70"> 
            <b>{{$post->name}}</b>
            <h2>{{$post->title}}</h2>
            <p>{{$post->message}}</p>
          </div> 

          <div class="right">
            <a href="{{url("comments/$post->id")}}">Comments </a><br>
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

@endsection