@extends('layouts.admin')
@section('title','Materia Prima')
@section('contenido')

<div class="card" style="width: 95rem;">
<div class="list-group">
	@foreach($materiasPrimas as $materiaprima)
  		<li class="list-group-item">{{$materiaprima->nombre}}<span class="badge badge-secundary badge-pill">{{$materiaprima->categoria}}</span><a href="#" class="badge badge-primary">Ver</a><a href="#" class="badge badge-success">Editar</a></li>
  	@endforeach
</div>
</div>

@endsection
