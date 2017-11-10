@extends('layouts.admin')
@section('title','Maquinas')
@section('contenido')

<div class="card" style="width: 95rem;">
	<div class="col-lg-12 col-md-9 col-xs-5">
<div class="list-group ">

	@foreach($maquinas as $maquina)
  		<li class="list-group-item">{{$maquina->nombre.' '.$maquina->apellidos}}

				<a href="/maquinas/{{$maquina->idmaquina}}/modal"  class="badge badge-danger btn btn-danger" onclick="return confirm('Seguro que desea eliminarlo?')">Eliminar</a>

  		<a href="/maquinas/{{$maquina->idmaquina}}/edit" class="badge badge-success btn btn-info">Editar</a>

  		<a href="/maquinas/{{$maquina->idmaquina}}" class="badge badge-primary btn btn-primary">Ver</a>



  		</li>
  	@endforeach

@endsection