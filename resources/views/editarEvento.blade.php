@extends('layouts.admin')

@section('titulo')
	<h2>Editar Evento</h2> 
	<hr>
@endsection


@section('contenido')

		<div class="col-xs-12">
			<form action="{{url('actualizarEvento')}}/{{$evento->id}}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class="form-group">
					<label for="titulo">Título:</label>
					<input name="titulo" type="text" placeholder="" class="form-control" value="{{$evento->titulo}}" required>
				</div>
				
				<div class="form-group">
					<label for="url">Url:</label>
					<input name="url" type="text" placeholder="" class="form-control" value="{{$evento->url}}" required>
				</div>

				<div class='input-append date' id='fecha_inicio_picker'>
			        <span class="add-off">
			         
			        <span class="glyphicon glyphicon-calendar"></span>Fecha de Inicio</span>
		        
		       		 <input data-format="dd/MM/yyyy" type="text" placeholder="Dia/Mes/Año" id="fecha_inicio" name="fecha_inicio" value="{{$evento->fecha_inicio}}" readonly=""></input>     
				</div>

		     <div class='input-append date' id='fecha_fin_picker'>
		        <span class="add-off">
		          <span class="glyphicon glyphicon-calendar"></span>Fecha de Final.</span>
		       
		        <input data-format="dd/MM/yyyy" type="text" placeholder="Dia/Mes/Año" id="fecha_fin" name="fecha_fin" value="{{$evento->fecha_fin}}" readonly=""></input>
		     </div>

		     <br>
				<button type="submit" class="btn btn-primary">Actualizar</button>
				<a href="{{url('/mostrarEvento')}}" class="btn btn-danger">Cancelar</a>
			</form>
		</div>
	</div>
	@stop