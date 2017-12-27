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

/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/create', 'CategoryController@create')->name('category.create');

Route::post('/category', 'CategoryController@store')->name('category.store');

Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
/*Route::get('/category/{id}/{name}', 'CategoryController@updateData');*/
Route::get('/category/{name}/{names}', 'CategoryController@updateName')->name('category.updatename');

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::post('/posts', 'PostController@store')->name('post.store');
