<?php

Route::get('/', function () {
    return 'Home';
});

Route::get('/usuarios', function(){
	return 'Usuarios';
});

Route::get('/usuarios/{id}', function($id){
	return "Mostrando Detalle de Usuario: $id";
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', function(){
	return "Nuevo";
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null){
	if($nickname){
		return "Bienvenido $name, su apodo es $nickname";
	}
	else{
		return "Bienvenido $name, no tiene apodo";
	}
});