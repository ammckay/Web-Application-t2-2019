<?php
    //Gets info from postSeeder.php
    include 'classes/postSeeder.php';
    //Calling the seed function in postSeeder.php
    //Use the namespace PostSeeder
    $posts = wap\PostSeeder::seed();

    //What the comments are and which box they will display in
    
    $posts[0]->addComments("Fred", "Cool post");
    $posts[1]->addComments("Fred", "Sweet");
    $posts[1]->addComments("Bob", "Great");
    $posts[2]->addComments("Bob", "Nice");
    $posts[2]->addComments("John", "Always");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Week 2 Task 3</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

        <div id="content">
            <h1>Social Media</h1>

            <!-- Displaying the data in php -->
            <?php foreach($posts as $post) { ?>
                <div id="post">
                    <b> <?= $post->getDate() ?> </b>
                    <p>
                    <img src="<?= $post->getImage() ?>" width="70" height="70" alt="cake image"> 
                    <b> <?= $post->getUser() ?> </b> </p>
                    <?= $post->getMessage() ?> 
                    <p> <b> Comments: </b> </p>

                    <!--  -->
                    <?php $comments = $post->getComments();
                    foreach($comments as $comment) { ?>
                        <b> <?= $comment["user"] ?> </b> said " <?= $comment["comment"] ?> " <br>
                    <?php } ?>

                </div>
            <?php } ?>

        </div>

    </body>
</html>