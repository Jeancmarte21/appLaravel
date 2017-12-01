@extends('layouts.admin')
@section('title','Producción Maquinas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('produccionesmaquinas.create')

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>

					<th class="text-center">FECHA & HORA</th>
					<th class="text-center">MAQUINA</th>
          <th class="text-center">CANTIDAD</th>
					<th class="text-center">OPCIONES</th>
				</thead>

				@foreach ($produccionMaq as $produccionMaquina)
    	<tr>

      <td class="text-center">{{ $produccionMaquina->fecha}}</td>
      <td class="text-center">{{ $produccionMaquina->maquinas->nombre}}</td>
			<td class="text-center">{{ $produccionMaquina->cantidad}}</td>



		<td>
			<div class="text-center">
						<a href="/produccionesmaquinas/{{ $produccionMaquina->idproduccionmaquina}}" class="badge badge-info btn btn-primary">Ver</a>
            <a href="/produccionesmaquinas/{{ $produccionMaquina->idproduccionmaquina}}/edit" class="badge badge-success btn btn-info">Editar</a>
					</td>
				</div>

</tr>
@endforeach
</table>
</div>

</div>
</div>


@endsection
