@extends('layouts.admin')
@section('title','Suplidores')
@section('contenido')
<div class="card" style="width: 95rem;">
<div class="list-group">
	@foreach($suplidores as $suplidor)
  		<button type="button" class="list-group-item list-group-item-action">{{$suplidor->nombre}}<span class="badge badge-primary badge-pill">1</span></button>
  	@endforeach
</div>
</div>

@endsection