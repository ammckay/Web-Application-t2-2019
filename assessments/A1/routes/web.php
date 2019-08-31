<?php
// Web Routes

// Home page
Route::get('/', function () {
    // It is ordered by id DESC so it displays the newest at the top and the oldest at the bottom of the posts
    // Count how many comments there are for each post as num
    $sql = "select *,(select count(*) from comments where comments.FK_id = posts.id) as num from posts order by id DESC";
    // Use the SQL command select to execute a query
    $posts = DB::select($sql);

    // Icon image 
    $icon = asset('/images/user1.jpg');
    // Dropdown image
    $dots = asset('/images/dots.png');
    // Comments image 
    $com = asset('/images/comments.png');

    // Pass the results from DB::select function for display along with the images
    return view('homeForm')->with('posts', $posts)->with('icon', $icon)->with('dots', $dots)->with('com', $com);              
});

// Documentation & ER Diagram page
Route::get('doc', function () {
    // Comments image 
    $diagram = asset('/images/ER_Diagram.png');
    // View Documentation anf ER Diagram page
    return view('doc')->with('diagram', $diagram);
});

// Recent page 
Route::get('recent', function () {
    // Set the defult timezone as QLD
    date_default_timezone_set('Australia/Queensland');

    // Get posts from the last 7 days
    $now = date('Y-m-d');
    // Current date
    $currentDate = strtotime($now);

    // Get date from 7 days ago
    $lastWeek = strtotime("-7 day", $currentDate);
    $endDate = date('Y-m-d', $lastWeek);

    // Get posts that are between currentDate and endDate ordered by newest to oldest
    // Count how many comments there are for each post
    // Sanitisation was used in this SQL query by using single quotes to prevent errors  !!!!!!!!!CONTINUTE COMMENT
    $sql = "select *,(select count(*) from comments where comments.FK_id = posts.id) as num from posts where date between '$endDate' and '$now' order by id DESC";
    $posts = DB::select($sql);

    // Icon image
    $icon = asset('/images/user1.jpg');
    // Dropdown image
    $dots = asset('/images/dots.png');
    // Comments image
    $com = asset('/images/comments.png');
    
    return view('recent')->with('posts', $posts)->with('icon', $icon)->with('dots', $dots)->with('com', $com);
});

// Unique page
Route::get('unique', function () {
    // Distinct stops dupicates
    $sql = "select distinct name from posts order by id DESC";
    $posts = DB::select($sql);
    return view('unique')->with('posts', $posts);
});

// Unique user's posts 
Route::get('usersPosts/{name}', function ($name) {
    // Get post
    $userP = get_user_post($name);
    // Comments image
    $com = asset('/images/comments.png');
    // Icon image
    $icon = asset('/images/user1.jpg');

    return view('usersPosts')->with('userP', $userP)->with('icon', $icon)->with('com', $com);
});

// Get post made by a certain user function
function get_user_post($name) { 
    // Get all posts made by the name=? ordered by id in a descending order
    // Count the comments for the posts
    // A placeholder was used for what name is equal to
    $sql = "select *,(select count(*) from comments where comments.FK_id = posts.id) as num from posts where name=? order by id DESC";
    // The value that is to replace the placeholder is passed into an array, which is shown below
    $userP = DB::select($sql, array($name));
    return $userP;
};

// Get post function
function get_post($id) { 
    // Get posts where id equals placeholder
    $sql = "select * from posts where id=?";
    $posts = DB::select($sql, array($id));
    return $posts;
};

// Adding posts
Route::post('add_post', function () {
    // Set the defult timezone as QLD
    date_default_timezone_set('Australia/Queensland');

    // Instead of the user inputing the date, the current date is taken
    $date = date('Y-m-d');
    // Get the user inputted
    $name = request('name');
    $title = request('title');
    $message = request('message');
    // add_post() function adds the new post and returns the id for the new record
    $id = add_post($date, $name, $title, $message);
    
    if ($id){
        // If the post was added successfully, redirect back to the home page
        return redirect(url("/"));
    } else {
        // If the post wasn't added successfully, display error message
        die("Error while adding post.");
    };
});
function add_post($date, $name, $title, $message){
    // Insert date, name, title, message into posts tabel
    $sql = "insert into posts (date, name, title, message) values (?, ?, ?, ?)";
    // The values that are to replace the placeholders, above in the SQL query, are passed into an array
    DB::insert($sql, array($date, $name, $title, $message));
    // Get the last inserted id by accessing the pdo layer
    $id = DB::getPdo()->lastInsertId();
    return $id;
}


// Delete posts
Route::get('delete_post/{id}', function ($id) {
    // Get the functions to delete the post and the comments for that post
    $posts = delete_post($id);
    $comments = delete_post_comment($id);
    return redirect(url("/"))->with('posts', $posts)->with('comments', $comments);
});
// Delete the post function
function delete_post($id) {
    // Delete from table where id is equal to selected
    $sql = "delete from posts where id = ?"; 
    // Delete from database
    DB::delete($sql, array($id));
}
// Delete the comments for the post function
function delete_post_comment($id) {
    // Delete from comments table where FK_id is equal to the placeholder
    $sql = "delete from comments where FK_id = ?"; 
    // Value for the placeholder within the array
    // Delete from database
    DB::delete($sql, array($id));
}

// Updating posts
Route::get('update_post/{id}', function ($id) {
    // Get the function that gets posts
    $posts = get_post($id);
    return view('update_post')->with('posts', $posts);
});
Route::post('update_post_action', function () {
    // Get the user inputted information
    $name = request('name');
    $title = request('title');
    $message = request('message');
    // Get the id from the page
    $FK_id = request('id');
    
    $id = update_post($name, $title, $message, $FK_id);
    //Redirects to the post's comments page when post updated
    return redirect(url("comments/{$FK_id}"));
});
function update_post($name, $title, $message, $FK_id ) {
    // Update the posts table column where id is equal to FK_id
    $sql = "update posts set name = ?,title = ?,message = ? where id = '$FK_id' "; 
    DB::update($sql, array($name, $title, $message));
}


// Comments
Route::get('comments/{id}', function ($id) {
    // Get post
    $posts = get_post($id);
    // Get comments for that post
    $comments = get_comment($id);
    // Icon image
    $icon = asset('/images/user1.jpg');
    // Dropdown image
    $dots = asset('/images/dots.png');
    // Comments image 
    $com = asset('/images/comments.png');
    return view('comments')->with('posts', $posts)->with('comments', $comments)->with('icon', $icon)->with('dots', $dots)->with('com', $com);
});

// Get comments function
function get_comment($id) { 
    // Selecting the comments where the FK_id is the same as the id from posts
    $sql = "select * from comments where FK_id=?";
    $comments = DB::select($sql, array($id));
    return $comments;
};


// Adding comments
Route::post('add_comment/{id}', function () {
    // Get the user inputted information
    $name = request('name');
    $comment = request('comment');
    // Get the id from the page
    $FK_id = request('id');
    $comment_id = add_comment($name, $comment, $FK_id);
    if ($comment_id){
        // Redirect to the comments page for the post
        return redirect(url("comments/{$FK_id}"));
    } else {
        // Return an error message
        die("Error while adding comment.");
    };
});
function add_comment($name, $comment, $FK_id){
    // Insert name, comment, and FK_id into comments tabel
    $sql = "insert into comments (name, comment, FK_id) values (?, ?, ?)";
    DB::insert($sql, array($name, $comment, $FK_id));
    $comment_id = DB::getPdo()->lastInsertId();
    return $comment_id;
}

// Delete comments
Route::get('delete_comment/{comment_id}', function ($comment_id) {
    // Get the id from the page
    $FK_id = request('id');

    // Get the function to delete the comment
    $comments = delete_comments($comment_id);
    return redirect(url("/"));
});
function delete_comments($comment_id) {
    // Delete from comments table where comment_id is equal to selected
    $sql = "delete from comments where comment_id = ?"; 
    // Delete from database
    DB::delete($sql, array($comment_id));
}
