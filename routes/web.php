<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/','MainController@index');

Route::get('/add','MainController@add');

Route::get('/about','MainController@about');

Route::post('/add','MainController@submit');

Route::get('/del/{id}','MainController@remove($id)');
