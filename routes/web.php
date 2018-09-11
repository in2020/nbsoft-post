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

Route::get('/posts', 'PostController@indexView');
Route::get('/post/{id}', 'PostController@showView');

Route::get('/postsView', 'PostController@indexView');
Route::get('/postView/{id}', 'PostController@showView');