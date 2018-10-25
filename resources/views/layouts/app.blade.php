<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body class="h-100">

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
    <div id="app" class="h-100">
      <b-navbar toggleable type="light" variant="light">
        <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>

        <b-navbar-brand  href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </b-navbar-brand>

        <b-collapse is-nav id="nav_text_collapse">
          <b-navbar-nav class="ml-auto">
              @guest
          <b-nav-item href="{{ route('login') }}">Iniciar sesión</b-nav-item>
          <b-nav-item href="{{ route('register') }}">Registrate</b-nav-item>
          @else

          <b-nav-item-dropdown text="User" right >
            <b-dropdown-item href="#" @click="logout">
              Cerrar sesion
            </b-dropdown-item>
          </b-nav-item-dropdown>

          @endguest
        </b-navbar-nav>
        </b-collapse>
      </b-navbar>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
