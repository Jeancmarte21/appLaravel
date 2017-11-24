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
					<th  ALIGN=center>ID</th>
					<th  ALIGN=center>CEDULA</th>
					<th  ALIGN=center>NOMBRES</th>
					<th  ALIGN=center>APELLIDOS</th>
					<th  ALIGN=center>TELEFONO</th>
					<th  ALIGN=center>FECHA NACIMIENTO</th>
					<th  ALIGN=center>DIRECCIÓN</th>

					<th>OPCIONES</th>
				</thead>


				<tr>
					<td  ALIGN=center>{{$empleado->idempleado}}</td>
					<th  ALIGN=center>{{$empleado->cedula}}</th>
					<td  ALIGN=center>{{$empleado->nombre}}</td>
					<td  ALIGN=center>{{$empleado->apellidos}}</td>
					<th  ALIGN=center>{{$empleado->telefono}}</th>
					<th  ALIGN=center>{{$empleado->fecha_nacimiento}}</th>
					<th  ALIGN=center>{{$empleado->direccion}}</th>


					<td>

			<a href="#" class="btn btn-danger btn btn-md" onclick=" var result = confirm('Esta seguro de eliminar esta Salida?');
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
