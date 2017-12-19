@extends('layouts.admin')
@section('contenido')
@section('title','Costo Unitario')


<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	@include('costoUnitario.precostoUnitario')

</div>
</div>


<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">

				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<?php $mes=-1; $semana = -1; ?>

	</div>
</div>
			<table class="table table-striped table-bordered table-condensed table-hover">
			<thead>
					<th class="text-center">FECHA</th>
					<th class="text-center">NOMBRE CONFIGURACIÓN</th>
					<th class="text-center">CAPA</th>
					<th class="text-center">CAPOTE</th>
          <th class="text-center">AROMA</th>
          <th class="text-center">PEGA</th>
					<th class="text-center">COSTO POR UNIDAD</th>

					</thead>



			</table>
			<h3 ALIGN=right><a href="{{action('CostoUnitarioController@downloadPDF')}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-clipboard" aria-hidden="true"></i>  Generar Reporte PDF</button></a></h3>
</div>
		</div>

	</div>




@endsection
