@extends('layout.master')

@section('title')
  Comments
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
        </div>
    </div>

    <div class="display2">
    <div class="left">
    @foreach($posts as $post)
      @if ($post)
            <img src="{{$post->name}}" width="70" height="70"> 
            <b>{{$post->name}}</b>
            <h2>{{$post->title}}</h2>
            <p>{{$post->message}}</p>
          </div> 

          <div class="right">
            {{$post->date}}
          </div> 
            
        @else
        <p>No results found.</p>
      @endif
    @endforeach
    </div> 

    <div id="container">
      <div id="addComment">
        <h1>Add Comments</h1>

        <!-- Add New Comment Form -->
        <form action="add_comment" method="post"> 
          {{ csrf_field() }}
          <p>
            <label>Name:</label>
            <input type="text" name="name">
          </p>
          <p>
            <label>Comment:</label>
            <textarea type="text" name="comment"></textarea>
          </p>
          
          <input type="submit" value="Submit">
        </form>

      </div>

      <div id="comment">

      
        <h1>Comments </h1>
        @foreach($comments as $comment)
        @if ($comment)
        <div class="display">
          <p><b>{{$comment->name}}</b></p>
          <p>{{$comment->comment}}</p>
          
        </div>
        @else
        <p>No results found.</p>
        @endif
        @endforeach

      </div>

    </div>

@endsection