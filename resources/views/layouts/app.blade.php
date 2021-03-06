<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/slick.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome-extension.min.css')  }}">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Doofi') }}  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('todos')}}">Todos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="">Categorias</a>
                <div class="dropdown-menu" x-placement="bottom-start">
                    <a class="dropdown-item" href="{{route('bar')}}"><i class="fas fa-wine-glass-alt"></i> Bares</a>
                    <a class="dropdown-item" href="{{route('lanchonete')}}"><i class="fas fa-store"></i> Lanchonetes</a>
                    <a class="dropdown-item" href="{{route('pizzaria')}}"><i class="fas fa-chart-pie"></i> Pizzarias</a>
                    <a class="dropdown-item" href="{{route('pub')}}"><i class="fas fa-store-alt"></i> Pub's</a>
                    <a class="dropdown-item" href="{{route('restaurante')}}"><i class="fas fa-utensils"></i> Restaurantes</a>
                    <a class="dropdown-item" href="{{route('sorveteria')}}"><img src="{{asset('img/ice-cream.svg')}}" id="iceCream"> Sorveterias</a>
                </div>
            </li>
            @guest
                <ul style="margin-left: 870px" class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registre-se') }}</a>
                    @endif
                </li>
            @else
                <li style="margin-left: 940px" class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('perfil.index', Auth::user()->id)}}">Perfil</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                </ul>
        @endguest
        </ul>
    </div>
</nav>

            @yield('content')

</body>
</html>
