@extends('layouts.admin')
@section('title','Crear Materia Prima')
@section('contenido')

 <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
             
 
    <div class="row">
        <div class="col-md-12">
    
                <form class="form-horizontal" method="post">
                    <fieldset>

                  
            <form method = "get" action = "{{route ('materiasPrimas.store') }}">
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
        <label class="col-xs-3 control-label">Categoria</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                <option value="">Tabaco</option>
               <option value="">Saborizante</option>
               <option value="">Pega</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">% Aumento de Peso Humedecido</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
               
                <input type="number" class="form-control" name="price" min="0" data-number-to-fixed="2" data-number-stepfactor="100" />
                <span class="input-group-addon">%</span>
        
            </div>
        </div>
        </div>
                  
             
                  
                   <div class="form-group">
        <label class="col-xs-3 control-label">Existencia minima</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
               
                <input type="number" class="form-control" name="price" min="0" data-number-to-fixed="2" data-number-stepfactor="100" />
                <span class="input-group-addon">lbs</span>
				
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