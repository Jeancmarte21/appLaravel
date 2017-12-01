@extends('layouts.admin')
@section('title','Informacion Maquina')
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
					<th class="text-center">NOMBRE</th>
					<th class="text-center">PAGA POR</th>
					<th class="text-center">ACCION</th>
				</thead>


				<tr>
					<td class="text-center">{{$maquina->idmaquina}}</td>
					<td class="text-center">{{$maquina->nombre}}</td>
					@if($maquina->produccion == 1)
					<td class="text-center">Produccion</td>
					@endif
					@if($maquina->produccion == 0)
					<td class="text-center"> Salario Fijo</td>
					@endif
					<td>

					<a href="#" class="btn btn-danger btn btn-xs btn-block" onclick=" var result = confirm('Esta seguro de eliminar esta Maquina?');
																	if( result ){
																					event.preventDefault();
																					document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>

				</td>

				</tr>



			</table>
		</div>

	</div>
</div>
</div>
  	 <form id="delete-form" action="{{ route('maquinas.destroy',[$maquina->idmaquina]) }}"
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>



@endsection
