@extends('layouts.admin')
@section('title','Maquinas')
@section('contenido')

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3><a href="/maquinas/create"><button class="btn btn-primary btn btn-md">CREAR NUEVA MAQUINA</button></a></h3>

  </div>
</div>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>PAGA POR</th>

          <th>OPCIONES</th>
        </thead>
        @foreach ($maquinas as $maquina)
        <tr>
          <td>{{$maquina->idmaquina}}</td>
          <td>{{$maquina->nombre}}</td>
          @if($maquina->produccion == 1) 
          <td>Produccion</td>
          @endif
          @if($maquina->produccion == 0)
          <td>Salario Fijo</td>
          @endif


          <td>
            <a   
                      href="/maquinas/{{$maquina->idmaquina}}"
                      class="badge badge-info btn btn-success">Ver</a>
                         <a href="/maquinas/{{$maquina->idmaquina}}/edit" class="badge badge-success btn btn-info">Editar</a>
          </td>
        </tr>

        @endforeach
      </table>
    </div>
  </div>
</div> 	
@endsection