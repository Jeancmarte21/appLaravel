@extends('layouts.admin')
@section('title','Crear Maquina')
@section('contenido')

  <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/empleados">
      <fieldset>
      {{ csrf_field()}}
                    <div class="form-group"> 
                 <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="text"  id="example-date-input" name="nombre">
        </div>
    </div>
                  
                
                     <div class="form-group"> <!--Cambiar por radio Botton-->
        <label class="col-xs-3 control-label">Pago por:</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="pago">
                <option value="">Seleccione</option>
                <option value="">Producción</option>
               <option value="">Salario Fijo</option>
            </select>
        </div>
    </div>
                  
				
            </div>
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