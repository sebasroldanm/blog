<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Juan', 'Carlos', 'Pedro', 'Jazmin', 'Bryan', 'Andres',
            ];
            $name_full = [
                'Juan Preciado', 'Carlos Camelo', 'Pedro Bristas', 'Jazmin Urquijo', 'Bryan Martinez', 'Andres Cardenas',
            ];
        }


        $title = 'Listado de usuarios';

        return view('users.index', compact('title', 'users', 'name_full'));
    }

    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
