@extends('layouts.admin')
@section('title','Detalles de la Jornada')
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
					<th class="text-center" class="text-center">FECHA</th>
					<th class="text-center" class="text-center">MAQUINA</th>
					<th class="text-center" class="text-center">EMPLEADO</th>
					<th class="text-center" class="text-center">DIA DOBLE</th>
					<th class="text-center" class="text-center">INCENTIVO</th>
					<th class="text-center" class="text-center">HORAS EXTRAS</th>
					<th class="text-center" class="text-center">OPCIONES</th>
				</thead>


				<tr>
					<td class="text-center">{{ $jornada->fecha}}</td>
					<td class="text-center">{{ $jornada->maquinas->nombre}}</td>
					<td class="text-center">{{ $jornada->empleados->nombre.' '.$jornada->empleados->apellidos}}</td>
					@if($jornada->jornada_doble == 2)
					<td class="text-center">Si</td>
					@else
					<td class="text-center">No</td>
					@endif
					<td class="text-center">{{ $jornada->incentivo}}</td>
					<td class="text-center">{{ $jornada->hora_extra}}</td>



					<td>

					<a href="#" class="btn btn-danger btn btn-xs btn-block" onclick=" var result = confirm('Esta seguro de eliminar esta Jornada?');
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
