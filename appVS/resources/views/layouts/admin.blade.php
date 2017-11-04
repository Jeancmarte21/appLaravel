<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','Default')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
    
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">

    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <link rel="shortcut icon" href="{{ asset('css/estilos.css') }}">


  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>V</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Victor Sinclair</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->  
            </ul>
          </div>

        </nav>
      </header>
     

<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <li>
              <a href="/inicios">
                <i class="fa fa-home"></i> <span>Inico</span>
              </a>
            </li>
          
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Gestion suplidores</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li><a href="/suplidores/create"><i class="fa fa-circle-o"></i> Registrar</a></li>
                <li><a href="/suplidores"><i class="fa fa-circle-o"></i> Suplidores</a></li>
                
              </ul>
            </li>
            
              <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Gestion materia prima</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               
               <li><a href="/materiasPrimas/create"><i class="fa fa-circle-o"></i> Registrar</a></li>
                <li><a href="/entradas/create"><i class="fa fa-circle-o"></i> Entrada</a></li>
                 <li><a href="/salidas/"><i class="fa fa-circle-o"></i> Salida</a></li>
                 <li><a href="/inventarios"><i class="fa fa-circle-o"></i> Inventario</a></li>
                 <li><a href="/materiasPrimas"><i class="fa fa-circle-o"></i> Materia prima</a></li>
              </ul>
            </li>
            
              <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Gestion empleados</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li><a href="/empleados/create"><i class="fa fa-circle-o"></i> Registrar</a></li>
                <li><a href="/empleados"><i class="fa fa-circle-o"></i> Empleados</a></li>
                
              </ul>
            </li>
           
            
               <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i>
                <span>Producción</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li><a href="/cigarros/create"><i class="fa fa-circle-o"></i> Registrar cigarro</a></li>
               <li><a href="/maquinas/create"><i class="fa fa-circle-o"></i> Registrar maquina</a></li>
                <li><a href="/configuraciones/create"><i class="fa fa-circle-o"></i> Configurar produccion</a></li>
                <li><a href="/produccionesmaquinas/create"><i class="fa fa-circle-o"></i> Produccion maquina</a></li>
                <li><a href="/jornadas/create"><i class="fa fa-circle-o"></i> Jornada</a></li>
                <li><a href="/cigarros"><i class="fa fa-circle-o"></i> Cigarros</a></li>
              </ul>
            </li>
            
            
           
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span> Gestion usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/configuracion/usuario"><i class="fa fa-circle-o"></i> Registrar</a></li>
                <li><a href="/configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
              </ul>
            </li>
            
              <li class="treeview">
              <a href="#">
                <i class="fa fa-print"></i>
                <span>Reportes</span>
               <!-- <small class="label pull-right bg-green">xlsx</small>-->
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Rendimiento tabaco</a></li>
               <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Costo unitario</a></li>
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Reporte nomina</a></li>
              </ul>
            </li>
            
          
           
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">  <center>@yield('title','Default')</center></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool"><a href="{{ url()->previous() }}">Atras</a><i class=""></i></button>

                   <!-- <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->

                    
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                @include('partials.errors')
                @include('partials.success')
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2017-2020.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
