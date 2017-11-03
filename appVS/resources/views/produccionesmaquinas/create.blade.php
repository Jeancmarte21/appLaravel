@extends('layouts.admin')
@section('title','Crear Producción Maquina')
@section('contenido')


    <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/empleados">
      <fieldset>
      {{ csrf_field()}}
                   <div class="form-group">
        <label for="example-datetime-local-input" class="col-xs-3 control-label">Fecha & hora</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" name="fecha">
        </div>
    </div>
    
   



                              <div class="form-group">
        <label class="col-xs-3 control-label">Maquina</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="maquina">
                <option value="">Seleccione</option>
                <option value="">Arenco</option>
              <option value="">AMF</option>
            </select>
        </div>
    </div>
                 
                <div class="form-group">
        <label class="col-xs-3 control-label">Cigarro</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="cigarro">
                <option value="">Seleccione</option>
                <option value="">...</option>
              <option value="">...</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Configuración</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="configuracion">
                <option value="">Seleccione</option>
                <option value="">...</option>
              <option value="">...</option>
            </select>
        </div>
    </div>
             
                  
                    
         <div class="form-group">
        <label class="col-xs-3 control-label">Cantidad</label>
        <div class="col-xs-5 selectContainer">
        <input class="form-control" type="number" value="0" min="0" step="0" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1" / name="cantidad">
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