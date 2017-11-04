@extends('layouts.admin')
@section('title','Cigarros')
@section('contenido')

<div class="card" style="width: 95rem;">
	<div class="col-lg-12 col-md-9 col-xs-5">
<div class="list-group ">
	
	@foreach($cigarros as $cigarro)
  		<li class="list-group-item">{{$cigarro->nombre}}

  		<a href="/cigarros/{{$cigarro->idcigarro}}/edit" class="badge badge-success btn btn-info">Editar</a>

  		<a href="/cigarros/{{$cigarro->idcigarro}}" class="badge badge-primary btn btn-primary">Ver</a>

  		</li>
  	@endforeach
  	</div>
</div>
</div>

@endsection