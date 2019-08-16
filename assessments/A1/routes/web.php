<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // It is ordered by id DESC so it displays the newest at the top and the oldest at the bottom of the posts
    $sql = "select * from posts order by id DESC";
    $posts = DB::select($sql);
    $sql2 = "select *,count(*) as num from comments,posts where posts.id = comments.FK_id";
    $comments = DB::select($sql2);
    return view('homeForm')->with('posts', $posts)->with('comments', $comments);
});


Route::get('recent', function () {
    $sql = "select * from posts order by id DESC";
    $posts = DB::select($sql);
    return view('recent')->with('posts', $posts);
});

Route::get('unique', function () {
    return view('unique');
});

Route::get('home', function () {
    return view('homeForm');
});


/* Adding posts */
Route::post('add_post', function () {
    $date = request('date');
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


/* Delete posts */
Route::get('delete_post/{id}', function ($id) {
    $posts = delete_post($id);
    return redirect(url("/"))->with('posts', $posts);
});
function delete_post($id) {
    $sql = "delete from posts where id = ?"; 
    DB::delete($sql, array($id));
}

/* Updating posts  NOT COMPLETE */
Route::get('update_post/{id}', function ($id) {
    $post = get_post($id);
    return view('update_post')->with('post', $post);
});
Route::post('update_post_action', function () {
    $name = request('name');
    $title = request('title');
    $message = request('message');
    $id = update_post($name, $title, $message);
    if ($id){
        return redirect(url("comments/{id}")); //Will go to the comments
    } else {
        die("Error while updating post.");
    };
});
function update_post($id, $name, $title, $message) {
    $sql = "update posts set name = ?,title = ?,message = ? where id = ?"; 
    DB::update($sql, array($name, $title, $message, $id));
}


/* Get post function */
function get_post($id) { 
    $sql = "select * from posts where id=?";
    $posts = DB::select($sql, array($id));
    if (count($posts) != 1){
        die("Something has gone wrong, invalid query or result: $sql");
    };
    $post = $posts[0];
    return $post;
};

/* Get comments function */
function get_comment($id) { 
    /* Selecting the comments where the FK_id is the same as the id from posts */
    /* Count how many there are in this id/FK_id */
    $sql = "select * from comments where FK_id=?";
    $comments = DB::select($sql, array($id));
    return $comments;
};

/* Comments */
Route::get('comments/{id}', function ($id) {
    /* Get post */
    $post = get_post($id);
    /* Get comments for that post */
    $comments = get_comment($id);
    return view('comments')->with('post', $post)->with('comments', $comments);
});

/* Get count comments function */
function count_comment($id) { 
    $sql = "select count(comment_id) from comments where FK_id=?";
    $count = DB::select($sql, array($id));
    return $count;
};


/* Adding comments NEED TO START THIS */
Route::post('add_comment', function () {
    $name = request('name');
    $comment = request('comment');
    $comment_id = add_comment($name, $comment);
    if ($comment_id){
        return redirect(url("/"));
    } else {
        die("Error while adding post.");
    };
});
function add_comment($name, $comment){
    $sql = "insert into comments (name, comment, FK_id) values (?, ?, ?)";
    DB::insert($sql, array($name, $comment));
    $comment_id = DB::getPdo()->lastInsertId();
    return $comment_id;
}