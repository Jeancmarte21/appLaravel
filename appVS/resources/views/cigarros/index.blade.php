@extends('layouts.admin')
@section('title','Cigarros')
@section('contenido')

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
  @include('cigarros.create')
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
          @foreach($cigarros as $cigarro)
          <tr>
          <td class="text-center">{{$cigarro->idcigarro}}</td>
          <td class="text-center"{{$cigarro->nombre}}</td>
          <td class="text-center">{{$cigarro->tipo}}</td>
          <td>
            
           <div class="text-center">

            <a href="/cigarros/{{$cigarro->idcigarro}}" class="badge badge-info btn btn-info">Ver</a>
           <a href="/cigarros/{{$cigarro->idcigarro}}/edit" class="badge badge-success btn btn-primary">Editar</a>
           </div>
          </td>
        </tr>

        @endforeach
        </table>
</div>
</div>
	</div>


@endsection
