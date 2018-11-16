<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Doofi | Administrador</title>
    <meta name="description" content="Dashboard UI Kit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/template.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
</head>
<body class="o-page">

<div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">
        <a class="c-sidebar__brand" href="#">
            <img class="c-sidebar__brand-img" src="#" alt="Logo">
            {{__('Bem-Vindo ')}}
        </a>

        <h4 class="c-sidebar__title">{{__('Principal')}}</h4>
        <ul class="c-sidebar__list">

            <li class="c-sidebar__item">
                <a class="c-sidebar__link   " href="{{ route('admin.index') }}">
                    <i class="fa fa-home u-mr-xsmall"></i>{{__('Início')}}
                </a>
            </li>

            <li class="c-sidebar__item">
                <a class="c-sidebar__link" href="#">
                    <i class="fa fa-credit-card u-mr-xsmall"></i>{{__('Gerenciar Usuários')}}
                </a>
            </li>  <li class="c-sidebar__item">
                <a class="c-sidebar__link" href="{{route('estab.index')}}">
                    <i class="fa fa-barcode u-mr-xsmall"></i>{{__('Gerenciar Estabelecimentos')}}
                </a>
            </li>

        </ul>

        <h4 class="c-sidebar__title">{{__('Configurações')}}</h4>
        <ul class="c-sidebar__list">
            <li class="c-sidebar__item">
                <a class="c-sidebar__link" href="#">
                    <i class="fa fa-shopping-cart u-mr-xsmall"></i>{{__('Add Usuários')}}
                </a>
            </li>

        </ul>




        <li class="c-sidebar__item">
            <a class="c-sidebar__link"href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-in u-mr-xsmall"></i>{{__('Sair')}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>
        </li>

        </ul>

    </div><!-- // .c-sidebar -->
</div>

<!-- // .o-page__sidebar -->
<main class="o-page__content">
    @yield('content')
</main>
</body>
</html>
