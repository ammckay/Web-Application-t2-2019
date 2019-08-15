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
    return view('homeForm')->with('posts', $posts);
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

/* Updating items */
Route::get('update_post/{id}', function ($id) {
    $post = get_post($id);
    return view('update_post')->with('post', $post);
});


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

