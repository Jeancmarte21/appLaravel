@extends (layouts.admin)
@section('title','Crear Usuario')
@section('contenido')


<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/admin/users">
      <fieldset>
      {{ csrf_field()}}
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
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Username" required/>
                </div>
              </div>
            </div>

<div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
                </div>
              </div>
            </div>

            <!--<div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confirmar Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" required/>
                </div>
              </div>
            </div> -->

            <div class="form-group">
        <label class="col-xs-3 control-label">Tipo Usuario</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="type" id="type" required>
                <option value="">Seleccione</option>
                <option value="">Administrador</option>
                <option value="">Miembro</option>
            </select>
        </div>
    </div>


                 <div class="form-group">
                   <div class="col-md-12 text-center">
                     <button type="submit" class="btn btn-primary btn-lg ">Registrar</button>
                   </div>
                 </div>

                 <div class="login-register">
                         <a href="">Login</a>
                      </div>

            </form>
               </div>
               </div>






@endsection
