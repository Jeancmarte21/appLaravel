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






  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/home" class="logo">
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
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>

      @else



                <li class="dropdown user user-menu">

                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                   {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">


                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"> Cerrar Sesion
                          </a>
                          <li class="user-footer">

                   <div class="pull-right">
                     <a href="#" class="btn btn-default active btn-xs btn-flat">Cancelar</a>
                   </div>
                 </li>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
                </li>
    @endguest
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
              <a href="/home">
              <i class="fa fa-tachometer" aria-hidden="true"></i> <span>Tablero</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span> Gestión Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="{{ route('register') }}"><i class="fa fa-circle-o"></i> Registrar</a></li>

                <li><a href="/users"><i class="fa fa-circle-o"></i> Usuarios</a></li>
              </ul>
            </li>

            <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Gestión Empleados</span>
               <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">

              <li><a href="/empleados"><i class="fa fa-circle-o"></i> Empleados</a></li>

            </ul>
          </li>



            <li class="treeview">
              <a href="#">
                <i class="fa fa-truck" aria-hidden="true"></i>
                <span>Gestión Suplidores</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="/suplidores"><i class="fa fa-circle-o"></i> Suplidores</a></li>

              </ul>
            </li>

            <li class="treeview">
           <a href="#">
            <i class="fa fa-cog" aria-hidden="true"></i>
             <span>Gestión Maquinas</span>
              <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="treeview-menu">


             <li><a href="/maquinas"><i class="fa fa-circle-o"></i> Maquinas</a></li>

           </ul>
         </li>



              <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Gestión Materia Prima</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

               <li><a href="/materiasPrimas"><i class="fa fa-circle-o"></i> Materia prima</a></li>
                <li><a href="/entradas"><i class="fa fa-circle-o"></i> Entrada</a></li>
                 <li><a href="/salidas/"><i class="fa fa-circle-o"></i> Salida</a></li>


              </ul>
            </li>


               <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i>
                <span>Producción</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="/cigarros"><i class="fa fa-circle-o"></i> Cigarros</a></li>
                <li><a href="/configuraciones"><i class="fa fa-circle-o"></i> Configuraciones</a></li>
                <li><a href="/jornadas"><i class="fa fa-circle-o"></i> Jornada</a></li>
                <li><a href="/produccionesmaquinas"><i class="fa fa-circle-o"></i> Producción maquina</a></li>



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
               <li><a href="/nomina"><i class="fa fa-circle-o"></i>Nomina</a></li>
               <li><a href="/inventarios"><i class="fa fa-circle-o"></i> Inventario</a></li>
               <li><a href="/rendimiento"><i class="fa fa-circle-o"></i> Rendimiento tabaco</a></li>
               <li><a href="/costoUnitario"><i class="fa fa-circle-o"></i> Costo unitario</a></li>

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


                
                @include('partials.errors')
                @include('partials.success')
                @include('partials.error')
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->




        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">



        <p ALIGN=center ><strong>Copyright &copy; Victor Sinclair.All rights reserved.</strong></p>
      </footer>


    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset ('js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{asset('js/Chart.bundle.min.js')}}"></script>


  </body>
</html>
