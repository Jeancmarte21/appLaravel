@extends('layouts.admin')
@section('title','Empleados')
@section('contenido')


<div class="card" style="width: 95rem;">
	<div class="col-lg-12 col-md-9 col-xs-5">
<div class="list-group ">

	@foreach($empleados as $empleado)
  		<li class="list-group-item">{{$empleado->nombre.' '.$empleado->apellidos}}
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

  		<a href="/empleados/{{$empleado->idempleado}}/edit" class="badge badge-success btn btn-info">Editar</a>

  		<a href="/empleados/{{$empleado->idempleado}}" class="badge badge-primary btn btn-primary">Ver</a>



  		</li>
  	@endforeach
  	</div>
</div>
<form id="delete-form" action="{{ route('empleados.destroy',[$empleado->idempleado]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>


@endsection
