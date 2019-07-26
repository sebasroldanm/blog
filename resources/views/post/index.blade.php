@extends('layouts.metronic')

@section('title', "Post")

@section('url')
<i class="fa fa-angle-right"></i>
{{ __('Post Index')}}
@endsection

@section('content')

<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet light portlet-fit ">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-red"></i>
            <span class="caption-subject font-red sbold uppercase">{{$title}}</span>
        </div>
        <div class="actions">
            {{-- <div class="btn-group btn-group-devided" data-toggle="buttons">
				<label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
					<input type="radio" name="options" class="toggle" id="option1">Actions</label>
				<label class="btn btn-transparent red btn-outline btn-circle btn-sm">
					<input type="radio" name="options" class="toggle" id="option2">Settings</label>
			</div> --}}
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href=" {{ route('post.create')}} ">
                            <button id="sample_editable_1_new" class="btn green">
                                {{ __('Crear Nuevo Post')}}
                                <i class="fa fa-plus"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right">
                        <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">{{__('Opciones')}}
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;"> {{__('Imprimir')}} </a>
                            </li>
                            <li>
                                <a href="javascript:;"> {{__('Exportar PDF')}} </a>
                            </li>
                            <li>
                                <a href="javascript:;"> {{__('Exportar Excel')}} </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
            <thead>
                <tr>
                    <th> {{ __('Identificador')}} </th>
                    <th> {{ __('Titulo Post')}} </th>
                    <th> {{ __('Contenido')}} </th>
                    <th> {{ __('Imagen')}} </th>
                    <th> {{ __('Archivo')}} </th>
                    <th> {{ __('Editar')}} </th>
                    <th> {{ __('Eliminar')}} </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)

                <tr>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->content }}
                    </td>
                    <td>
                        {{ $post->img }}
                    </td>
                    <td>
                        {{ $post->doc }}
                    </td>
                    <td>
                        <a class="edit" href="javascript:;"> {{ _('Editar')}} </a>
                    </td>
                    <td>
                        <a class="delete" href="javascript:;"> {{ __('Eliminar')}} </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

@endsection