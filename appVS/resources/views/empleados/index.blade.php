@extends('layouts.admin')
@section('title','Empleados')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/empleados/create"><button class="btn btn-primary btn btn-md">CREAR NUEVO EMPLEADO</button></a></h3>

	</div>
</div>




<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>NOMBRES</th>
					<th>APELLIDOS</th>


					<th>OPCIONES</th>
				</thead>
				@foreach ($empleados as $empleado)
				<tr>
					<td>{{ $empleado->idempleado}}</td>
					<td>{{ $empleado->nombre}}</td>
					<td>{{ $empleado->apellidos}}</td>


					<td>
            <a href="/empleados/{{$empleado->idempleado}}" class="badge badge-primary btn btn-primary">Ver</a>
						<a href="/empleados/{{$empleado->idempleado}}/edit" class="badge badge-success btn btn-info">Editar</a>

					</td>
				</tr>

				@endforeach
			</table>
		</div>
	</div>
</div>



@endsection
