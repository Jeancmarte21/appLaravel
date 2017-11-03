
@extends('layouts.admin')
@section('title','Configuraciones')
@section('contenido')

<div class="card" style="width: 95rem;">
	<div class="col-lg-12 col-md-9 col-xs-5">
<div class="list-group ">
	
	@foreach($configuraciones as $configuracion)
  		<li class="list-group-item">{{$configuraciones->nombre}}

  		<a href="/configuraciones/{{$configuracion->idconfiguracion}}/edit" class="badge badge-success btn btn-success">Editar</a>

  		<a href="/configuraciones/{{$configuracion->idconfiguracion}}" class="badge badge-primary btn btn-primary">Ver</a>

  		</li>
  	@endforeach
  	</div>
</div>
</div>

@endsection