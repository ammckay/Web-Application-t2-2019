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
    return view('homeForm');
});


Route::get('POST', function () {
    $date = request("date");
    $name = request("name");
    $title = request("title");
    $message = request("message");
    /* Return name to homeForm */
    return view('homeForm')->with('date', $date)->with('name', $name)->with('title', $title)->with('message', $message);
});