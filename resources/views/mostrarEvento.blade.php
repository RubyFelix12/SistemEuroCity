@extends('layouts.admin')

@section('titulo')
<DIV ALIGN=center><h2>Historial de Eventos del Año</h2></DIV>
<a href="{{url('/mostrar')}}">
	</a>
</h2>
@stop

@section('contenido')
	<div class="col-xs-12">
		<div class="panel panel-default">
	<table class="table table-hover">
		<thead>
				<tr>
					
					<th>Título</th>
					<th>Url</th>
					<th>Fecha de Inicio</th>
					<th>Fecha de Finalización</th>
					</tr>
				</th>
			</thead>
			<tbody>

		@foreach($evento as $e)
			<tr>
				
				<td>{{$e->titulo}}</td>
				<td>{{$e->url}}</td>
				<td>{{$e->fecha_inicio}}</td>
				<td>{{$e->fecha_fin}}</td>
				
				<td>
					<a href="{{url('/editarEvento')}}/{{$e->id}}" class="btn btn-xs btn-primary">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</a>
					<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal{{$e->id}}">
					  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</td>
			</tr>
		<!-- Modal -->
		<div class="modal fade" id="modal{{$e->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">¿Deseas eliminar el Mensaje del Evento?</h4>
		      </div>
		      <div class="modal-body">
		        ¡No se podrá recuperar el título eliminado!
		        <br><br><b>NOTA IMPORTANTE:<br>
		        <b>Una vez eliminado el mensaje ya no sera posible recuperarlo.</b>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        <a href="{{url('/eliminarEvento')}}/{{$e->id}}" class="btn btn-danger">Eliminar</a>
		      </div>
		    </div>
		  </div>
		</div>
		@endforeach
		</tbody>
	</table>
	</div>
	<div class="text-center">
		{{$evento->links()}}
	</div>
@stop