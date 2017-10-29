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
<legend class="text-center header">Registrar Máquina</legend>
                   <form method = "get" action = "{{route ('maquinas.store') }}">
      {{ csrf_field()}}
                  
                    <div class="form-group"> 
                 <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="text"  id="example-date-input">
        </div>
    </div>
                  
                  
              <!--    <div class="form-group">
        <span class="col-xs-3 control-label"><label for="full_name_id" class="control-label">Descripción</label></span>
        <div class="col-xs-5">
            <textarea name="description" class="form-control" rows="5"></textarea>
        </div>
    </div>
            -->      
                     <div class="form-group">
        <label class="col-xs-3 control-label">Trabaja por:</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                <option value="">Producción</option>
               <option value="">Salario Fijo</option>
            </select>
        </div>
    </div>
                  
				
            </div>
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