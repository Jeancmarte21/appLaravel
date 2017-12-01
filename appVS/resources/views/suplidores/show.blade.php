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
					<th class="text-center">ID</th>
					<th class="text-center">NOMBRE</th>
					<th class="text-center">TELEFONO</th>
					<th class="text-center">CORREO</th>
					<th class="text-center">DIRECCIÓN</th>

					<th class="text-center">OPCIONES</th>
				</thead>


				<tr>
					<td class="text-center">{{$suplidor->idsuplidor}}</td>
					<td class="text-center">{{$suplidor->nombre}}</td>
					<th class="text-center">{{$suplidor->telefono}}</th>
					<th class="text-center">{{$suplidor->correo}}</th>
					<th class="text-center">{{$suplidor->direccion}}</th>


					<td>

						<a href="#" class="btn btn-danger btn btn-xs btn-block" onclick=" var result = confirm('Esta seguro de eliminar este Suplidor?');
																		if( result ){
																						event.preventDefault();
																						document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>

					</td>

				</tr>



			</table>
		</div>

	</div>
</div>

<form id="delete-form" action="{{ route('suplidores.destroy',[$suplidor->idsuplidor]) }}"
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

@endsection
