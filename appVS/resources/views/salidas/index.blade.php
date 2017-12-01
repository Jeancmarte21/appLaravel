@extends('layouts.admin')
@section('title','Listado de Salidas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('salidas.create')
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
					<th class="text-center">CANTIDAD</th>

					<th class="text-center">OPCIONES</th>
				</thead>
				@foreach ($salidas as $salida)
				<tr>
					<td class="text-center">{{ $salida->idsalida}}</td>
					<td class="text-center">{{ $salida->fecha}}</td>
					<td class="text-center">{{ $salida->materiasprimas->nombre}}</td>
					<td class="text-center">{{ $salida->cantidad}}</td>


					<td>
						<div class="text-center">


						<a href="/salidas/{{$salida->idsalida}}"class="badge badge-info btn btn-info">Ver</a>
            <a href="/salidas/{{$salida->idsalida}}/edit" class="badge badge-success btn btn-primary">Editar</a>
					</div>
					</td>
				</tr>

				@endforeach
			</table>
		</div>
	</div>
</div>


@endsection
