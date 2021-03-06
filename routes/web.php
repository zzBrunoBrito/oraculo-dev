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
})-> name('/');

Route::get('/home', function () {
    return view('home');
}) -> name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', 'Auth\RegisterController@create');

Route::get('/login', function (){
    return view('auth.login');
})->name('login');

Route::post('/login', 'Auth\LoginController@authenticate');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/register-prof', function () {
    return view('auth.registerprof');
});

Route::post('/register-prof', 'Auth\RegisterProfController@create');

Route::get('/register-equip', function () {
    return view('auth.registerequip');
});

Route::post('/register-equip', 'EquipamentoController@create');

Route::get('/histequip', 'EquipController@consultaHistorico');

Route::get('/inventarioEquip', 'EquipController@consultaInventario');