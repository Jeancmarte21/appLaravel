@extends('layouts.admin')
@section('contenido')
@section('title','Rendimiento Tabaco')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	@include('rendimiento.prerendimiento')

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
					<th class="text-center">TABACO</th>
					<th class="text-center">LIBRAS USADAS</th>
					<th class="text-center">CIGARROS PRODUCIDOS</th>
					<th class="text-center">RENDIMIENTO (UND)</th>
          <th class="text-center">ENVOLTURA</th>

					</thead>
					@foreach ($configuraciones as $confi)

				<tr>

				@if($mes != $confi->mes)
				<td>{{$confi->mes}}</td>
				@else
				<td class="text-center">-</td>
				@endif
				@if($semana != $confi->semana)
				<td>{{$confi->semana}}</td>
				@else
				<td class="text-center">-</td>
				@endif
				<td>{{$confi->nombre}}</td>
				<td>{{$confi->total_libras}}</td>
				<td>{{$confi->total_cigarros}}</td>
				<td>{{$confi->rendimiento.' x lb'}}</td>
				@if($confi->envoltura == 2)
				<td><font color="#DC143C">Capa</font></td>
				@else
				<td><font color="#3072CB">Capote</font></td>
				@endif


				<?php $mes = $confi->mes;
						$semana = $confi->semana;
				?>
				</tr>
				@endforeach


			</table>
			<h3 ALIGN=right><a href="{{action('RendimientosController@downloadPDF')}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-clipboard" aria-hidden="true"></i>  Generar Reporte PDF</button></a></h3>
</div>
		</div>

	</div>




@endsection
