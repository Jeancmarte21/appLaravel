@extends('layouts.admin')
@section('title','Listado de Jornadas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

		@include('jornadas.create')

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>

					<th class="text-center">FECHA</th>
					<th class="text-center">EMPLEADO</th>
					<th class="text-center">OPCIONES</th>

				</thead>
            @foreach ($jornadas as $jornada)
				<tr>

					<td class="text-center">{{ $jornada->fecha}}</td>

					<td class="text-center">{{ $jornada->empleados->nombre}}</td>



					<td>
						<div class="text-center">


						<a href="/jornadas/{{$jornada->idjornada}}"
                      class="badge badge-info btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
                         <a href="/jornadas/{{$jornada->idjornada}}/edit" class="badge badge-success btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
          </div>
					</td>
				</tr>

				@endforeach
			</table>
			</table>
		</div>

	</div>
</div>


@endsection
