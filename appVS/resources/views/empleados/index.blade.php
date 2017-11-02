@extends('layouts.admin')
@section('title','Empleados')
@section('contenido')


<div class="card" style="width: 95rem;">
	<div class="col-lg-12 col-md-9 col-xs-5">
<div class="list-group ">
	
	@foreach($empleados as $empleado)
  		<li class="list-group-item">{{$empleado->nombre.' '.$empleado->apellidos}}

  		<a href="/empleados/{{$empleado->idempleado}}/edit" class="badge badge-success btn btn-success">Editar</a>

  		<a href="/empleados/{{$empleado->idempleado}}" class="badge badge-primary btn btn-primary">Ver</a>

  		</li>
  	@endforeach
  	</div>
</div>
</div>

@endsection


