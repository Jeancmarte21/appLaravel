@extends('layouts.admin')
@section('contenido')
@section('title','Rendimiento Tabaco')



	@include('prerendimiento')


<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
		<?php $mes=-1; $semana = -1; ?>

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
				</tr>
				<?php $mes = $confi->mes;
						$semana = $confi->semana;
				?>
				@endforeach


			</table>



		</div>

	</div>
</div>



@endsection
