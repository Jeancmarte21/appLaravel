@extends('layouts.admin')
@section('title','Listado de Salidas')
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
					<th>MATERIA PRIMA</th>
					<th>CANTIDAD</th>
					<th>FECHA SALIDA</th>
				</thead>


				<tr>
					<td>{{$salida->idsalida}}</td>
					<td>{{$salida->materiasprimas->nombre}}</td>
					<td>{{$salida->cantidad.' Lbs'}}</td>
					<td>{{$salida->fecha}}</td>

				</tr>



			</table>
		</div>

	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/salidas/create"><button class="btn btn-primary btn btn-md">CREAR NUEVA SALIDA</button></a></h3>

	</div>
</div>
@endsection