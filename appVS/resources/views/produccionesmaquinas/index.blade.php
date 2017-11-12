@extends('layouts.admin')
@section('title','Producción Maquinas')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		@include('produccionesmaquinas.search')
		<h3><a href="/produccionesmaquinas/create"><button class="btn btn-primary btn btn-md">CREAR NUEVA PRODUCCIÓN DE MAQUINA</button></a></h3>

	</div>
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>

					<th>FECHA & HORA</th>
					<th>MAQUINA</th>
					<th>CIGARRO</th>
					<th>CONFIGURACIÓN</th>
          <th>CANTIDAD</th>
					<th>OPCIONES</th>
				</thead>

        @foreach ($produccionMaq as $produccionMaquina)
    <tr>

      <td>{{ $produccionMaquina->fecha}}</td>
      <td>{{ $produccionMaquina->maquina}}</td>
      <td>{{ $produccionMaquina->nombre}}</td>
      <td>{{ $produccionMaquina->configuracion}}</td>
      <td>{{ $produccionMaquina->cantidad}}</td>


  <td>

   <a href="{{URL::action('ProduccionesMaquinasController@edit',$produccionMaquina->maquina_id)}}"><button class="btn btn-info btn-xs">Editar</button></a>
                <a href="" data-target="#modal-delete-{{$produccionMaquina->maquina_id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
 </td>

</tr>
@endforeach
</table>
</table>
</div>

</div>
</div>
<form id="delete-form" action="{{ route('produccionesmaquinas.destroy',[$produccionMaquina->idproduccionMaquina]) }}"
					 method="POST" style="display: none;">
									 <input type="hidden" name="_method" value="delete">
									 {{ csrf_field() }}
				 </form>

@endsection
