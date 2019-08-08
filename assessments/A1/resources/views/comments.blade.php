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

    <div class="display">
      <b>{{$post->name}}</b>
      {{$post->date}}
      <p>{{$post->title}}</p>
      <p>{{$post->message}}</p>
    </div> 

    <h1>Comments</h1>

    <h1>Add Comments</h1>
    <form method="get" action="add_comment">
    {{csrf_field()}}
    <p>
      <label>Comment</label>
      <textarea type="text" name="comment"></textarea>
    </p>
    <input type="submit" value="Add">
    </form>

@endsection