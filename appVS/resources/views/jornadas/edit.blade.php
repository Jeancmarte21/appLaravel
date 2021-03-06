@extends('layouts.admin')
@section('title','Editar Jornada')
@section('contenido')

<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="{{route('jornadas.update', [$jornada->idjornada])}}">
      
      <fieldset>
        {{ csrf_field()}}
        <input type="hidden" name="_method" value="put">
                   <div class="form-group">
        <label class="col-xs-3 control-label">Fecha</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="date"  id="fecha" name="fecha"   value="{{$jornada->fecha}}" required>
        </div>
    </div>
                              <div class="form-group">
        <label class="col-xs-3 control-label">Maquina</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="maquina">
                <option value="{{$jornada->maquina_id}}" selected>{{$jornada->maquinas->nombre}}</option>
                @foreach($maquinas as $maquina)
                <option value="{{$maquina->nombre}}">{{$maquina->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>

                <div class="form-group">
        <label class="col-xs-3 control-label">Empleado</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="empleado">
                <option value="{{$jornada->empleado_id}}" selected>{{$jornada->empleados->nombre.' '.$jornada->empleados->apellidos}}</option>
            </select>
        </div>
    </div>

          <div class="form-group">
          <label class="col-xs-3 control-label">Dia Doble:</label>
          <div class="col-xs-5 selectContainer">
                      <select class="form-control" name="jornada_doble" required>
                          <option value=0>No</option>
                          <option value=2>Si</option>
                      </select>
          </div>
          </div>

                     <div class="form-group">
        <label class="col-xs-3 control-label">Incentivo</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">

                <input type="number" class="form-control" name="incentivo" value="0" min="0" step="0.1"   value="{{$jornada->incentivo}}"/>
                <span class="input-group-addon">$</span>

            </div>
        </div>
    </div>



         <div class="form-group">
        <label class="col-xs-3 control-label">Horas Extras</label>
        <div class="col-xs-5 selectContainer">
        <input class="form-control" type="number" value="0" min="0" step="0.1" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="hora_extra" name="hora_extra"   value="{{$jornada->hora_extra}}"/>
			 </div>
						</div>



      <div class="form-group">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg ">Actualizar</button>
        </div>
      </div>
      </fieldset>
    </form>
  </div>
</div>

@endsection
