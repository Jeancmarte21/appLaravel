@extends('layouts.admin')
@section('title','Nomina')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">ID</th>
					<th class="text-center" >CEDULA</th>
					<th class="text-center">NOMBRES</th>
					<th class="text-center">APELLIDOS</th>
					<th class="text-center">TELEFONO</th>
					<th class="text-center">FECHA NACIMIENTO</th>
					<th class="text-center">DIRECCIÓN</th>

					<th>OPCIONES</th>
				</thead>

				@foreach ($empleados as $empleado)
				@foreach($empleado->jornadas as $jornada)
				<tr>
				<td class="text-center">{{$empleado->nombre}}</td>
				<td class="text-center">{{$jornada->fecha}}</td>	
				</tr>
				@endforeach
				@endforeach

			</table>
		</div>

	</div>
</div>

@endsection
