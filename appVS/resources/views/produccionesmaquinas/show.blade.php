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
					<th class="text-center">FECHA & HORA</th>
					<th class="text-center">MAQUINA</th>
					<th class="text-center">CIGARRO</th>
					<th class="text-center">CONFIGURACIÓN</th>
          <th class="text-center">CANTIDAD</th>
					<th class="text-center">OPCIONES</th>
				</thead>
    <tr>

      <td class="text-center">{{ $produccionMaquina->fecha}}</td>
      <td class="text-center">{{ $produccionMaquina->maquinas->nombre}}</td>
      <td class="text-center">{{ $produccionMaquina->cigarros->nombre}}</td>
      <td class="text-center">{{ $produccionMaquina->configuraciones->nombre}}</td>
      <td class="text-center">{{ $produccionMaquina->cantidad}}</td>
      <td>


			<a href="#" class="btn btn-danger btn btn-xs btn-block" onclick=" var result = confirm('Esta seguro de eliminar esta Produccion de Maquina?');
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
