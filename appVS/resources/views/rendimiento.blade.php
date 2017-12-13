@extends('layouts.admin')
@section('contenido')
@section('title','Rendimiento Tabaco')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">FECHA</th>
					<th class="text-center">CONFIGURACIÓN</th>
					<th class="text-center">CIGARRO</th>
					<th class="text-center">MAQUINA</th>
					<th class="text-center">SALIDA</th>
          <th class="text-center">LIBRAS</th>
          <th class="text-center">CANTIDAD PRODUCIDA</th>

				</thead>
					@foreach ($configuraciones as $confi)
				<tr>
					<td class="text-center">{{$confi->fecha}}</td>
					<td class="text-center">{{$confi->nombre}}</td>
					<td class="text-center">{{$confi->cigarros->nombre}}</td>







				</tr>
				@endforeach


			</table>



		</div>

	</div>
</div>



@endsection
