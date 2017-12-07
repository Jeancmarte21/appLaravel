@extends('layouts.admin')
@section('title','Inventario')
@section('contenido')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


	</div>
</div>
<?php $acumulado = 0.0; ?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">ID</th>
					<th class="text-center" >MATERIA PRIMA</th>
					<th class="text-center">EXISTENCIA</th>
					<th class="text-center">COSTO</th>
					<th class="text-center">INVENTARIO</th>
				</thead>
				@foreach ($materiasPrimas as $materiaPrima)
				<tr>
					<td class="text-center">{{$materiaPrima->idmateriaPrima}}</td>
					<td class="text-center">{{$materiaPrima->nombre}}</td>
					<td class="text-center">{{$materiaPrima->existencia_real}}</td>
					<td class="text-center">{{$materiaPrima->costo}}</td>
					<td class="text-center">{{$materiaPrima->existencia_real * $materiaPrima->costo}}</td>
					<?php $acumulado += $materiaPrima->existencia_real * $materiaPrima->costo; ?>
				</tr>
				@endforeach
				<tr>
				<td></td>
				<td></td>
				<td></td>
				<th class="text-right">Total</th>
				<td class="text-center">{{$acumulado}}</td>
				</tr>	


			</table>
			{{ $materiasPrimas->links() }}
		</div>

	</div>
</div>


@endsection
