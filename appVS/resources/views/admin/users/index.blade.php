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

    <th class="text-center">NOMBRE</th>


    <th class="text-center">ACCION</th>
  </thead>

  @foreach($users as $user)
  <tr>

  <td class="text-center">{{$user->name}}</td>


  <td>
    <a href="/users/{{$user->id}}"
              class="badge badge-info btn btn-info btn-block"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
  </tr>

  @endforeach


</table>

</div>

</div>
</div>




@endsection
