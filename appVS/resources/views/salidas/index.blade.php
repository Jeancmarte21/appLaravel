@extends('layouts.admin')
@section('title','Listado de Salidas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('salidas.search')
		<h3><a href="/salidas/create"><button class="btn btn-primary btn btn-md">CREAR NUEVA SALIDA</button></a></h3>

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>FECHA</th>
					<th>NOMBRE</th>
					<th>CANTIDAD</th>

					<th>OPCIONES</th>
				</thead>
				@foreach ($salidas as $salida)
				<tr>
					<td>{{ $salida->materiaprima_id}}</td>
					<td>{{ $salida->fecha}}</td>
					<td>{{ $salida->nombre}}</td>
					<td>{{ $salida->cantidad}}</td>


					<td>

						<a
			              href="#"
			              class="badge badge-danger btn btn-danger"
			                  onclick="
			                  var result = confirm('Are you sure you wish to delete this Cigarro?');
			                      if( result ){
			                              event.preventDefault();
			                              document.getElementById('delete-form').submit();
			                      }
			                          "
			                          >
			                  Eliminar
			              </a>
						<a href="{{URL::action('SalidasController@edit',$salida->materiaprima_id)}}"><button class="btn btn-info btn-xs">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$salida->materiaprima_id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
					</td>
				</tr>

				@endforeach

			</table>
			</table>
		</div>

	</div>
</div>


<form id="delete-form" action="{{route('salidas.destroy',[$salida->idsalida]) }}"
					 method="POST" style="display: none;">
									 <input type="hidden" name="_method" value="delete">
									 {{ csrf_field() }}
				 </form>



@endsection
