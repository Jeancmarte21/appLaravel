@extends('layouts.admin')
@section('title','Listado de Entradas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		 @include('entradas.create')

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>


					<th class="text-center">FECHA</th>
					<th class="text-center">MATERIA PRIMA</th>


					<th 	 <div class="text-center">OPCIONES</th>
				</thead>
          		@foreach ($entradas as $entry)
				<tr>

					<td class="text-center">{{ $entry->fecha}}</td>
					<td class="text-center">{{ $entry->materiasprimas->nombre}}</td>



					<td>
      <div class="text-center">


						<a href="/entradas/{{$entry->identrada}}"class="badge badge-info btn btn-info">Ver</a>
						<a href="/entradas/{{$entry->identrada}}/edit" class="badge badge-success btn btn-primary">Editar</a>
						  </div>
					</td>

				</tr>

				@endforeach
			</table>
			</div>
		</div>
	</div>


@endsection
