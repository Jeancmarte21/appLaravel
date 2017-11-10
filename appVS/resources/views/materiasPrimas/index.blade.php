@extends('layouts.admin')
@section('title','Materia Prima')
@section('contenido')

<div class="card" style="width: 95rem;">
	<div class="col-lg-12 col-md-9 col-xs-5">
<div class="list-group ">
	
	@foreach($materiasPrimas as $materiaPrima)
  		<li class="list-group-item">{{$materiaPrima->nombre}}

  		<a href="/empleados/{{$materiaPrima->idmateriaPrima}}/modal"  class="badge badge-danger btn btn-danger" onclick="return confirm('Seguro que desea eliminarla?')">Eliminar</a>

  		<a href="/materiasPrimas/{{$materiaPrima->idmateriaPrima}}/edit" class="badge badge-success btn btn-info">Editar</a>

  		<a href="/materiasPrimas/{{$materiaPrima->idmateriaPrima}}" class="badge badge-primary btn btn-primary">Ver</a>

  		</li>
  	@endforeach
  	</div>
</div>
</div>


@endsection
