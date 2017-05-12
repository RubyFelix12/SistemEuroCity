<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Volkswagen EuroCity</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{('Volkswagen EuroCity')}}
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Cerrar sesion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>

                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
   <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Panel de Administrador</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class=""><a href="{{ url('/home') }}">Bienvenida</a></li>
              <li><a href="{{url('registraruser')}}">Nuevo Admin.</a></li>
              <li><a href="{{url('consultarAdmin')}}">Baja Admin.</a></li>
              <li><a href="{{url('consultarClientes')}}">Consultar Clientes</a></li>


              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personalización<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Personalización del Sistema</li>
                  <li><a href="{{url('personalizacion')}}">Mostrar Evento</a></li>
                  <li><a href="{{url('mostrarEvento')}}">Editar y Eliminar Evento </a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Información<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
                  <li><a href="">Ayuda</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Paginas Volkswagen EuroCity</li>
                  <li><a href="http://www.vw-eurocity.com.mx/">VW por el Zapata</a></li>
                  <li><a href="http://www.vw.com.mx/">Volkswagen México Oficial </a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
  <div class="container">
        @yield('titulo')

        @yield('contenido')
    </div>
</div>
      <!-- Main component for a primary marketing message or call to action -->
      
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <p ALIGN=center>Derechos Reservados a Volkswagen EuroCity por el Zapata © 2017 </p>
        </div>
    </div>
</div>
    </div> <!-- /container -->

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    <script type="text/javascript">
  $(function() {
    $('#fecha_inicio_picker').datetimepicker({
      language: 'es-MX'
    });
    $('#fecha_fin_picker').datetimepicker({
      language: 'es-MX'
    });
  });
</script>
</body>
</html>