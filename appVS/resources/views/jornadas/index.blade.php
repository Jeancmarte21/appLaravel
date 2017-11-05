@extends('layouts.admin')
@section('title','Listado de Jornadas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('jornadas.search')
		<h3><a href="jornadas/create"><button class="btn btn-success btn btn-md">CREAR NUEVA JORNADA</button></a></h3>
		
	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>FECHA</th>
					<th>EMPLEADO</th>
					<th>INCENTIVO</th>
					<th>HORAS EXTRAS</th>
					<th>OPCIONES</th>
				</thead>
            <!--  @foreach ($jornadas as $jornada)
				<tr>
					
					<td>{{ $jornada->fecha}}</td>
					Falta aqui en nombre del empleado
					<td>{{ $jornada->incentivo}}</td>
					<td>{{ $jornada->hora_extra}}</td>
					
					<th>Opciones</th>
					<td>
						<a href="{{URL::action('JornadasController@edit',$jornada->empleado_id)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$jornada->empleado_id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				
				@endforeach-->
			</table>
			</table>
		</div>
		
	</div>
</div>


@endsection