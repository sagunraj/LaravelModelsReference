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
Route::delete('/category/{id}', 'CategoryController@destroy')->name('category.delete');
Route::get('category/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('category/{id}', 'CategoryController@update')->name('category.update');
Route::post('/category', 'CategoryController@store')->name('category.store');

Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
/*Route::get('/category/{id}/{name}', 'CategoryController@updateData');*/
Route::get('/category/{name}/{names}', 'CategoryController@updateName')->name('category.updatename');

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('post.edit');
Route::get('/posts/{id}', 'PostController@show')->name('post.show');
Route::delete('/posts/{id}', 'PostController@destroy')->name('post.delete');
Route::put('/posts/{id}', 'PostController@update')->name('post.update');
Route::post('/posts', 'PostController@store')->name('post.store');

