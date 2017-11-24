@extends('layouts.admin')
@section('title','Informacion Configuracion')
@section('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>FECHA</th>
					<th>NOMBRE</th>
					<th>CIGARRO</th>
					<th>CAPA</th>
					<th>CAPOTE</th>
					<th>ACCION</th>

				</thead>


				<tr>


					<td>{{$configuracion->idconfiguracion}}</td>
					<td>{{$configuracion->fecha}}</td>
					<td>{{$configuracion->nombre}}</td>
					<td>{{$configuracion->cigarros->nombre}}</td>
					@foreach($configuracion->configuracionesmateriasprimas as $confi)
					<td>{{$confi->materiasprimas->nombre}}</td>
					@endforeach
					<td><a href="#" class="btn btn-danger btn btn-md" onclick=" var result = confirm('Esta seguro de eliminar esta Entrada?');
                          if( result ){
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>
</td>
</tr>	
			</table>
		</div>

	</div>
</div>

<form id="delete-form" action="{{ route('configuraciones.destroy',[$configuracion->idconfiguracion]) }}"
					 method="POST" style="display: none;">
									 <input type="hidden" name="_method" value="delete">
									 {{ csrf_field() }}
				 </form>



@endsection
