@extends('layouts.admin')
@section('title','Informacion Cigarro')
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
					<th>Nombre</th>
					<th>Tipo Cigarro</th>
					<th>Saborizante</th>
					
				</thead>


				<tr>
					<td>{{$cigarros->idcigarro}}</td>
					<th>{{$cigarros->nombre}}</th>
					<td>{{$cigarros->tipo_cigarro}}</td>
					<td>{{$cigarros->materiaPrima_idmateriaPrima}}</td>
					
					
				</tr>

			</table>
		</div>
		
	</div>
</div>

@endsection