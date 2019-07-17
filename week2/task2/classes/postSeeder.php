<?php
    namespace wap;
    use wap\Post;
    include 'post.php';

    class PostSeeder{
        public static function seed(){
            $posts = [];
            $posts[] = new Post("Bob", "hello");
            $posts[] = new Post("John", "yo");
            $posts[] = new Post("Fred", "sup");
            return $posts;
        }
    }
?>