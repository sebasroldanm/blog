@extends('layout')

@section('title', "Usuario {$id}")

@section('content')

<h1>Mostrando Detalles de Usuario</h1>

Mostrando el detalle del usuario: {{ $id }}

@endsection