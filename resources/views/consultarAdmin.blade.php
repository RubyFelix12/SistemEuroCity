@extends('layouts.admin')

@section('titulo')
<DIV ALIGN=center><h2>Administradores del Sistema</h2></DIV>
	</a>
</h2>
<br>


@stop

@section('contenido')
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre del Administrador</th>
					<th>Correo Electrónico</th>
				</tr>
				</th>
			</thead>
			<tbody>

		@foreach($users as $u)
			<tr>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
			
			<td>

					
					  <span class="btn btn-danger btn-xs" aria-hidden="true" data-toggle="modal" data-target="#modal{{$u->id}}">Eliminar</span>
					</button>
				</td>
			</tr>
		<!-- Modal -->
		<div class="modal fade" id="modal{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">¿Deseas eliminar al Administrador?</h4>
		      </div>
		      <div class="modal-body">
		        ¡No se podrá recuperar el registro de los administradores!
		        <br><br><b>NOTA IMPORTANTE:<br>
		        <b>¡Tener en cuenta de no eliminar a todos los administradores, esto debido a que ya no podrá Acceder al Sistema!.</b>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        <a href="{{url('/eliminarAdmin')}}/{{$u->id}}" class="btn btn-danger">Eliminar</a>
		      </div>
		    </div>
		  </div>
		</div>
			

		@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{{$users->links()}}
	</div>
@stop
