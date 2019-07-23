@extends('layouts.app')

@section('title', "Registro")

@section('content')

<div class="row justify-content-center">
    <div class="card" style="width: 28rem;>
        <div id=" logreg-forms">
        <form class="form-signin" method="POST" action="{{ route('register') }}">
            @csrf

            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">{{ __('Crear Cuenta Asociada')}}</h1>

            <div class="form-group">
                <div class=" form-group col-md-12">
                    <span class="col-sm-3">{{ __('Nombre')}}</span><br>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class=" form-group col-md-12">
                    <span class="col-sm-3">{{ __('Correo Electrónico') }}</span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class=" form-group col-md-12">
                    <span class="col-sm-3">{{ __('Contraseña') }}</span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class=" form-group col-md-12">
                    <span class="col-sm-3">{{ __('Confirmar Contraseña') }}</span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group">
                <div class=" form-group col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Registrarse') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection