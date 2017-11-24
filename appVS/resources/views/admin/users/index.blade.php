@extends('layouts.admin')
@section('contenido')
@section('title','Lista de Usuarios')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
<table class="table">
  <thead>

    <th>NOMBRE</th>


    <th>ACCION</th>
  </thead>

  @foreach($users as $user)
  <tr>

  <td>{{$user->name}}</td>


  <td>


    <a href="/users/{{$user->id}}"
              class="badge badge-info btn btn-primary">Ver</a>


  </tr>

  @endforeach

<a href="{{action('UsersController@downloadPDF', $user->id)}}" class="btn btn-primary btn-xs">Generar Reporte PDF</a>
</table>

</div>

</div>
</div>




@endsection
