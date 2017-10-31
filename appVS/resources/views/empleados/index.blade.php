@extends('layouts.admin')
@section('title','Empleados')
@section('contenido')

<div class="card" style="width: 95rem;">
<div class="list-group">
	@foreach($empleados as $empleado)
  		<li class="list-group-item">{{$empleado->nombre.' '.$empleado->apellidos}}
  		<a href="/empleados/{{$empleado->idempleado}}/edit" 
  			class="badge badge-success">Editar</a>
  		<a href="/empleados/{{$empleado->idempleado}}" 
  			class="badge badge-primary">Ver</a>
  		</li>
  	@endforeach
</div>
</div>

@endsection



<!--<button type="button" class="list-group-item list-group-item-action">{{$empleado->nombre.' '.$empleado->apellidos}}<span class="badge badge-primary badge-pill"></span></button> -->