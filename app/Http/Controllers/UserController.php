<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$users = [
            'Juan|',
            'Carlos',
            'Pedro',
            'Jazmin',
            'Bryan',
            'Andres',
            '<php>'
        ];

        $title = 'Listado de usuarios';

        return view('users', compact('title', 'users'));
    }

    public function show($id)
    {
    	return "Mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
    	return 'Crear nuevo usuario';
    }
}
