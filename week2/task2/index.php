<?php
    include 'classes/postSeeder.php';
    $posts = wap\PostSeeder::seed();
    $posts[0]->addComments("Bob", "Cool post");
    $posts[0]->addComments("Fred", "Sweet");
    $posts[1]->addComments("Fred", "Nice");
    var_dump($posts);
    exit;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Week 2 Task 1</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
      <div id="content">
        <h1>Social Media</h1>
        <!-- Displaying the data in php -->
        <?php foreach($posts as $post) { ?>
            <div id="post">
                <?= $post->getUser() ?>
                <?= $post->getMessage() ?>
            </div>
        <?php } ?>
      </div>
    </body>
</html>