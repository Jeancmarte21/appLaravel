@extends('layouts.admin')
@section('title','Materia Prima')
@section('contenido')

<div class="card" style="width: 95rem;">
	<div class="col-lg-12 col-md-9 col-xs-5">
<div class="list-group ">

	@foreach($materiasPrimas as $materiaPrima)
  		<li class="list-group-item">{{$materiaPrima->nombre}}


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

  		>

  		<a href="/materiasPrimas/{{$materiaPrima->idmateriaPrima}}/edit" class="badge badge-success btn btn-info">Editar</a>

  		<a href="/materiasPrimas/{{$materiaPrima->idmateriaPrima}}" class="badge badge-primary btn btn-primary">Ver</a>

  		</li>
  	@endforeach
  	</div>
</div>
</div>

<form id="delete-form" action="{{ route('materiasPrimas.destroy',[$materiaPrima->idmateriaPrima]) }}"
					 method="POST" style="display: none;">
									 <input type="hidden" name="_method" value="delete">
									 {{ csrf_field() }}
				 </form>
@endsection
