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
            $names = [
                'Juan Preciado', 'Carlos Camelo', 'Pedro Bristas', 'Jazmin Urquijo', 'Bryan Martinez', 'Andres Cardenas',
            ];
            $points = [
                '3.4', '4', '4.8', '2', '3', '4.9',
            ];
        }


        $title = 'Listado de usuarios';

        return view('users.index', compact('title', 'users', 'names'));
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
