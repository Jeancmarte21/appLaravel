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
					<th>FECHA</th>
					<th>MAQUINA</th>
					<th>EMPLEADO</th>
					<th>INCENTIVO</th>
					<th>HORAS EXTRAS</th>
					<th>OPCIONES</th>
				</thead>


				<tr>
					<td>{{ $jornada->fecha}}</td>
					<td>{{ $jornada->maquinas->nombre}}</td>
					<td>{{ $jornada->empleados->nombre.' '.$jornada->empleados->apellidos}}</td>
					<td>{{ $jornada->incentivo}}</td>
					<td>{{ $jornada->hora_extra}}</td>



					<td>

					<a href="#" class="btn btn-danger btn btn-md" onclick=" var result = confirm('Esta seguro de eliminar esta Jornada?');
					if( result ){
							event.preventDefault();
							document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>

					</td>

				</tr>




			</table>
		</div>

	</div>
</div>

<form id="delete-form" action="{{ route('jornadas.destroy',[$jornada->idjornada]) }}"
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>
@endsection
