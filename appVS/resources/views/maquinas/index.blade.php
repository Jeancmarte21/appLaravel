@extends('layouts.admin')
@section('title','Maquinas')
@section('contenido')


<div class="list-group ">

	@foreach($maquinas as $maquina)
  		<li class="list-group-item">{{$maquina->nombre}}

			<a   
              href="#"
              class="badge badge-danger btn btn-danger"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Eliminar
              </a>

             

  		<a href="/maquinas/{{$maquina->idmaquina}}/edit" class="badge badge-success btn btn-info">Editar</a>

  		<a href="/maquinas/{{$maquina->idmaquina}}" class="badge badge-primary btn btn-primary">Ver</a>



  		</li>
  	
  	@endforeach
  	</div>
  	 <form id="delete-form" action="{{ route('maquinas.destroy',[$maquina->idmaquina]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>
  	
@endsection