<?php

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/usuario', 'UserController@index');

Route::get('/usuario/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('/usuario/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
