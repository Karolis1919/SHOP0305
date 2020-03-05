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

Auth::routes();
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
});

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@showhome');
Route::get('/newcat', 'CategoryController@showcat');
Route::get('/newad', 'ProductController@showad');
Route::post('/store', 'CategoryController@storeCategory');
Route::post('/insert', 'ProductController@storeProduct');
Route::get('/orders', 'OrderController@showAll');
Route::get('/allproducts', 'ProductController@allProducts');
route::get('/delete/product/{product}', 'ProductController@deleteProduct');
Route::get('/updateproduct/product{product}', 'ProductController@updateProduct');
Route::get('/neworder', 'ProductController@newOrder');
Route::post('/addorder', 'OrderController@storeOrder');
