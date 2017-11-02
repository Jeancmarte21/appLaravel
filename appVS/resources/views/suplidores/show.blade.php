@extends('layouts.admin')
@section('title','Informacion Suplidor')
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
					<th>Id</th>
					<th>Empresa</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Dirección</th>
					<th>Pais</th>	
				</thead>

			
				<tr>
					<td>{{$suplidor->idsuplidor}}</td>
					<th>{{$suplidor->nombre}}</th>
					<td>{{$suplidor->telefono}}</td>
					<td>{{$suplidor->correo}}</td>
					<th>{{$suplidor->direccion}}</th>
					<th>{{$suplidor->pais}}</th>
					
				
				</tr>
		        
			
              
			</table>
		</div>
		
	</div>
</div>


@endsection