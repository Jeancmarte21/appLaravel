@extends('layouts.admin')
@section('title','Listado de Entradas')
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
					<th class="text-center">ID</th>
          <th class="text-center">FECHA ENTRADA</th>
					<th class="text-center">MATERIA PRIMA</th>
          <th class="text-center">PRECIO</th>
					<th class="text-center">CANTIDAD</th>
          <th class="text-center">SUPLIDOR</th>

					<th "text-center">ACCION</th>
				</thead>


        <tr>
          <td class="text-center">{{ $entrada->identrada}}</td>
					<td class="text-center">{{ $entrada->fecha}}</td>
					<td class="text-center">{{ $entrada->materiasprimas->nombre}}</td>
					<td class="text-center">{{ $entrada->precio}}</td>
					<td class="text-center">{{ $entrada->cantidad}}</td>
					<td class="text-center">{{ $entrada->suplidores->nombre}}</td>



<td>

  <a href="#" class="btn btn-danger btn btn-xs" onclick=" var result = confirm('Esta seguro de eliminar esta Entrada?');
                          if( result ){
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>


</td>

</table>
</div>

</div>
</div>

</tr>


<form id="delete-form" action="{{ route('entradas.destroy',[$entrada->identrada]) }}"
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>
@endsection
