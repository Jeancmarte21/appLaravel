@extends('layouts.admin')
@section('title','Empleados')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

		@include('empleados.search')
		@include('empleados.create')

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">ID</th>
					<th class="text-center">NOMBRES</th>
					<th class="text-center">APELLIDOS</th>


					<th class="text-center">OPCIONES</th>
				</thead>
				@foreach ($empleados as $empleado)
				<tr>
					<td class="text-center">{{ $empleado->idempleado}}</td>
					<td class="text-center">{{ $empleado->nombre}}</td>
					<td class="text-center">{{ $empleado->apellidos}}</td>


					<td>
						<div class="text-center">
            <a href="/empleados/{{$empleado->idempleado}}" class="badge btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
						<a href="/empleados/{{$empleado->idempleado}}/edit" class="badge  btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>

					</div>
					</td>
				</tr>

				@endforeach
			</table>
			{{ $empleados->links() }}
			<h3 ALIGN=right><a href="{{action('EmpleadosController@downloadPDF')}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-clipboard" aria-hidden="true"></i>  Generar Reporte PDF</button></a></h3>
		</div>
		</div>
	</div>
</div>



@endsection
