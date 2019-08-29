<!--
    This page allows the user to update the selected post and once finished, goes to the comments page for that user
-->
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
        <a href="{{url("unique")}}">Unique</a>
        <a href="{{url("recent")}}">Recent</a>
        <a href="{{url("doc")}}">Documentation</a>
        </div>
    </div>

    <div class="posts">
      <h1>Update Post</h1>

      <div class="edit">
      @foreach($posts as $post)
        @if ($post)

          <form method="post" action=" {{url("update_post_action")}} ">
              <!-- Laravel function that guards against cross-site request forgery attacks -->
              {{csrf_field()}}
              
              <input type="hidden" name="id" value="{{ $post->id }}">
              <p>
                  <label>Name: </label>
                  <!-- required sttribute specifies that the input field cannot be left blank when submitting the form -->
                  <input type="text" name="name" value="{{ $post->name }}" required> 
              </p>
              <p>
                  <label>Title: </label>
                  <input type="text" name="title" value="{{ $post->title }}" required> 
              </p>
              <p>
                  <label>Message:</label>
                  <textarea name="message" required>{{ $post->message }}</textarea>
              </p>

              <label name="id" class="hide">{{$post->id}}</label>
              
              <p>
                <input type="submit" value="Update Post">
              </p>
          </form>

          @else
          <p>No results found.</p>
        @endif
      @endforeach
      </div>
    </div>

@endsection