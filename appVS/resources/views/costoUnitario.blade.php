@extends('layouts.admin')
@section('title','Costo Unitario')
@section('contenido')


<?php
	$fecha = date('D, d \d\e F \d\e\l Y');
	$semana = date('W');
  ?>

  <div class="row">
  	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
  	@include('precostounitario')

  </div>
  </div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div><h5 align="right"><span>S-</span>  {{$semana}}</h5><h5 ALIGN=right><strong><span>Fecha:</span>  {{$fecha}}</strong></h5></div>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">FECHA</th>
					<th class="text-center">NOMBRE CONFIGURACIÓN</th>
					<th class="text-center">CAPA</th>
					<th class="text-center">CAPOTE</th>
					<th class="text-center">RELLENO</th>
					<th class="text-center">COSTO UNITARIO</th>
				</thead>



			</table>

		</div>

	</div>
</div>

@endsection
