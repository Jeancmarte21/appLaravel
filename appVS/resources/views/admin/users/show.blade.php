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
    <th>ID</th>
    <th>NOMBRE</th>
    <th>CORREO</th>
    <th>ROL</th>
    <th>ACCION</th>
  </thead>


  <tr>
  <td>{{$user->id}}</td>
  <td>{{$user->name}}</td>
  <td>{{$user->email}}</td>
  <td>{{$user->roles[0]->name}}</td>
  <td>


<a href="{{action('UsersController@downloadPDF', $user->id)}}" class="btn btn-primary btn-xs">PDF</a>
<a href="#" class="btn btn-danger btn btn-xs" onclick=" var result = confirm('Esta seguro de eliminar este Usuario?');
            if( result ){
            event.preventDefault();
           document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>

  </td>
  </tr>



</table>

</div>

</div>
</div>

<form id="delete-form" action="{{ route('users.destroy',[$user->id]) }}"
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>


@endsection
