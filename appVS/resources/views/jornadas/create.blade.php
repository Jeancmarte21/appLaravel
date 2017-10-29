@extends('layouts.admin')

@section('contenido')

 
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
             
 
    <div class="row">
        <div class="col-md-12">
    
                <form class="form-horizontal" method="post">
                    <fieldset>

                   <legend class="text-center header">Jornada</legend>
                   <form method = "get" action = "{{route ('jornadas.store') }}">
      {{ csrf_field()}}
                   <div class="form-group">
        <label class="col-xs-3 control-label">Fecha</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="date"  id="example-date-input">
        </div>
    </div>
                              <div class="form-group">
        <label class="col-xs-3 control-label">Maquina</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                <option value="">Arenco</option>
              <option value="">AMF</option>
            </select>
        </div>
    </div>
                 
                <div class="form-group">
        <label class="col-xs-3 control-label">Empleado</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                <option value="">...</option>
              <option value="">...</option>
            </select>
        </div>
    </div>
                 
                           
                                                   
                   
                     <div class="form-group">
        <label class="col-xs-3 control-label">Incentivo</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
               
                <input type="number" class="form-control" name="price" min="0"/>
                <span class="input-group-addon">$</span>
				
            </div>
        </div>
    </div>
            
                       
                              
           
         <div class="form-group">
        <label class="col-xs-3 control-label">Horas Extras</label>
        <div class="col-xs-5 selectContainer">
        <input class="form-control" type="number" value="0" min="0" step="0" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1" />
			 </div>
						</div>
                    <div class="form-group">
        <label class="col-xs-3 control-label">Comida</label>
        <div class="col-xs-5 selectContainer">
        <input class="form-control" type="number" value="0" min="0" step="0" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1" />
			 </div>
						</div>
                     
                  
                   
                    </fieldset>
                    <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                            </div>
                        </div>
                       
                </form>
           
        </div>
    </div>
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->

@endsection