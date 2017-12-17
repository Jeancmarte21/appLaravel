@extends('layouts.admin')
@section('contenido')
@section('title','Rendimiento Tabaco')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">SEMANA</th>
					<th class="text-center">TABACO</th>
					<th class="text-center">LIBRAS USADAS</th>
					<th class="text-center">CIGARROS PRODUCIDOS</th>
					<th class="text-center">RENDIMIENTO</th>
          			<th class="text-center">ENVOLTURA</th>

				</thead>
					@foreach ($configuraciones as $confi)
				<tr>
				<td>{{$confi->semana}}</td>
				<td>{{$confi->nombre}}</td>
				<td>{{$confi->total_libras}}</td>
				<td>{{$confi->total_cigarros}}</td>
				<td>{{$confi->rendimiento.' x lb'}}</td>
				<td>{{$confi->envoltura}}</td>
				</tr>
				@endforeach


			</table>



		</div>

	</div>
</div>



@endsection
