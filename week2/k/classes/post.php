<?php
    //Putting into a namespace called wap
    namespace wap;

    //Use the Comment class
    include 'classes/comment.php';
    use wap\Comment;
    
    class Post{
        //Variables
        protected $user;
        protected $message;
        protected $date;
        protected $image;
        protected $comments;

        //Constructor
        function __construct($user, $message, $date, $image){
            $this->user = $user;
            $this->message = $message;
            $this->date = $date;
            $this->image = $image;
            //Comments in an array
            $this->comments = [];
        }

        function getUser(){
            return $this->user;
        }

        function getMessage(){
            return $this->message;
        }

        function getDate(){
            return $this->date;
        }

        function getImage(){
            return $this->image;
        }

        function getComments(){
            return $this->comments;
        }

        function addComments($user, $comment){
            $this->comments[] = array("user" => $user, "comment"=>$comment);
        }
    }
?>