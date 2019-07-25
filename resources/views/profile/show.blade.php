@extends('layouts.metronic')

@section('title', "Inicio")

@section('url')
{{-- <i class="fa fa-angle-right"></i>--}}
@endsection

@section('content')

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

You are logged in!

@endsection