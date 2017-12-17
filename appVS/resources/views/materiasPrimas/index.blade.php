@extends('layouts.admin')
@section('title','Materia Prima')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
@include('materiasPrimas.search')
@include('materiasPrimas.create')


	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th class="text-center">ID</th>
					<th class="text-center">NOMBRE</th>

					<th class="text-center">OPCIONES</th>
				</thead>
				@foreach ($materiasPrimas as $materiaprima)
				<tr>
					<td class="text-center">{{ $materiaprima->idmateriaPrima}}</td>
					<td class="text-center">{{ $materiaprima->nombre}}</td>
					<td>
						<div class="text-center">
						<a href="/materiasPrimas/{{$materiaprima->idmateriaPrima}}"class="badge badge-info btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
            <a href="/materiasPrimas/{{$materiaprima->idmateriaPrima}}/edit" class="badge badge-success btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
					</div>
					</td>
				</tr>

				@endforeach
				</table>
<h3 ALIGN=right><a href="{{action('MateriasPrimasController@downloadPDF')}}" ><button class="btn btn-danger btn-xs"><i class="fa fa-clipboard" aria-hidden="true"></i>  Generar Reporte PDF</button></a></h3>
  	</div>
</div>
</div>
@endsection
