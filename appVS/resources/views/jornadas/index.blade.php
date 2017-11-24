@extends('layouts.admin')
@section('title','Listado de Jornadas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/jornadas/create"><button class="btn btn-primary btn btn-md">CREAR NUEVA JORNADA</button></a></h3>

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>

					<th>FECHA</th>
					<th>EMPLEADO</th>
					<th>OPCIONES</th>

				</thead>
            @foreach ($jornadas as $jornada)
				<tr>

					<td>{{ $jornada->fecha}}</td>

					<td>{{ $jornada->empleados->nombre}}</td>



					<td>
						<a href="/jornadas/{{$jornada->idjornada}}"
                      class="badge badge-info btn btn-primary">Ver</a>
                         <a href="/jornadas/{{$jornada->idjornada}}/edit" class="badge badge-success btn btn-info">Editar</a>

					</td>
				</tr>

				@endforeach
			</table>
			</table>
		</div>

	</div>
</div>


@endsection
