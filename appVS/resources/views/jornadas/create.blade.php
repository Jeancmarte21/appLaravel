@extends('layouts.admin')
@section('title','Crear Jornada')
@section('contenido')

<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/jornadas">
      <fieldset>
      {{ csrf_field()}}
                   <div class="form-group">
        <label class="col-xs-3 control-label">Fecha</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="date"  id="example-date-input" name="fecha" required>
        </div>
    </div>
                              <div class="form-group">
        <label class="col-xs-3 control-label">Maquina</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="maquina" required>
                <option value="">Seleccione</option>
                @foreach($maquinas as $maquina)
                <option value="{{$maquina->idmaquina}}">{{$maquina->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>

                <div class="form-group">
        <label class="col-xs-3 control-label">Empleado</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="empleado" required>
                <option value="">Seleccione</option>
                @foreach($empleados as $empleado)
                <option value="{{$empleado->idempleado}}">{{$empleado->nombre.' '.$empleado->apellidos}}</option>
              @endforeach
            </select>
        </div>
    </div>


                     <div class="form-group">
        <label class="col-xs-3 control-label">Incentivo</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">

                <input type="number" class="form-control" name="incentivo" value="0" min="0" step="0.1"/>
                <span class="input-group-addon">$</span>

            </div>
        </div>
    </div>



         <div class="form-group">
        <label class="col-xs-3 control-label">Horas Extras</label>
        <div class="col-xs-5 selectContainer">
        <input class="form-control" type="number" value="0" min="0" step="0.1" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1" name="horas_extras" />
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
