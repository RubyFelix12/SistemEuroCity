@extends('layouts.admin')

@section('titulo')
<DIV ALIGN=center><h2>Consulta de Clientes</h2></DIV>
<a href="{{url('/clientesPDF')}}" class="btn btn-primary btn-sm" target="_blank"></span>Descargar Clientes-PDF</span>
	</a>
	<br>
	<br>
@stop

@section('contenido')
<div class="row">
	<div class="col-xs-12">

		<div class="panel panel-default">
	<table class="table table-hover">
		<thead>
			<tr>

				<th>Correo Electrónico</th>
				<th>Password</th>
				<th>Año/Mes/Dia</th>

				</tr>
				</th>

		</thead>
		<tbody>
		@foreach($clientes as $c)
			<tr>
			
			<td>{{$c->Correo}}</td>
			<td>{{$c->Password}}</td>
			<td>{{$c->created_at}}</td>

			</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	</div>
	<div class="text-center">
		{{$clientes->links()}}
	</div>
@stop
