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
use App\Cart;

Route::get('/home', 'HomeController@index')->name('home');
// Route for displaying the individual products
Route::get('product/prod/{id}', 'ProductController@prod')->name('prod');
// Route for displaying the documentation page
Route::get('product/doc', 'ProductController@doc')->name('doc');

// Route for displaying the top dishes page
Route::get('order/top', 'OrderController@top')->name('top');
// Route for displaying the statistics page
Route::get('order/statistic', 'OrderController@statistic')->name('statistic');

// Route for displaying the statistics page
Route::get('cart/purchase', 'CartController@purchase')->name('purchase');

// Route for logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Controllers
Route::resource('product', 'ProductController');
Route::resource('order', 'OrderController');
Route::resource('cart', 'CartController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
