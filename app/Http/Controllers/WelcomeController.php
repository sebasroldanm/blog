<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	//__invoke, llamam a un objeto como si se tratara de una funcion

    public function __invoke($name, $nickname = null
    )
    {
    	$name = ucfirst($name);

		if($nickname){
			return "Bienvenido $name, su apodo es $nickname";
		}
		else{
			return "Bienvenido $name, no tiene apodo";
    	}
    }
}
