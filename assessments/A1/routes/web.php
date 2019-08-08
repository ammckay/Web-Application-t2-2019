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

Route::get('homeForm', function () {
    return view('homeForm');
});