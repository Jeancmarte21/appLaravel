@extends('layouts.admin')
@section('title','Listado de Salidas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/salidas/create"><button class="btn btn-primary btn btn-xs">CREAR NUEVA SALIDA</button></a></h3>

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th  ALIGN=center>ID</th>
					<th  ALIGN=center>FECHA</th>
					<th  ALIGN=center>NOMBRE</th>
					<th  ALIGN=center>CANTIDAD</th>

					<th  ALIGN=center>OPCIONES</th>
				</thead>
				@foreach ($salidas as $salida)
				<tr>
					<td  ALIGN=center>{{ $salida->idsalida}}</td>
					<td  ALIGN=center>{{ $salida->fecha}}</td>
					<td  ALIGN=center>{{ $salida->materiasprimas->nombre}}</td>
					<td  ALIGN=center>{{ $salida->cantidad}}</td>


					<td>
						<a href="/salidas/{{$salida->idsalida}}"class="badge badge-info btn btn-success">Ver</a>
            <a href="/salidas/{{$salida->idsalida}}/edit" class="badge badge-success btn btn-info">Editar</a>
					</td>
				</tr>

				@endforeach
			</table>
		</div>
	</div>
</div>


@endsection
