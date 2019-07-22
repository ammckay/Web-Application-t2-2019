<?php
    //Putting into a namespace called wap
    namespace wap;

    class Comment{
        //Constructor
        function __construct($user, $comments){
            $this->user = $user;
            $this->comments = $comments;
        }

        function getUser(){
            return $this->user;
        }

        function getComments(){
            return $this->comments;
        }
    }
?>