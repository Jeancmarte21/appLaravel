@extends('layouts.admin')
@section('title','Inicio Sesion')
@section('contenido')

<div class="row">
<div class="col-md-12">
<form class="form-horizontal" method="post" action="/inicio" data-toggle="validator">
  <fieldset>
  {{ csrf_field()}}

     <div class="login-box">
<div class="login-logo">
<img src="../img/logo.png" width="150" height="150" class="center-block img-responsive">
</div><!-- /.login-logo -->
<div class="login-box-body">




<form action="../../index2.html" method="post">
 <div class="form-group has-feedback">
   <input type="email" class="form-control" placeholder="Usuario">
   <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
 </div>
 <div class="form-group has-feedback">
   <input type="password" class="form-control" placeholder="Contraseña">
   <span class="glyphicon glyphicon-lock form-control-feedback"></span>
 </div>
 <div class="row">
   <div class="col-xs-8">
     <div class="checkbox icheck">

     </div>
   </div><!-- /.col -->
   <div class="col-xs-4">
     <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
   </div><!-- /.col -->
 </div>
</form>


<a href="#">Recuperar Contraseña</a><br>


</div><!-- /.login-box-body -->
</div><!-- /.login-box -->


</fieldset>
</form>
</div>
</div>

<script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>




@endsection
