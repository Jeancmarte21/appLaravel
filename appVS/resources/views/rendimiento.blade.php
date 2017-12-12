@extends('layouts.admin')
@section('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">FECHA</th>
					<th class="text-center">SALIDA</th>
          <th class="text-center">LIBRAS</th>
          <th class="text-center">CONFIGURACIÓN</th>
          <th class="text-center">CIGARRO</th>
					<th class="text-center">MAQUINA</th>
          <th class="text-center">CANTIDAD PRODUCIDA</th>

				</thead>
				@foreach ($materiasPrimas as $materiaPrima)
				<tr>
					<td class="text-center">{{$materiaPrima->fecha}}</td>
					<td class="text-center">{{$materiaPrima->salidas->nombre}}</td>
          <td class="text-center">{{$materiaPrima->salidas->cantidad}}</td>
          <td class="text-center">{{$materiaPrima->configuraciones->nombre}}</td>
          <td class="text-center">{{$materiaPrima->cigarros->nombre}}</td>
          <td class="text-center">{{$materiaPrima->maquinas->nombre}}</td>
          <td class="text-center">{{$materiaPrima->produccionesmaquinas->cantidad}}</td>
				</tr>
				@endforeach


			</table>
			{{ $materiasPrimas->links() }}


		</div>

	</div>
</div>



@endsection
