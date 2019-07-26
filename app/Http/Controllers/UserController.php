<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
use Session;
use UserSeeder;

class UserController extends Controller
{
    public function index()
    {

        $title = 'Listado de usuarios';

        $users = User::paginate(5);

        $message = '';

        return view('users.index', compact('title', 'users', 'message'));
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());

        Session::flash('message','Usuario creado con éxito');
        // $message = 'Usuario insertado con exito';

        return redirect()->route('users.index');
    }
}
