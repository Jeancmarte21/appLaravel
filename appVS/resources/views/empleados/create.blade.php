@extends('layouts.admin')
@section('title','Crear Empleado')
@section('contenido')


      
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
             
 
    <div class="row">
        <div class="col-md-12">
    
                <form class="form-horizontal" method="post">
                    <fieldset>

                  
                        <form method = "post" action = "{{route ('empleados.store') }}">
                                          {{ csrf_field()}}
                       <!-- <input type="hidden" name="_method" value="put"> -->
       <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card"></i></span>
                            <div class="col-md-8">
                                <input id="empleado-cedula" name="cedula" type="text" placeholder="Cedula" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="empleado-nombre" name="nombre" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="empleado-apellido" name="apellidos" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="empleado-telefono" name="telefono" type="text" placeholder="Telefono" class="form-control">
                            </div>
                        </div>

                       
   <form method="post">

      <div class="form-group"> <!-- Date input -->
        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
       
        <div class="col-md-8">
        
<input placeholder="Fecha nacimiento" class="form-control" type="text" onfocus= '(this.type="date")' id="empleado-fechanac" name="fecha_nacimiento"> 

      </div>
      </div>
    
     </form>
     

     <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-globe bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="empleado-direccion" name="direccion" type="text" placeholder="Direccion" class="form-control">
                            </div>
                        </div>

    <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                            </div>
                          </div>
                   
                   
                   
                   
                   
                    </fieldset>
                </form>
           
        </div>
    </div>
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
   

@endsection