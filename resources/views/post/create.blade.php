@extends('layouts.metronic')

@section('title', "Nuevo Post")

@section('url')
<i class="fa fa-angle-right"></i>
<a href=" {{ route('post.index')}} ">{{ __('Lista de Post')}}</a>
<i class="fa fa-angle-right"></i>
{{ __('Crear Nuevo Post')}}

@endsection

@section('content')

<!-- BEGIN PORTLET-->
<div class="portlet light form-fit ">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">{{$title}}</span>
        </div>
        <div class="actions">
            {{-- <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-wrench"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-trash"></i>
            </a> --}}
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form method="POST" action="{{ route('post.store') }}" class="form-horizontal form-bordered">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">{{__('Titulo')}}</label>
                    <div class="col-md-4">
                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                            type="text" value="{{ old('title') }}" required autocomplete="title" />
                        <span class="help-block"> {{__('Digitar titulo')}} </span>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">{{__('Contenido')}}</label>
                    <div class="col-md-4">
                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="text"
                            name="email" value="{{ old('email') }}" required autocomplete="email" />
                        <span class="help-block"> {{ __('Usar un correo unico para esta cuenta')}} </span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">{{ __('Imagen') }}</label>
                    <div class="col-md-4">
                        <input class="form-control @error('password') is-invalid @enderror" id="password"
                            type="text" name="password" required autocomplete="new-password" />
                        <span class="help-block"> {{ __('Agregar una imagen')}} </span>
                        {{-- @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror --}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">{{ __('Documento') }}</label>
                    <div class="col-md-4">
                        <input class="form-control" id="password-confirm" type="text" name="password_confirmation"
                            required autocomplete="new-password" />
                        <span class="help-block"> {{ __('Agregar Documento')}} </span>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label class="control-label col-md-3">Tax ID</label>
                    <div class="col-md-4">
                        <input class="form-control" id="mask_tin" type="text" />
                        <span class="help-block"> 99-9999999 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Number</label>
                    <div class="col-md-4">
                        <input class="form-control" id="mask_number" type="text" />
                        <span class="help-block"> mask "9" or mask "99" or ... mask "9999999999" </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Currency</label>
                    <div class="col-md-4">
                        <input class="form-control" id="mask_currency" type="text" />
                        <span class="help-block"> 123456 => € ___.__1.234,56 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Currency 2</label>
                    <div class="col-md-4">
                        <input class="form-control" id="mask_currency2" type="text" />
                        <span class="help-block"> 123456 => € ___.__1.234,56(left aligned) </span>
                    </div>
                </div>
                <div class="form-group last">
                    <label class="control-label col-md-3">SSN</label>
                    <div class="col-md-4">
                        <input class="form-control" id="mask_ssn" type="text" />
                        <span class="help-block"> 999-99-9999. remove the empty mask on blur or when not empty
                            removes the optional trailing part </span>
                    </div>
                </div> --}}
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn purple">
                            <i class="fa fa-check"></i> {{ __('Agregar Post') }}</button>
                        <a href=" {{ route('post.index')}} "><button type="button"
                                class="btn default">{{ __('Cancelar') }}</button></a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
</div>


@endsection