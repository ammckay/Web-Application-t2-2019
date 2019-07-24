<?php
//This php file is to create mock data and return the data

    //Putting into a namespace called wap
    namespace wap;
    //Use the namespace Post
    use wap\Post;
    //Gets info from post.php
    include 'Post.php';

    class PostSeeder{
        //Create posts
        public static function seed(){
            //Store the posts in an array
            $posts = [];
            //Put into the array
            $posts[] = new Post("Bob", "Cats are cool", "1/2/19", "images/user1.jpg");
            $posts[] = new Post("John", "Snow is nice", "2/2/19", "images/user2.jpg");
            $posts[] = new Post("Fred", "Listening to music", "3/2/19", "images/user3.jpg");
            //Return the array
            return $posts;
        }
    }
?>