@extends('layouts.admin')
@section('title','Producción Maquinas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/produccionesmaquinas/create"><button class="btn btn-primary btn btn-xs">CREAR NUEVA PRODUCCIÓN DE MAQUINA</button></a></h3>

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>

					<th  ALIGN=center>FECHA & HORA</th>
					<th  ALIGN=center>MAQUINA</th>
          <th  ALIGN=center>CANTIDAD</th>
					<th  ALIGN=center>OPCIONES</th>
				</thead>

				@foreach ($produccionMaq as $produccionMaquina)
    	<tr>

      <td  ALIGN=center>{{ $produccionMaquina->fecha}}</td>
      <td  ALIGN=center>{{ $produccionMaquina->maquinas->nombre}}</td>
			<td  ALIGN=center>{{ $produccionMaquina->cantidad}}</td>



		<td>
						<a href="/produccionesmaquinas/{{ $produccionMaquina->idproduccionmaquina}}" class="badge badge-info btn btn-primary">Ver</a>
            <a href="/produccionesmaquinas/{{ $produccionMaquina->idproduccionmaquina}}/edit" class="badge badge-success btn btn-info">Editar</a>
					</td>

</tr>
@endforeach
</table>
</div>

</div>
</div>


@endsection
