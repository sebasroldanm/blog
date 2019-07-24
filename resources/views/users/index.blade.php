@extends('layouts.metronic')

@section('title', "Usuarios")

@section('url')
 <i class="fa fa-angle-right"></i>
 {{ __('Lista de Usuarios')}}
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
						<button id="sample_editable_1_new" class="btn green"> {{ __('Nuevo Usuario')}}
							<i class="fa fa-plus"></i>
						</button>
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
					<th> {{ __('Usuario')}} </th>
					<th> {{ __('Nombre Completo')}} </th>
					<th> {{ __('Puntos')}} </th>
					<th> {{ __('Notas')}} </th>
					<th> {{ __('Editar')}} </th>
					<th> {{ __('Eliminar')}} </th>
				</tr>
			</thead>
			<tbody>
				@forelse (array_combine($users, $names) as $user => $name)
				<tr>
					<td>
						{{ $user }}
					
					</td>
					<td>
						{{ $name}}
					</td>
					<td>
						3
					</td>
					<td class="center"> Na. </td>
					<td>
						<a class="edit" href="javascript:;"> {{ _('Editar')}} </a>
					</td>
					<td>
						<a class="delete" href="javascript:;"> {{ __('Eliminar')}} </a>
					</td>
				</tr>
					
				@empty

				No hay usuarios disponibles
				@endforelse
			</tbody>
		</table>
	</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

@endsection