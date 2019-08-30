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
    the posts timeline with all posts being order, with the lastest at the top and oldest at the 
    bottom.  The date for each new post is automatically calculated for the accuracy of the 
    timeline and the icon is automatically added, while the user then inputs their name, title, 
    and message for the post.  Each post also displays how many comments that individual post has.  
    Each post has the option to edit or delete the post.  Editing the post is in a new page where the 
    user can change the name, title, and message of the post, and once user has finished editing,
    the comments page for that post displays.  Deleting the post deletes every comment for 
    that post along with the post itself.  Each post has a comments page where comments can be added or deleted, 
    with each comment having a name and a message.  There is a page, under Unique in the navigation
    bar, that displays all the names of people who have posted on the timeline, and if they have posted 
    more than once, their name is still only displayed once.  When the name is clicked it displays all of 
    their posts.  There is another page called Recent, which displays every post from the last 7 days.  This 
    was done by getting the current date, then calculating 7 days ago from the current date and adding them into 
    the SQL query to get the posts with the dates between current and 7 days ago.
    
    <br><br>

    There were a few security measures that have been implemented into this assignment.  Sanitisation and
    placeholders were added into web.php SQL queries to stop the user from changing the function of the SQL queries.
    Sanitisation, which are using single quotes, was used in the SQL query to get the posts that were made in the last 7 
    days for dates between two variables.  Placeholders were used in many of the SQL queries; in the DB::select() there 
    are values in an array, which are to replace the placeholders.  Another measure that was taken is making sure that 
    when submitting a form, the user hasn't left any blank input or textarea boxes.  This was done by adding a required 
    attribute that specifies that input and textarea fields cannot be empty.

  </div>

@endsection