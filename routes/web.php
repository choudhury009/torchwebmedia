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

Route::get('/', 'HomeController')->name('home');

Route::get('/about-us', 'HomeController@aboutUs');
//Route::get('/', function () {
//    return view('welcome');
//});
