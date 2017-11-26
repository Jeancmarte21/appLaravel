
@extends('layouts.admin')
@section('title','Configuraciones')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('configuraciones.create')

	</div>
</div>



<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>OPCIONES</th>

        </thead>
        @foreach($configuraciones as $configuracion)
          <tr>
          <td>{{$configuracion->idconfiguracion}}</td>
          <td>{{$configuracion->nombre}}</td>
          <td>

						<a href="/configuraciones/{{$configuracion->idconfiguracion}}/edit" class="badge badge- btn btn-info">Editar</a>

						<a href="/configuraciones/{{$configuracion->idconfiguracion}}" class="badge badge-primary btn btn-primary">Ver</a>

          </td>
        </tr>

        @endforeach
        </table>
</div>
</div>
	</div>

@endsection
