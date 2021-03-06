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
					<th class="text-center">ID</th>
					<th class="text-center">FECHA</th>
					<th class="text-center">NOMBRE</th>
					<th class="text-center">CIGARRO</th>
					<th class="text-center">CAPA</th>
					<th class="text-center">CAPOTE</th>
					<th class="text-center">ACCION</th>

				</thead>


				<tr>


					<td class="text-center">{{$configuracion->idconfiguracion}}</td>
					<td class="text-center">{{$configuracion->fecha}}</td>
					<td class="text-center">{{$configuracion->nombre}}</td>
					<td class="text-center">{{$configuracion->cigarros->nombre}}</td>
					@foreach($configuracion->configuracionesmateriasprimas as $confi)
					<td class="text-center">{{$confi->materiasprimas->nombre}}</td>
					@endforeach
					<td><a href="#" class="btn btn-danger btn btn-xs btn-block" onclick=" var result = confirm('Esta seguro de eliminar esta Entrada?');
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
