@extends('layouts.admin')
@section('title','Informacion Producción Maquina')
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
					<th>FECHA & HORA</th>
					<th>MAQUINA</th>
					<th>CIGARRO</th>
					<th>CONFIGURACIÓN</th>
          			<th>CANTIDAD</th>
					<th>OPCIONES</th>
				</thead>
    <tr>

      <td>{{ $produccionMaquina->fecha}}</td>
      <td>{{ $produccionMaquina->maquinas->nombre}}</td>
      <td>{{ $produccionMaquina->cigarros->nombre}}</td>
      <td>{{ $produccionMaquina->configuraciones->nombre}}</td>
      <td>{{ $produccionMaquina->cantidad}}</td>
      <td>
					<a href="#" class="btn btn-danger btn btn-md" onclick=" var result = confirm('Esta seguro de eliminar esta Produccion de Maquina?');
																	if( result ){
																					event.preventDefault();
																					document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>

				</td>

				</tr>
			</table>
		</div>

	</div>
</div>
 <form id="delete-form" action="{{ route('produccionesmaquinas.destroy',[$produccionMaquina->idproduccionmaquina]) }}"
					 method="POST" style="display: none;">
									 <input type="hidden" name="_method" value="delete">
									 {{ csrf_field() }}
				 </form>
@endsection
