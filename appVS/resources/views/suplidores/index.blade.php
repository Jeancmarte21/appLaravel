@extends('layouts.admin')
@section('title','Suplidores')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/suplidores/create"><button class="btn btn-primary btn btn-xs">CREAR NUEVO SUPLIDOR</button></a></h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>NOMBRE</th>



					<th>OPCIONES</th>
				</thead>
				@foreach ($suplidores as $suplidor)
				<tr>
					<td>{{ $suplidor->idsuplidor}}</td>
					<td>{{ $suplidor->nombre}}</td>


					<td>
            <a href="/suplidores/{{$suplidor->idsuplidor}}" class="badge badge-primary btn btn-primary">Ver</a>
						<a href="/suplidores/{{$suplidor->idsuplidor}}/edit" class="badge badge-success btn btn-info">Editar</a>

					</td>
				</tr>

				@endforeach
			</table>
			<h3 ALIGN=right><a href="{{action('SuplidoresController@downloadPDF')}}" ><button class="btn btn-danger btn-xs">Generar Reporte PDF</button></a></h3>
		</div>
	</div>
</div>

@endsection
