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
                        <input class="form-control @error('content') is-invalid @enderror" id="content" type="text"
                            name="content" value="{{ old('content') }}" required autocomplete="content" />
                        <span class="help-block"> {{ __('Usar un correo unico para esta cuenta')}} </span>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">{{ __('Imagen') }}</label>
                    <div class="col-md-4">
                        <input class="form-control @error('img') is-invalid @enderror" id="img"
                            type="text" name="img" required autocomplete="img" />
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
                        <input class="form-control @error('doc') is-invalid @enderror" id="doc"
                            type="text" name="doc" required autocomplete="doc" />
                        <span class="help-block"> {{ __('Agregar una documento')}} </span>
                    </div>
                </div>
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