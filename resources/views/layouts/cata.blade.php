<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>VIDEOCLUB</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3c980e5417.js" crossorigin="anonymous"></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    * {
      margin: 0%;
      padding: 0%;
      transition: all 0.6s ease !important;
    }

    body {
      background-image: url('https://www.fondoshd.mx/wallpapers/resoluciones/14/silla-de-director-de-cine_1920x1080_797.jpg');
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 500px;
      transition-property: all;
      transition-duration: 0.6s;
      transition-timing-function: ease;
    }

    .title {
      font-family: 'Fugaz One', cursive;
    }

    nav {
      z-index: 100;
    }

    .card-header {
      z-index: 10;
    }

    .peli {
      /* background-image: url('https://media2.giphy.com/media/oaa24LIJQKNHy/giphy.gif'); */
      background-size: cover;
      background-size: 100% 100%;
      background-repeat: no-repeat;
      overflow: hidden;
    }

    img:hover,
    btn {
      opacity: 0.9;
      transform: scale(1.05);
      transition-property: all;
      transition-duration: 0.6s;
      transition-timing-function: ease-out;
      box-shadow: 1px 1px 5px black;
    }

    .navbar-brand {
      font-family: 'Fugaz One', cursive;
    }
  </style>

</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="https://media1.tenor.com/images/d7adf9cd08f1348ea3c4191c461e8a74/tenor.gif" alt="Logo" style="width:60px;">
          VIDEOCLUB
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{url("/")}}">INICIO</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url("/catalog")}}">CATALOGO</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{url("/catalog/create")}}">NUEVA PELICULA</a>
            </li>
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Acceso') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>

</html>
