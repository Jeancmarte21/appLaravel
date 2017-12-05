@extends('layouts.admin')
@section('title','Maquinas')
@section('contenido')

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
  @include('maquinas.create')
  </div>
</div>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th class="text-center">ID</th>
          <th class="text-center">NOMBRE</th>
          <th class="text-center">PAGA POR</th>

          <th class="text-center">OPCIONES</th>
        </thead>
        @foreach ($maquinas as $maquina)
        <tr>
          <td class="text-center">{{$maquina->idmaquina}}</td>
          <td class="text-center">{{$maquina->nombre}}</td>
          @if($maquina->produccion == 1)
          <td class="text-center">Produccion</td>
          @endif
          @if($maquina->produccion == 0)
          <td class="text-center">Salario Fijo</td>
          @endif


          <td>
            <div class="text-center">


            <a href="/maquinas/{{$maquina->idmaquina}}"class="badge badge-info btn btn-info">Ver</a>
            <a href="/maquinas/{{$maquina->idmaquina}}/edit" class="badge badge-info btn btn-primary">Editar</a>
</div>
          </td>
        </tr>

        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
