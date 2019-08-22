<!--
    This page does is for the documentation and ER diagram
-->
@extends('layout.master')

@section('title')
  Documentation and ER Diagram
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
      <a class="active" href="doc">Documentation</a>
    </div>
  </div>

  <div class="ERD">
    <h1>ER Diagram</h1>
    <img src="{{$diagram}}" alt="ER Diagram" width="350" height="350"> 

    <h1>Documentation</h1>

    I was able to complete all of the details for this assignment.  A user can add a post to 
    the posts timeline with all posts being order with the lastest at the top and oldest at the 
    bottom.  The date for each new post is automatically calculated for the accuracy of the 
    timeline and the icon is automatically added, while the user then inputs their name, title, 
    and message for the post.  Each post also displays how many comments that post has.  Each 
    post has to option to edit or delete the post.  Editing the post is in a new page where the 
    user can change the name, title, and message of the post, and once user has finished editting,
    the comments page for that post displays.  Deleting the post also deletes every comment for 
    that post.  Each post has a comments page where comments can be added or deleted, with each 
    comment having a name and a message.  There is a page, under Unique, that displays all the names
    of people who have posted on the timeline, and if they have posted more than once their name is 
    still only displayed once.  When the name is clicked it displays all of their posts.  There is 
    another page called Recent, which display every post from the last 7 days.<br>
    Interesting approaches and anything extra implemented ...

  </div>

@endsection