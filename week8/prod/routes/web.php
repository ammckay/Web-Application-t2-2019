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

use App\Product;

Route::resource('product', 'ProductController');

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/test', function () {
    // $products = App\Manufacturer::find(1)->products;
    // dd($products);

    // $manufacturer = Product::find(1)->manufacturer;
    // dd($manufacturer);

    // $products = Product::all();
    // foreach ($products as $product) { 
    //     echo $product->name;
    // }

    // $product = Product::find(1);
});*/