@extends('layouts.admin')
@section('title','Informacion Empleado')
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
					<th>ID</th>
					<th>CEDULA</th>
					<th>NOMBRE</th>
					<th>APELLIDOS</th>
					<th>TELEFONO</th>
					<th>DIRECCIÓN</th>	
				</thead>

			
				<tr>
					<td>{{$empleado->idempleado}}</td>
					<th>{{$empleado->cedula}}</th>
					<td>{{$empleado->nombre}}</td>
					<td>{{$empleado->apellidos}}</td>
					<th>{{$empleado->telefono}}</th>
					<th>{{$empleado->direccion}}</th>
					
				</tr>
		        
			
              
			</table>
		</div>
		
	</div>
</div>


@endsection