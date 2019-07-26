<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $title = 'Listado de usuarios';

        $users = User::paginate(5);

        return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function create()
    {
        $title = "Inserción de datos";
        return view('users.create', compact('title'));
    }
}
