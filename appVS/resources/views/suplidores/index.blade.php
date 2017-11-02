@extends('layouts.admin')
@section('title','Suplidores')
@section('contenido')


<div class="card" style="width: 95rem;">
	<div class="col-lg-12 col-md-9 col-xs-5">
<div class="list-group ">
	
	@foreach($suplidores as $suplidor)
  		<li class="list-group-item">{{$suplidor->nombre}}

  		<a href="/suplidores/{{$suplidor->idsuplidor}}/edit" class="badge badge-success btn btn-success">Editar</a>

  		<a href="/suplidores/{{$suplidor->idsuplidor}}" class="badge badge-primary btn btn-primary">Ver</a>

  		</li>
  	@endforeach
  	</div>
</div>
</div>

@endsection