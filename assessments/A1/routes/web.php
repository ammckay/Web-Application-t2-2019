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
    $sql = "select * from posts";
    $posts = DB::select($sql);
    return view('homeForm')->with('posts', $posts);
});

Route::get('recent', function () {
    return view('recent');
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
    $posts = add_post($date, $name, $title, $message);
    if ($posts){
        return view('homeForm')->with('posts', $posts);
    } else {
        die("Error while adding post.");
    };
});

function add_post($date, $name, $title, $message){
    $sql = "insert into posts (date, name, title, message) values (?, ?, ?, ?)";
    DB::insert($sql, array($date, $name, $title, $message));
    $posts = DB::getPdo()->lastInsertId();
    return $posts;
}


/* Comments */
Route::get('comments/{id}', function ($id) {
    $post = get_post($id);
    return view('comments')->with('post', $post);
    //dd($item);
});

function get_post($id) { 
    $sql = "select * from posts where id=?";
    $posts = DB::select($sql, array($id));
    if (count($posts) != 1){
        die("Something has gone wrong, invalid query or result: $sql");
    }
    $post = $posts[0];
    return $post;
}