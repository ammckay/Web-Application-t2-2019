<?php
    namespace wap;
    
    class Post{
        protected $user;
        protected $message;
        protected $comments;

        function __construct($user, $message){
            $this->user = $user;
            $this->message = $message;
            $this->comments;
        }

        function getUser(){
            return $this->user;
        }

        function getMessage(){
            return $this->message;
        }

        function getComments(){
            return $this->comments;
        }

        function addComments($user, $comments){
            $this->$comments[] = array("user" => $user, "comments"=>$comments);
        }
    }
?>