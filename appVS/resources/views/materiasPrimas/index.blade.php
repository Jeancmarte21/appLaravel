@extends('layouts.admin')
@section('title','Materia Prima')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><a href="/materiasPrimas/create"><button class="btn btn-primary btn btn-md">CREAR NUEVA</button></a></h3>

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>NOMBRE</th>

					<th>OPCIONES</th>
				</thead>
				@foreach ($materiasPrimas as $materiaprima)
				<tr>
					<td>{{ $materiaprima->idmateriaPrima}}</td>
					<td>{{ $materiaprima->nombre}}</td>
					<td>
						<a   
              				href="/materiasPrimas/{{$materiaprima->idmateriaPrima}}"
              				class="badge badge-info btn btn-success">Ver</a>
                         <a href="/salidas/{{$materiaprima->idmateriaPrima}}/edit" class="badge badge-success btn btn-info">Editar</a>
					</td>
				</tr>

				@endforeach
				</table>
  	</div>
</div>
</div>
@endsection
