@extends('layouts.admin')
@section('title','Listado de Entradas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/entradas/create"><button class="btn btn-primary  btn btn-xs"><i class="fa fa-plus" aria-hidden="true"></i>  CREAR NUEVA ENTRADA</button></a></h3>

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>


					<th>FECHA</th>
					<th>MATERIA PRIMA</th>


					<th>OPCIONES</th>
				</thead>
          		@foreach ($entradas as $entry)
				<tr>

					<td>{{ $entry->fecha}}</td>
					<td>{{ $entry->materiasprimas->nombre}}</td>



					<td>

						<a href="/entradas/{{$entry->identrada}}"class="badge badge-info btn btn-primary">Ver</a>
						<a href="/entradas/{{$entry->identrada}}/edit" class="badge badge-success btn btn-info">Editar</a>
					</td>

				</tr>

				@endforeach
			</table>
			</div>
		</div>
	</div>


@endsection
