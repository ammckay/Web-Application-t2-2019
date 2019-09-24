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

use App\User;
use App\Product;
use App\Manufacturer;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('product/item/{id}', 'ProductController@item')->name('item');

Route::resource('product', 'ProductController');
Route::resource('order', 'OrderController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
