@extends('layouts.admin')
@section('title','Informacion Materia Prima')
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
					<th>Categoria</th>
					<th>% Peso humedo</th>
					<th>Existencia minima</th>	
				</thead>

			
				<tr>
					<td>{{$materiaPrima->idmateriaPrima}}</td>
					<th>{{$materiaPrima->nombre}}</th>
					<td>{{$materiaPrima->categoria}}</td>
					<td>{{$materiaPrima->porcentaje_pesohumedo}}</td>
					<th>{{$materiaPrima->existencia_minima}}</th>
					
					
				</tr>
		        
			
              
			</table>
		</div>
		
	</div>
</div>


@endsection