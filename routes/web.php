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

Route::get('/', 'MainController@index');
Route::group(['middleware' => 'auth'], function () {

    Route::get('/add', 'PostController@create');
    Route::post('/add_post', 'PostController@store');
});

Auth::routes();

Route::get('/post/{id}', 'PostController@show');
Route::get('/search', 'MainController@search');