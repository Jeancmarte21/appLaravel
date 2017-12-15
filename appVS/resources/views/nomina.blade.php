@extends('layouts.admin')
@section('title','Nomina')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


	</div>
</div>
<?php $cont = 0; $salario_acum = 0; $incent_acum = 0; $extra_acum = 0;
	$tss_acum =0; $afs_acum = 0; $agua_acum = 0; $desc_acum = 0; $bruto_acum = 0; $neto_acum = 0;
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
					<?php $cont++; $salario_acum += $jornada->salario; $incent_acum += $jornada->incent; $extra_acum += $jornada->extra; $tss_acum += $jornada->tss; $afs_acum += $jornada->afs; $agua_acum += 13; $desc_acum += $jornada->tss + $jornada->afs + 13; $bruto_acum += $jornada->salario + $jornada->incent + $jornada->extra ; $neto_acum += ($jornada->salario + $jornada->incent + $jornada->extra) - ($jornada->tss + $jornada->afs + 13) ;?>

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
				<tr>
				<td></td>
				<td align="right"><strong>TOTAL</strong></td>
				<td>{{$salario_acum}}</td>
				<td>{{$incent_acum}}</td>
				<td></td>
				<td>{{$extra_acum}}</td>
				<td>{{$bruto_acum}}</td>
				<td></td>
				<td>{{$tss_acum}}</td>
				<td>{{$afs_acum}}</td>
				<td>{{$agua_acum}}</td>
				<td>{{$desc_acum}}</td>
				<td>{{$neto_acum}}</td>
				</tr>
			</table>
		</div>

	</div>
</div>

@endsection
