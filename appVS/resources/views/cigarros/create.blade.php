@extends('layouts.admin')

@section('contenido')

 <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
     
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
             
 
    <div class="row">
        <div class="col-md-12">
    
               
                <form class="form-horizontal" method="post">
                    <fieldset>

                   <legend class="text-center header">Registrar cigarro</legend>
              
                  <form method = "get" action = "{{route ('cigarros.store') }}">
      {{ csrf_field()}} 	
                   	
                   	    <div class="form-group">
        <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                <option value="">Roughneck Honey</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
            </select>
        </div>
    </div>
                   	
                    <div class="form-group">
        <label class="col-xs-3 control-label">Tipo cigarro</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                <option value="">Fumas</option>
                <option value="">Vitolas</option>
            </select>
        </div>
    </div>
                  
         
                
                    <div class="form-group">
        <label class="col-xs-3 control-label">Saborizante</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Seleccione</option>
                 <option value="">Free Aromatic</option>
                  <option value="">Cherry</option>
                <option value="">Grape</option>
                 <option value="">Honey Bourbon</option>
                <option value="">Honey</option>
                <option value="">Honey Berry</option>
                 <option value="">Natural</option>
                
                
            </select>
        </div>
    </div>
                   
  
                   
                    </fieldset>
                    <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                            </div>
                        </div>
                    
                    <form>
           
        </div>
    </div>
         
          </div><!-- /.row -->
        </section><!-- /.content -->
     <!-- /.content-wrapper -->
      <!--Fin-Contenido-->


      @endsection