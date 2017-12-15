@extends('layouts.admin')
@section('title','Nomina')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


	</div>
</div>
<?php $cont = 0;
	$fecha = date('D, d \d\e F \d\e\l Y');
	$semana = date('W');?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div><h5 align="right"><span>S-</span>  {{$semana}}</h5><h5 ALIGN=right><strong><span>Fecha:</span>  {{$fecha}}</strong></h5></div>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center"></th>
					<th class="text-center" >Nombre</th>
					<th class="text-center">SALARIO</th>
					<th class="text-center">INCENT</th>
					<th class="text-center">LIC</th>
					<th class="text-center">EXTRA</th>
					<th class="text-center">BRUTO</th>
					<th class="text-center">SEG</th>
					<th class="text-center">TSS</th>
					<th class="text-center">AFS</th>
					<th class="text-center">AGUA</th>
					<th class="text-center">DESC</th>
					<th class="text-center">NETO</th>
				</thead>

				@foreach($jornadas as $jornada)
				<tr>
					<?php $cont++;?>
					<td>{{$cont}}</td>
					<td>{{$jornada->nombre.' '.$jornada->apellidos}}</td>
					<td>{{$jornada->salario}}</td>
					<td>{{$jornada->incent}}</td>
					<td></td>
					<td>{{$jornada->extra}}</td>
					<td>{{$jornada->salario + $jornada->incent + $jornada->extra}}</td>
					<td></td>
					<td>{{$jornada->tss}}</td>
					<td>{{$jornada->afs}}</td>
					<td>13</td>
					<td>{{$jornada->tss + $jornada->afs + 13}}</td>
					<td>{{($jornada->salario + $jornada->incent + $jornada->extra) - ($jornada->tss + $jornada->afs + 13)}}</td>
				</tr>
				@endforeach
			</table>
		</div>

	</div>
</div>

@endsection
