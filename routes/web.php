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
<<<<<<< HEAD
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function() {
	return view('registro');
});

=======
}) -> name('/');

Route::post('/register', 'Auth\RegisterController@create');

Route::get('/registro', function () {
    return view('auth.register');
});

Route::get('/login', function (){
    return view('auth.login');
});

Route::post('/login', 'Auth\LoginController@authenticate');
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa
