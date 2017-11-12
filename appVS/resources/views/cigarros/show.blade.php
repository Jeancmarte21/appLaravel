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
					<th>ACCION</th>
					
				</thead>

					<tr>
					<td>{{$cigarro->idcigarro}}</td>
					<th>{{$cigarro->nombre}}</th>
					<td>{{$cigarro->tipo}}</td>
					@if($cigarro->saborizante != null)
					<td>{{$cigarro->materiasprimas->nombre}}</td>
					@else
					<td>Sin Aroma</td>
					@endif
					<td>

					<a href="#" class="btn btn-danger btn btn-md" onclick=" var result = confirm('Esta seguro de eliminar este Cigarro?');
																	if( result ){
																					event.preventDefault();
																					document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>

				</td>
				</tr>
			

			</table>
		</div>
		
	</div>
</div>

 <form id="delete-form" action="{{ route('cigarros.destroy',[$cigarro->idcigarro]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

@endsection