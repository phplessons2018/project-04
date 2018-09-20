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
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@home')->name('main');


Route::group(['prefix' => 'product', 'middleware' => ['auth', 'AdminOnly']],  function ()
{
    Route::get('create', 'ProductController@create')->name('product.create');
    Route::get('edit/{id}', 'ProductController@update')->name('product.update');
    Route::get('category/{id}', 'ProductController@productPage')->name('product.inset');
    Route::post('list', 'ProductController@list')->name('product.list');
    Route::get('/', 'ProductController@index')->name('product');
    Route::get('category', 'ProductController@category')->name('product.category');
    Route::post('edit/{id}', 'ProductController@editProduct')->name('product.edit');
});

Route::group(['prefix' => 'posts', 'middleware' => ['auth', 'AdminOnly']], function ()
{
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::post('store', 'PostController@store')->name('posts.store');
});


Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::get('/category/', 'CategoryController@index')->name('category.index');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::post('/category/update/{id}', 'CategoryController@edit')->name('category.edit');
Route::get('/category/update/{id}', 'CategoryController@update')->name('category.update');







