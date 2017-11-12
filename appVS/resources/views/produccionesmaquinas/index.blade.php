@extends('layouts.admin')
@section('title','Producción Maquinas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/produccionesmaquinas/create"><button class="btn btn-primary btn btn-md">CREAR NUEVA PRODUCCIÓN DE MAQUINA</button></a></h3>

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID<th>
					<th>FECHA & HORA</th>
					<th>MAQUINA</th>
					<th>CIGARRO</th>
          			<th>CANTIDAD</th>
					<th>OPCIONES</th>
				</thead>

				@foreach ($produccionMaq as $produccionMaquina)
    	<tr>
      <td>{{ $produccionMaquina->idproduccionmaquina}}</td>
      <td>{{ $produccionMaquina->fecha}}</td>
      <td>{{ $produccionMaquina->maquinas->nombre}}</td>
      <td>{{ $produccionMaquina->cigarros->nombre}}</td>
      <td>{{ $produccionMaquina->cantidad}}</td>


		<td>
						<a href="/produccionesmaquinas/{{ $produccionMaquina->idproduccionmaquina}}" class="badge badge-info btn btn-success">Ver</a>
            <a href="/produccionesmaquinas/{{ $produccionMaquina->idproduccionmaquina}}/edit" class="badge badge-success btn btn-info">Editar</a>
					</td>

</tr>
@endforeach
</table>
</div>

</div>
</div>


@endsection
