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

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/category', 'CategoryController@index');
Route::get('/category/{id}', 'CategoryController@show');
/*Route::get('/category/{id}/{name}', 'CategoryController@updateData');*/
Route::get('/category/{name}/{names}', 'CategoryController@updateName');

Route::get('/posts', 'PostController@index');