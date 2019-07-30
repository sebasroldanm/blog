@extends('layouts.metronic')

@section('title', "Nuevo Post")

@section('url')
<i class="fa fa-angle-right"></i>
<a href=" {{ route('post.index')}} ">{{ __('Lista de Post')}}</a>
<i class="fa fa-angle-right"></i>
{{ __('Crear Nuevo Post')}}

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubble font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">{{$title}}</span>
                </div>
                <div class="actions">
                    {{-- <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                        </div> --}}
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form method="POST" action="{{ route('post.store') }}" id="form_sample_3" class="form-horizontal">
                    @csrf
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please
                            check
                            below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is
                            successful!
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('Titutlo')}}
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="title" id="title" data-required="1" class="form-control"
                                    value="{{ old('title')}}" required autocomplete="title" /> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('Imagen')}}&nbsp;&nbsp;
                                <span class="required"> * </span></label>
                            <div class="col-md-8">
                                <div class="form-group last">
                                    <div class="col-md-12">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                    alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new"> {{ __('Selecionar una Imagen')}}
                                                    </span>
                                                    <span class="fileinput-exists"> {{ __('Cambiar la Imagen')}} </span>
                                                    <input type="file" name="..."> </span>
                                                <a href="javascript:;" class="btn red fileinput-exists"
                                                    data-dismiss="fileinput"> {{ __('Deshacer')}} </a>
                                            </div>
                                        </div>
                                        <div class="clearfix margin-top-10">
                                            <span class="label label-danger">¡NOTA!</span> La vista previa de la imagen
                                            solo funciona en IE10 +, FF3.6 +, Safari 6.0+, Chrome 6.0+ y Opera 11.1+. En
                                            los navegadores más antiguos, se muestra el nombre del archivo. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">{{ __('Archivo')}}&nbsp;&nbsp;
                                <span class="required"> * </span></label>
                            <div class="col-md-3">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="input-group input-large">
                                        <div class="form-control uneditable-input input-fixed input-medium"
                                            data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                            <span class="fileinput-filename"> </span>
                                        </div>
                                        <span class="input-group-addon btn default btn-file">
                                            <span class="fileinput-new"> {{ __('Seleccione Archivo')}} </span>
                                            <span class="fileinput-exists"> {{ __('Cambiar')}} </span>
                                            <input type="file" name="..."> </span>
                                        <a href="javascript:;" class="input-group-addon btn red fileinput-exists"
                                            data-dismiss="fileinput"> {{ __('Deshacer')}} </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group last">
                            <label class="control-label col-md-3">{{ __('Contenido')}}
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="editor2" rows="6"
                                    data-error-container="#editor2_error"></textarea>
                                <div id="editor2_error"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">{{ __('Publicar')}}</button>
                                <button type="button" class="btn default">{{ __('Cancelar')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>


<!-- BEGIN PORTLET-->
<div class="portlet light form-fit ">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">{{$title}}</span>
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
                        <input class="form-control @error('img') is-invalid @enderror" id="img" type="text" name="img"
                            required autocomplete="img" />
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
                        <input class="form-control @error('doc') is-invalid @enderror" id="doc" type="text" name="doc"
                            required autocomplete="doc" />
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