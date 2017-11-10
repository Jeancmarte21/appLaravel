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
					<th>ID</th>
					<th>NOMBRE</th>
					<th>TIPO CIGARRO</th>
					<th>AROMA</th>
					
				</thead>


				<tr>
					<td>{{$cigarros->idcigarro}}</td>
					<th>{{$cigarros->nombre}}</th>
					<td>{{$cigarros->tipo}}</td>
					@if($cigarros->saborizante != null)
					<td>{{$cigarros->saborizante}}</td>
					@else
					<td>Sin Aroma</td>
					@endif
				</tr>

			</table>
		</div>
		
	</div>
</div>

@endsection