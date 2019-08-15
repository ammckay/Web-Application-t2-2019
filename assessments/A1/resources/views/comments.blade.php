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
    

    <div id="container">
      <div id="addComment">
        <h1>Add Comments</h1>
        <form method="get" action="add_comment">
          {{csrf_field()}}
          <p>
            <label>Name</label>
            <input type="text" name="name">
          </p>
          <p>
            <label>Comment</label>
            <textarea type="text" name="comment"></textarea>
          </p>
          <input type="submit" value="Add">
        </form>
      </div>

      <div id="comment">
        <h1>Comments</h1>

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