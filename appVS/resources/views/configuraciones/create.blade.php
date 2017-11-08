@extends('layouts.admin')
@section('title','Crear Configuración')
@section('contenido')

<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/configuracion">
      <fieldset>
      {{ csrf_field()}}

                   	   <div class="form-group">
        <label class="col-xs-3 control-label">Cigarro</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="cigarro">
            <option value="">Seleccione</option>
              @foreach($cigarros as $cigarro)
                <option value="{{$cigarro->idcigarro}}">{{$cigarro->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>


                   <div class="form-group">
        <label class="col-xs-3 control-label">Capa</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="capa" id="capa">
                <option value="">Seleccione</option>
                @foreach($materiasprimas as $materiaprima)
                <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
              @endforeach
			</select>
        </div>
    </div>
                   <div class="form-group">
        <label class="col-xs-3 control-label">Capote</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="capote" id="capote">
                <option value="">Seleccione</option>
                @foreach($materiasprimas as $materiaprima)
                <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
              @endforeach
			</select>
        </div>
    </div>

                        <div class="form-group">
        <label class="col-xs-3 control-label">Fecha</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="date" id="fecha" name="fecha">
        </div>
    </div>

      <div class="form-group">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg ">Registrar</button>
        </div>
      </div>
      </fieldset>
    </form>
  </div>
</div>


@endsection
