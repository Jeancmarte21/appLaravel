@extends (layouts.admin)
@section('title','Crear Usuario')
@section('contenido')

{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST'])  !!}

 <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
             
 
    <div class="row">
        <div class="col-md-12">
    <div class="login-box">
      <div class="login-logo">
       
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        
        <p class="login-box-msg">Registrar usuario</p>
        
        <img src="../img/logo.png" width="150" height="150" class="center-block img-responsive">



              <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Nombre usuario</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                </div>
              </div>
            </div>

<div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confirmar Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button type="button" class="btn btn-primary btn-lg btn-block login-button">Registrar</button>
            </div>
            <div class="login-register">
                    <a href="index.php">Login</a>
                 </div>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

        </div>
    </div>
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->



{!! Form::close() !!}


@endsection