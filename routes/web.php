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
//*/


//Route::get('/', function () {
//    return view('product.index');
//});

Route::get('/', ['as' => 'shop', 'uses' => 'Controller@index']);

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('admin/category', ['as' => 'admin/category', 'uses' => 'AdminController@category']);
Route::post('admin/category/create', ['as' => 'category/create', 'uses' => 'CategoryController@create']);
Route::post('admin/category/update', ['as' => 'category/update', 'uses' => 'CategoryController@update']);
Route::post('admin/category/delete', ['as' => 'category/delete', 'uses' => 'CategoryController@delete']);


Route::get('admin/product', ['as' => 'admin/product', 'uses' => 'AdminController@product']);
Route::post('admin/product/create', ['as' => 'product/create', 'uses' => 'ProductController@create']);
Route::post('admin/product/update', ['as' => 'product/update', 'uses' => 'ProductController@update']);
Route::post('admin/product/delete', ['as' => 'product/delete', 'uses' => 'ProductController@delete']);


Route::get('category/{id}', ['as' => 'category', 'uses' => 'CategoryController@category']);
Route::get('product/{id}', ['as' => 'product', 'uses' => 'ProductController@productId']);

Auth::routes();

$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::get('/admin', ['as' => 'admin', 'uses' => 'AdminController@index']);
