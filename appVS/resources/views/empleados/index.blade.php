@extends('layouts.admin')
@section('title','Empleados')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/empleados/create"><button class="btn btn-primary btn btn-xs">CREAR NUEVO EMPLEADO</button></a></h3>

	</div>
</div>




<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th  ALIGN=center>ID</th>
					<th  ALIGN=center>NOMBRES</th>
					<th  ALIGN=center>APELLIDOS</th>


					<th  ALIGN=center>OPCIONES</th>
				</thead>
				@foreach ($empleados as $empleado)
				<tr>
					<td  ALIGN=center>{{ $empleado->idempleado}}</td>
					<td  ALIGN=center>{{ $empleado->nombre}}</td>
					<td  ALIGN=center>{{ $empleado->apellidos}}</td>


					<td>
            <a href="/empleados/{{$empleado->idempleado}}" class="badge btn btn-primary">Ver</a>
						<a href="/empleados/{{$empleado->idempleado}}/edit" class="badge  btn btn-info">Editar</a>


					</td>
				</tr>

				@endforeach
			</table>
		</div>
	</div>
</div>



@endsection
