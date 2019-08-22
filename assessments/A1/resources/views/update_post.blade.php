@extends('layout.master')

@section('title')
  Update Post
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
        <a href="doc">Documentation</a>
        </div>
    </div>

    <h1>Update Post</h1>

    <div class="posts">
    @foreach($posts as $post)
      @if ($post)

        <form method="post" action=" {{url("update_post_action")}} ">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{ $post->id }}">
            <p>
                <label>Name: </label>
                <input type="text" name="name" value="{{ $post->name }}"> 
            </p>
            <p>
                <label>Title: </label>
                <input type="text" name="title" value="{{ $post->title }}"> 
            </p>
            <p>
                <label>Message:</label>
                <textarea name="message">{{ $post->message }}</textarea>
            </p>

            <label name="id">{{$post->id}}</label>
            
            <input type="submit" value="Update post"> 
        </form>

        @else
        <p>No results found.</p>
      @endif
    @endforeach

    </div>

@endsection