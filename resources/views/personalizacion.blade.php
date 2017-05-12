@extends('layouts.admin')

@section('titulo')
<div align=center><h2>Personalización del Sistema</h2></div>
<br>
@endsection

@section('contenido')
      <h5>Título y Url a Mostrar en Principal Para el Cliente</h5>


<div class="row">

  <div class="col-xs-12">
    <form action="{{url('/guardarEvento')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
      <label for="titulo">Título:</label>
        <input id="titulo" name="titulo" type="text" class="form-control" aria-describedby="titulo">
      </div>
      <div class="form-group">
      <label for="url">Url:</label>
        <input id="url" name="url" type="text" class="form-control" aria-describedby="url">
      </div>
      <br>
    <h5>Fecha de Inicio y Fecha final del Mensaje a Mostrar</h5>
      <div class='input-append date' id='fecha_inicio_picker'>
        <span class="add-on">
          <span class="glyphicon glyphicon-calendar"></span>Fecha de Inicio
        </span>
        <input data-format="dd/MM/yyyy" type="text" placeholder="Dia/Mes/Año" id="fecha_inicio" name="fecha_inicio"></input>     
      </div>
      <div class='input-append date' id='fecha_fin_picker'>
        <span class="add-on">
          <span class="glyphicon glyphicon-calendar"></span>Fecha de Final.
        </span>
        <input data-format="dd/MM/yyyy" type="text" placeholder="Dia/Mes/Año" id="fecha_fin" name="fecha_fin"></input>
      </div>
      <br>
      <input type="submit" name="guardar" id="guardar" tabindex="4" class="btn btn-primary" value="Guardar">
      
    </form>
  </div>
</div>
@stop