@extends('layouts.admin')
@section('title','Informacion Configuracion')
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
					<th>CIGARRO</th>
					<th>CAPA</th>
					<th>CAPOTE</th>
					<th>FECHA</th>
					
				</thead>

			
				<tr>
					<td>{{$configuracion->idconfiguracion}}</td>
					<th>{{$configuracion->cigarro_idcigarro}}</th>
					<td>{{$configuracion->capa}}</td>
					<td>{{$configuracion->capote}}</td>
					<td>{{$configuracion->fecha}}</td>
					
					
				</tr>
		        
			
              
			</table>
		</div>
		
	</div>
</div>


@endsection