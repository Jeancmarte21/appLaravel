@extends('layouts.admin')
@section('title','Empleados')
@section('contenido')

<div class="card" style="width: 95rem;">
<div class="list-group">
	@foreach($empleados as $empleado)
  		<button type="button" class="list-group-item list-group-item-action">{{$empleado->nombre.' '.$empleado->apellidos}}<span class="badge badge-primary badge-pill"></span></button>
  	@endforeach
</div>
</div>

@endsection