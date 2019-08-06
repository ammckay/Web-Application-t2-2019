@extends('layout.master')

@section('title')
  Social Media
@endsection
  
@section('content') 

    <div class="container"> 
        <!-- Nav Bar -->
        <div class="row" id="nav">
            <div class="col-md-6"> <a href="">Social Network</a> </div>
            <div class="col-md-2"> <a href="">Photos</a> </div>
            <div class="col-md-2"> <a href="">Friends</a> </div>
            <div class="col-md-2"> <a href="">Login</a> </div>
        </div>
        
        <div class="row" >
            <!-- Name and Message input -->
            <div class="col-md-4"> 
                <label>Name:</label><br><input type="text" id="content"><br>
                <label>Message:</label><br><input type="text" id="content"><br>
            </div>

            <!-- Posts -->
            <div class="col-md-5 col-sm-7">
                <h3>Name</h3>

                <br>

                <div class="row" id="content">
                    <div><img src="cake.jpg"></div>

                    <div>
                        <label>Date Time</label><br>
                        <label>Message</label>
                    </div>
                </div>

                <br>

                <div class="row" id="content">
                    <div><img src="cake.jpg"></div>

                    <div>
                        <label>Date Time</label><br>
                        <label>Message</label>
                    </div>
                </div>

                <br>

                <div class="row" id="content">
                    <div><img src="cake.jpg"></div>

                    <div>
                        <label>Date Time</label><br>
                        <label>Message</label>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection