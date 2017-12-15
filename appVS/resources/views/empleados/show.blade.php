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
					<th class="text-center">ID</th>
					<th class="text-center" >CEDULA</th>
					<th class="text-center">NOMBRES</th>
					<th class="text-center">APELLIDOS</th>
					<th class="text-center">TELEFONO</th>
					<th class="text-center">FECHA NACIMIENTO</th>
					<th class="text-center">DIRECCIÓN</th>
					<th class="text-center">SALARIO DIA</th>
					<th class="text-center">SALARIO HORA</th>
					<th>OPCIONES</th>
				</thead>


				<tr>
					<td class="text-center">{{$empleado->idempleado}}</td>
					<td class="text-center">{{$empleado->cedula}}</td>
					<td class="text-center">{{$empleado->nombre}}</td>
					<td class="text-center">{{$empleado->apellidos}}</td>
					<td class="text-center">{{$empleado->telefono}}</td>
					<td class="text-center">{{$empleado->fecha_nacimiento}}</td>
					<td class="text-center">{{$empleado->direccion}}</td>
					<td class="text-center">{{$empleado->salario_dia}}</td>
					<td class="text-center">{{$empleado->salario_hora}}</td>

					<td>

			<a href="#" class="btn btn-danger btn btn-xs btn-block" onclick=" var result = confirm('Esta seguro de eliminar esta Salida?');
			if( result ){
							event.preventDefault();
							document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>

					</td>

				</tr>



			</table>
		</div>

	</div>
</div>

<form id="delete-form" action="{{ route('empleados.destroy',[$empleado->idempleado]) }}"
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

@endsection
