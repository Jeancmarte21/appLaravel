@extends('layouts.admin')
@section('title','Listado de Salidas')
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
					<th>MATERIA PRIMA</th>
					<th>CANTIDAD</th>
					<th>FECHA SALIDA</th>
					<th>ACCION</th>
				</thead>


				<tr>
					<td>{{$salida->idsalida}}</td>
					<td>{{$salida->materiasprimas->nombre}}</td>
					<td>{{$salida->cantidad.' Lbs'}}</td>
					<td>{{$salida->fecha}}</td>



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

<form id="delete-form" action="{{ route('salidas.destroy',[$salida->idsalida]) }}"
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>
@endsection
