@extends('layouts.admin')
@section('contenido')
@section('title','Costo Unitario')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	@include('costoUnitario.precostoUnitario')

</div>
</div>


<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">

				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<?php $mes=-1; $semana = -1; ?>

	</div>
</div>
			<table class="table table-striped table-bordered table-condensed table-hover">
			<thead>
					<th class="text-center">MES</th>
					<th class="text-center">SEMANA</th>
					<th class="text-center">Cigarro</th>
					<th class="text-center">CONFIGURACIÓN</th>
          			<th class="text-center">COSTO PRODUCCION</th>
          			<th class="text-center">TOTAL CIGARROS</th>
					<th class="text-center">COSTO POR UNIDAD</th>

					</thead>
					@foreach ($costos as $costo)

				<tr>

				@if($mes != $costo->mes)
				<td>{{$costo->mes}}</td>
				@else
				<td class="text-center">-</td>
				@endif
				@if($semana != $costo->semana)
				<td>{{$costo->semana}}</td>
				@else
				<td class="text-center">-</td>
				@endif
				<td class="text-center">{{$costo->cigarro}}</td>
				<td class="text-center">{{$costo->config}}</td>
				<td class="text-center">{{$costo->total_costo}}</td>
				<td class="text-center">{{$costo->total_cigarros}}</td>
				<td class="text-center">{{$costo->rounded}}</td>


				<?php $mes = $costo->mes;
						$semana = $costo->semana;
				?>
				</tr>
				@endforeach



			</table>
			<h3 ALIGN=right><a href="{{action('CostoUnitarioController@downloadPDF')}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-clipboard" aria-hidden="true"></i>  Generar Reporte PDF</button></a></h3>
</div>
		</div>

	</div>




@endsection
