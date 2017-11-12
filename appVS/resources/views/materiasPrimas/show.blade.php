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
					<th>ID</th>
					<th>NOMBRE</th>
					<th>CATEGORIA</th>
					<th>% PESO HUMEDO</th>
					<th>EXISTENCIA MINIMA</th>
					<th>OPCIONES</th>	
				</thead>

			
				<tr>
					<td>{{$materiaPrima->idmateriaPrima}}</td>
					<td>{{$materiaPrima->nombre}}</td>
					<td>{{$materiaPrima->categoria}}</td>
					<td>{{$materiaPrima->porcentaje_pesohumedo}}</td>
					<td>{{$materiaPrima->existencia_minima}}</td>
					<td>

					<a href="#" class="btn btn-danger btn btn-md" onclick=" var result = confirm('Esta seguro de eliminar esta Materia Prima?');
																	if( result ){
																					event.preventDefault();
																					document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>

				</td>
					
				</tr>
		        
			
              
			</table>
		</div>
		
	</div>
</div>
 <form id="delete-form" action="{{ route('materiasPrimas.destroy',[$materiaPrima->idmateriaPrima]) }}"
					 method="POST" style="display: none;">
									 <input type="hidden" name="_method" value="delete">
									 {{ csrf_field() }}
				 </form>


@endsection