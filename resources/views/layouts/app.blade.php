<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
<body style="font-family: 'Nunito', sans-serif;">
    <div id="app">
        <nav>
            <div class="nav-wrapper light-blue lighten-1">
                <div class="container">
                    <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name') }}</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-align-justify"></i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        @guest
                            <li><a class="" href="{{ route('login') }}">{{ __('Masuk') }}</a></li>
                            @if (Route::has('register'))
                                <li><a class="" href="{{ route('register') }}">{{ __('Daftar') }}</a></li>
                            @endif
                            @else
                            <li><a href="{{ route('test.dashboard') }}">{{ Auth::user()->name }}</a></li>
                            <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">{{ __('Keluar') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            @guest
            <li><a class="" href="{{ route('login') }}">{{ __('Masuk') }}</a></li>
            @if (Route::has('register'))
            <li><a class="" href="{{ route('register') }}">{{ __('Daftar') }}</a></li>
            @endif
            @else
            <li><a href="{{ route('test.dashboard') }}">{{ Auth::user()->name }}</a></li>
            <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    href="{{ route('logout') }}">{{ __('Keluar') }}</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                @method('POST')
            </form>
            @endguest
        </ul>
        <main class="">
            @yield('content')
        </main>
    </div>
    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        @stack('javascript')
    </script>
    <script>
        M.AutoInit();
        $('.sidenav').sidenav();
    </script>
    <script>
        console.log('%cDeveloped by: -Bismantaka Aldila- ', 'color: purple; font-style: italic; font-weight: bold; background-color: white;')
    </script>
</body>
</html>
