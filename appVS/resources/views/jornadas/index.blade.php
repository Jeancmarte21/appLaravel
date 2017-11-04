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
					<th>Id</th>
					<th>Fecha</th>
					<th>Empleado</th>
					<th>Incentivo</th>
					<th>Horas extras</th>
					<th>Comida</th>
					<th>Opciones</th>
				</thead>
             
			</table>
		</div>
		
	</div>
</div>


@endsection