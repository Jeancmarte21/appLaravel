@extends('layouts.admin')
@section('title','Listado de Entradas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('entradas.search')
		<h3><a href="/entradas/create"><button class="btn btn-primary btn btn-md">CREAR NUEVA ENTRADA</button></a></h3>
		
	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					
					<th>FECHA</th>
					<th>MATERIA PRIMA</th>
					<th>PRECIO</th>
					<th>CANTIDAD</th>
					<th>SUPLIDOR</th>
					<th>OPCIONES</th>
				</thead>
          		@foreach ($entradas as $entry)
				<tr>

					<td>{{ $entry->fecha}}</td>
					<td>{{ $entry->matprim}}</td>
					<td>{{ $entry->precio}}</td>
					<td>{{ $entry->cantidad}}</td>
					<td>{{ $entry->suplidor}}</td>


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
                          >Eliminar</a>
                         <a href="/entradas/{{$entry->identrada}}/edit" class="badge badge-success btn btn-info">Editar</a>
					</td>
				</tr>

				@endforeach
			</table>
			</div>
		</div>
	</div>




@endsection