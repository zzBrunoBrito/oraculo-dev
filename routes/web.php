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

Route::get('/', function () {
    return view('welcome');
}) -> name('/');

Route::post('/register', 'Auth\RegisterController@create');

Route::get('/registro', function () {
    return view('auth.register');
});

Route::get('/login', function (){
    return view('auth.login');
});

Route::post('/login', 'Auth\LoginController@authenticate');