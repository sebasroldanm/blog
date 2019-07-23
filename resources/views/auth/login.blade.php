@extends('layouts.app')

@section('title', "Login")

@section('content')

{{-- <div class="jumbotron jumbotron-fluid"> --}}
  <div class="row justify-content-center">
    <div class="card">
      <div id="logreg-forms">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
          @csrf

          <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">{{ __('Inicio de Sesión')}}</h1>
          <div class="social-login">
            <div class="form-group">
              <button class="btn btn-outline-primary" type="button"><span><i class="fab fa-facebook-f"></i> Ingresar con Facebook</span> </button>
              <button class="btn btn-outline-danger" type="button"><span><i class="fab fa-google-plus-g"></i> Ingresar con Google+</span> </button>
          </div>
      </div>

      <p style="text-align:center"> Cuenta Asociada  </p>
      <div class="form-group">
        <span class="col-sm-3">{{ __('Correo')}}</span><br>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}" required autocomplete="email" autofocus>

        @error('email')
        <div class="alert alert-danger" role="alert">
          <strong>{{ $message}}</strong>
      </div>
      @enderror

      <br><span class="col-sm-3">{{ __('Contraseña')}}</span>
      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

      @error('password')
      <div class="alert alert-danger" role="alert">
          <strong>{{ $message}}</strong>
      </div>
      @enderror

  </div>


  <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> {{ __('Iniciar Sesión')}}</button>


  @if(Route::has('password.request'))<br>
  <div class="card">
      <a href="{{ route('password.request')}}" id="forgot_pswd">{{ __('¿Olvido su contraseña?')}}</a>
  </div>
  @endif

</form>
</div>
</div>
</div>
@endsection
