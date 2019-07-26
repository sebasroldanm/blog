<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/layout', function () {
    return view('layout');
});
Auth::routes();
Route::get('/usuarios', 'UserController@index')->name('usuarios');

Route::get('/usuario/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('/usuario/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'PostController');

Route::resource('users', 'UserController');
