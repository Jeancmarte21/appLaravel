@extends('layouts.admin')
@section('title','Crear Producción Maquina')
@section('contenido')


    <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="{{route('produccionesmaquinas.update', [$produccionesmaquinas->idproduccionesmaquinas])}}">
      <fieldset>
      {{ csrf_field()}}
      <input type="hidden" name="_method" value="put">
                   <div class="form-group">
        <label for="example-datetime-local-input" class="col-xs-3 control-label">Fecha & hora</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="datetime-local" id="fecha" name="fecha" value="{{produccionesmaquinas->fecha}}" required>
        </div>
    </div>





                              <div class="form-group">
        <label class="col-xs-3 control-label">Maquina</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="maquina" required>
                <option value="{{produccionesmaquinas->maquina_id}}">{{produccionesmaquinas->maquinas->nombre}}</option>
                @foreach($maquinas as $maquina)
                <option value="{{$maquina->idmaquina}}">{{$maquina->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>

                <div class="form-group">
        <label class="col-xs-3 control-label">Cigarro</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="cigarro" required>
                <option value="{{produccionesmaquinas->cigarro_id}}">{{produccionesmaquinas->cigarros->nombre}}</option>
                @foreach($cigarros as $cigarro)
                <option value="{{$cigarro->idcigarro}}">{{$cigarro->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Configuración</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="configuracion" required>
                <option value="{{produccionesmaquinas->idproduccionesmaquinas}}">{{produccionesmaquinas->configuraciones->nombre}}</option>
                @foreach($configuraciones as $configuracion)
                <option value="{{$configuracion->idconfiguracion}}">{{$configuracion->nombre}}</option>
              @endforeach
              </select>
        </div>
    </div>



         <div class="form-group">
        <label class="col-xs-3 control-label">Cantidad</label>
        <div class="col-xs-5 selectContainer">
        <input class="form-control" type="number" value="0" min="0" step="0.1" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="cantidad" name="cantidad" value="{{produccionesmaquinas->cantidad}}">
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
