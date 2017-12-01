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
					<th>NOMBRES</th>
					<th>APELLIDOS</th>
					<th>TELEFONO</th>
					<th>FECHA NACIMIENTO</th>
					<th>DIRECCIÓN</th>

					<th>OPCIONES</th>
				</thead>


				<tr>
					<td>{{$empleado->idempleado}}</td>
					<th>{{$empleado->cedula}}</th>
					<td>{{$empleado->nombre}}</td>
					<td>{{$empleado->apellidos}}</td>
					<th>{{$empleado->telefono}}</th>
					<th>{{$empleado->fecha_nacimiento}}</th>
					<th>{{$empleado->direccion}}</th>


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
