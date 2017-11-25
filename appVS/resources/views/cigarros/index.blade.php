@extends('layouts.admin')
@section('title','Cigarros')
@section('contenido')

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3><a href="/cigarros/create"><button class="btn btn-primary btn btn-md"><i class="fa fa-plus" aria-hidden="true"></i>  CREAR NUEVO CIGARRO</button></a></h3>

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
          @foreach($cigarros as $cigarro)
          <tr>
          <td>{{$cigarro->idcigarro}}</td>
          <td>{{$cigarro->nombre}}</td>
          <td>{{$cigarro->tipo}}</td>
          <td>

            <a href="/cigarros/{{$cigarro->idcigarro}}"
                      class="badge badge-info btn btn-primary">Ver</a>
                         <a href="/cigarros/{{$cigarro->idcigarro}}/edit" class="badge badge-success btn btn-info">Editar</a>
          </td>
        </tr>

        @endforeach
        </table>
</div>
</div>
	</div>


@endsection
