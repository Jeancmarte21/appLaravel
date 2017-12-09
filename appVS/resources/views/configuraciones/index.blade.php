
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
          <th class="text-center">ID</th>
          <th class="text-center">NOMBRE</th>
          <th class="text-center">OPCIONES</th>

        </thead>
        @foreach($configuraciones as $configuracion)
          <tr>
          <td class="text-center">{{$configuracion->idconfiguracion}}</td>
          <td class="text-center">{{$configuracion->nombre}}</td>
          <td>


<div class="text-center">

	<a href="/configuraciones/{{$configuracion->idconfiguracion}}" class="badge badge-primary btn btn-info btn-block"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>


</div>
          </td>
        </tr>

        @endforeach
        </table>
</div>
</div>
	</div>

@endsection
