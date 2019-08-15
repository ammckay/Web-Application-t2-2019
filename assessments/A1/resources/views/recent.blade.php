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

  <h1>Most Recent Posts</h1>

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

@endsection