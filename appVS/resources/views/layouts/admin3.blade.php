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
  <body class="skin-blue sidebar-mini">


      <header class="main-header">
        <a href="/home" class="logo">

          <span class="logo-lg"><b>Victor Sinclair</b></span>
        </a>

          <nav class="navbar navbar-static-top navbar-inverse" role="navigation">

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




       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div>

        <!-- Main content -->
        <section>



                @include('partials.errors')
                @include('partials.success')

		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->




        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->


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
