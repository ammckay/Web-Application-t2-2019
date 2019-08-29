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
        <a href="{{url("unique")}}">Unique</a>
        <a href="{{url("recent")}}">Recent</a>
        <a href="{{url("doc")}}">Documentation</a>
        </div>
    </div>

    <div class="display2">
    <div class="left">
    @foreach($posts as $post)
      @if ($post)
        <div class="icon">
          <img src="{{$icon}}" alt="User Icon" width="100" height="100">
        </div>
        <div class="text">
          <b>{{$post->name}}</b><br>
          <h2>{{$post->date}}</h2>
          <h3>{{$post->title}}</h3>
          <p>{{$post->message}}</p>
        </div> 
        </div>

        <div class="right">
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
        <form action="{{url("add_comment/{id}")}}" method="post"> 
          <!-- Laravel function that guards against cross-site request forgery attacks -->
          {{ csrf_field() }}
          <p>
            <label>Name:</label>
            <!-- required sttribute specifies that the input field cannot be left blank when submitting the form -->
            <input type="text" name="name" required>
          </p>
          <p>
            <label>Comment:</label>
            <textarea type="text" name="comment" required></textarea>
          </p>
          <p>
          @foreach($posts as $post)
          @if ($post)
          <textarea name="id" class="hide">{{$post->id}}</textarea>
          @else
        <p>No results found.</p>
        @endif
      @endforeach
      
          </p>
          
          <input type="submit" value="Submit">
        </form>

      </div>


      <div id="comment">

        <h1>Comments </h1>

        <!-- Display the comments for the selected post-->

        @foreach($comments as $comment)
        @if ($comment)
        <div class="display">
          <!-- Name and comment display -->
          <div class="left">
            <div class="text">
              <b>{{$comment->name}}</b>  
              <p>{{$comment->comment}}</p>
            </div>
          </div>

          <!-- Delete comment -->
          <div class="right">
            <img src="{{$dots}}" alt="User Icon" width="40" height="15" class="dropBtn">
            <div class="dropdown-content">
              <a href="{{url("delete_comment/$comment->comment_id")}}">Delete</a>
            </div>
          </div> 
          
        </div>
        @else
        <p>No results found.</p>
        @endif
        @endforeach

      </div>

    </div>

@endsection