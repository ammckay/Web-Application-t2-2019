@extends('layout.master')

@section('title')
  Social Media
@endsection
  
@section('content') 

  <!-- Navigation Bar-->
  <div class="navbar">
    <li>Welcome</li>
    <!-- Right side of bar -->
    <div class="navbar-right">
      <a class="active" href="homeForm">Home</a>
      <a href="unique">Unique</a>
      <a href="recent">Recent</a>
    </div>
  </div>

  
  <h1>Add a New Post</h1>

  <div class="addPost">
      <!-- Add New Post Form -->
      <form method="get" action="POST">
      <table>
        <tr><td>Date: </td><td><input type="text" name="date"></td></tr>
        <tr><td>Name: </td><td><input type="text" name="name"></td></tr>
        <tr><td>Title: </td><td><input type="text" name="title"></td></tr>
        <tr><td>Message: </td><td><input type="text" name="message"></td></tr>
        <tr><td colspan=2><input type="submit" value="Search" name="submitBtn">
                          <input type="reset" value="Reset"></td></tr>
      </table>
      </form>
  </div>
  <hr>
  
  <h1>Posts</h1>

  <div class="posts">
    <div class="display">
      <?php
        if(isset($_REQUEST{'submitBtn'})) {
          echo "<div>";
          echo "Name: ", $name, "<br>";
          echo $date, "<br>";
          echo $title, "<br>";
          echo $message;
          echo "</div>";
        }
      ?>
    </div>
  </div>

@endsection