<?php
    //Array of data
    $posts = array();
    $posts[] = array(
        'name' => 'Bob',
        'message' => 'hello',
        'image' => 'images/user1.jpg',
        'date' => '1/2/19'
    );
    $posts[] = array(
        'name' => 'John',
        'message' => 'yo',
        'image' => 'images/user2.jpg',
        'date' => '2/2/19'
    );
    $posts[] = array(
        'name' => 'Fred',
        'message' => 'sup',
        'image' => 'images/user3.jpg',
        'date' => '3/2/19'
    );
    //var_dump($posts)
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
                <img src="<?=$post['image'] ?>" width="70" height="70" alt="cake image"> 
                <?=$post['name'] ?>
                <?=$post['message'] ?> <br>
                <?=$post['date'] ?> <br>
            </div>
        <?php } ?>
      </div>
    </body>
</html>