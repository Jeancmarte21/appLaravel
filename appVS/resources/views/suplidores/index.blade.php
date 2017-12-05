@extends('layouts.admin')
@section('title','Suplidores')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('suplidores.search')
		@include('suplidores.create')


	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">ID</th>
					<th class="text-center">NOMBRE</th>



					<th class="text-center">OPCIONES</th>
				</thead>
				@foreach ($suplidores as $suplidor)
				<tr>
					<td class="text-center">{{ $suplidor->idsuplidor}}</td>
					<td class="text-center">{{ $suplidor->nombre}}</td>


					<td>
						<div class="text-center">
            <a href="/suplidores/{{$suplidor->idsuplidor}}" class="badge badge-primary btn btn-primary "><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
						<a href="/suplidores/{{$suplidor->idsuplidor}}/edit" class="badge badge-success btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
</div>
					</td>
				</tr>

				@endforeach
			</table>
			<h3 ALIGN=right><a href="{{action('SuplidoresController@downloadPDF')}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-clipboard" aria-hidden="true"></i>  Generar Reporte PDF</button></a></h3>
		</div>
	</div>
</div>

@endsection
