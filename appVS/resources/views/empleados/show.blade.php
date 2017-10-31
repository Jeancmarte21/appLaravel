@extends('layouts.admin')
@section('title','Informacion Empleado')
@section('contenido')

<div class="card border-primary mb-3" style="max-width: 95rem;">
  <div class="card-body text-primary">
    <h4 class="card-title">{{$empleado->nombre.' '.$empleado->apellidos}}</h4>
    <p class="card-text">{{$empleado->direccion}}</p>
  </div>
</div>

@endsection