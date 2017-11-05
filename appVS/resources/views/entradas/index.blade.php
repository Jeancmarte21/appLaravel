@extends('layouts.admin')
@section('title','Listado de Entradas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('entradas.search')
		<h3><a href="entradas/create"><button class="btn btn-success btn btn-md">CREAR NUEVA ENTRADA</button></a></h3>
		
	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>ID</th>
					<th>FECHA</th>
					<th>PRECIO</th>
					<th>CANTIDAD</th>
					<th>SUPLIDOR</th>
					<th>OPCIONES</th>
				</thead>
          
			</table>
			</table>
		</div>
		
	</div>
</div>






@endsection