@extends('layouts.metronic')

@section('title', "Detalle")

@section('url')
{{-- <i class="fa fa-angle-right"></i>--}}
@endsection

@section('content')

<h1>Mostrando Detalles de Usuario</h1>

Mostrando el detalle del usuario: {{ $id }}

@endsection