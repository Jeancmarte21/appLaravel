@extends('layouts.admin')
@section('title','Crear Entrada')
@section('contenido')

 <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
             
 
    <div class="row">
        <div class="col-md-12">
    
                <form class="form-horizontal" method="post">
                    <fieldset>

                    	 <form method = "get" action = "{{route ('entradas.store') }}">
      {{ csrf_field()}} 

                
                <div class="form-group">
        <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                
            </select>
        </div>
    </div>
                 
                 
                  <div class="form-group"> 
                 <label class="col-xs-3 control-label">Fecha</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="date"  id="example-date-input">
        </div>
    </div>
                  
          
                  
                  
                   <div class="form-group">
        <label class="col-xs-3 control-label">Precio</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
                <input type="number" class="form-control" name="price" />
                <span class="input-group-addon">$</span>
            </div>
        </div>
    </div>
                  
                     <div class="form-group">
        <label class="col-xs-3 control-label">Cantidad entrante</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
               
                <input type="number" class="form-control" name="price" min="0" data-number-to-fixed="2" data-number-stepfactor="100" />
                <span class="input-group-addon">lbs</span>
				
            </div>
        </div>
    </div>
                  
                     <div class="form-group">
        <label class="col-xs-3 control-label">Suplidor</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                
            </select>
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