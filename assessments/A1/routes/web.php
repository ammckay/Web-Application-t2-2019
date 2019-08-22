<?php
// Web Routes

// Home page
Route::get('/', function () {
    // It is ordered by id DESC so it displays the newest at the top and the oldest at the bottom of the posts
    $sql = "select *,(select count(*) from comments,posts where comments.FK_id = posts.id)as num from posts order by id DESC";
    $posts = DB::select($sql);

    // /* Count comments */
    // $count = "select *,(select count(*) from comments,posts where comments.FK_id = posts.id) as num from comments order by FK_id DESC";
    // $comments = DB::select($count);

    // Icon image 
    $icon = asset('/images/user1.jpg');
    // Dropdown image
    $dots = asset('/images/dots.png');
    // Comments image 
    $com = asset('/images/comments.png');
    
    return view('homeForm')->with('posts', $posts)->with('icon', $icon)->with('dots', $dots)->with('com', $com);              
});

// Documentation & ER Diagram page
Route::get('doc', function () {// Comments image 
    $diagram = asset('/images/ER_Diagram.png');
    return view('doc')->with('diagram', $diagram);
});

// Recent page 
Route::get('recent', function () {
    // Set the defult timezone as QLD
    date_default_timezone_set('Australia/Queensland');
    // Get posts from the last 7 days
    $now = date('Y-m-d');
    $currentDate = strtotime($now);
    $lastWeek = strtotime("-7 day", $currentDate);
    $endDate = date('Y-m-d', $lastWeek);
    // Get posts that are between currentDate and endDate ordered by newest to oldest
    $sql = "select * from posts where date between '$endDate' and '$now' order by id DESC";
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

    $icon = asset('/images/user1.jpg');
    return view('usersPosts')->with('userP', $userP)->with('icon', $icon);
});

// Get post made by a certain user function
function get_user_post($name) { 
    $sql = "select * from posts where name=? order by id DESC";
    $userP = DB::select($sql, array($name));
    return $userP;
};

// Get post function
function get_post($id) { 
    $sql = "select * from posts where id=?";
    $posts = DB::select($sql, array($id));
    return $posts;
};

// Get post function
function get_count_comment($id) { 
    $sql = "select count(comment_id) as num from posts,comments where FK_id=?";
    $comments = DB::select($sql, array($id));
    return $comments;
};


// Adding posts
Route::post('add_post', function () {
    // Set the defult timezone as QLD
    date_default_timezone_set('Australia/Queensland');
    // Instead of the user inputing the date, the current date is taken
    $date = date('Y-m-d');
    $name = request('name');
    $title = request('title');
    $message = request('message');
    $id = add_post($date, $name, $title, $message);
    if ($id){
        return redirect(url("/"));
    } else {
        die("Error while adding post.");
    };
});
function add_post($date, $name, $title, $message){
    $sql = "insert into posts (date, name, title, message) values (?, ?, ?, ?)";
    DB::insert($sql, array($date, $name, $title, $message));
    $id = DB::getPdo()->lastInsertId();
    return $id;
}


// Delete posts
Route::get('delete_post/{id}', function ($id) {
    $posts = delete_post($id);
    $comments = delete_post_comment($id);
    return redirect(url("/"))->with('posts', $posts)->with('comments', $comments);
});
// Delete the post
function delete_post($id) {
    $sql = "delete from posts where id = ?"; 
    DB::delete($sql, array($id));
}
// Delete the comments for that post
function delete_post_comment($id) {
    $sql = "delete from comments where FK_id = ?"; 
    DB::delete($sql, array($id));
}

// Updating posts
Route::get('update_post/{id}', function ($id) {
    $posts = get_post($id);
    return view('update_post')->with('posts', $posts);
});
Route::post('update_post_action', function () {
    $name = request('name');
    $title = request('title');
    $message = request('message');
    $FK_id = request('id');
    
    $id = update_post($name, $title, $message, $FK_id);
    //Redirects to the post's comments page when post updated
    return redirect(url("comments/{$FK_id}"));
    
});
function update_post($name, $title, $message, $FK_id ) {
    $sql = "update posts set name = ?,title = ?,message = ? where id = $FK_id"; 
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
    // Count how many there are in this id/FK_id 
    $sql = "select * from comments where FK_id=?";
    $comments = DB::select($sql, array($id));
    return $comments;
};


// Adding comments
Route::post('add_comment/{id}', function () {
    $name = request('name');
    $comment = request('comment');
    $FK_id = request('id');
    $comment_id = add_comment($name, $comment, $FK_id);
    if ($comment_id){
        return redirect(url("comments/{$FK_id}"));
    } else {
        die("Error while adding comment.");
    };
});
function add_comment($name, $comment, $FK_id){
    $sql = "insert into comments (name, comment, FK_id) values (?, ?, ?)";
    DB::insert($sql, array($name, $comment, $FK_id));
    $comment_id = DB::getPdo()->lastInsertId();
    return $comment_id;
}

// Delete comments
Route::get('delete_comment/{comment_id}', function ($comment_id) {
    $FK_id = request('id');
    $comments = delete_comments($comment_id);
    return redirect(url("/"))->with('comments', $comments);
});
function delete_comments($comment_id) {
    $sql = "delete from comments where comment_id = ?"; 
    DB::delete($sql, array($comment_id));
}

