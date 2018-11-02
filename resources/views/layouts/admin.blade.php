<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Minimized Sidebar | Dashboard UI Kit</title>
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

<div class="o-page__sidebar is-minimized js-page-sidebar">
    <div class="c-sidebar is-minimized">
        <a class="c-sidebar__brand" href="#">
            <img class="c-sidebar__brand-img" src="img/logo.png" alt="Logo">
            <span class="c-sidebar__brand-text">Dashboard</span>
        </a>
        <ul class="c-sidebar__list">

            <li class="c-sidebar__item">
                <a class="c-sidebar__link is-active" href="home-overview.html">
                            <span class="c-sidebar__icon">
                                <i class="fa fa-home"></i>
                            </span>Overview
                </a>
            </li>

            <li class="c-sidebar__item">
                <a class="c-sidebar__link" href="performance.html">
                            <span class="c-sidebar__icon">
                                <i class="fa fa-tachometer"></i>
                            </span>Performance
                </a>
            </li>

            <li class="c-sidebar__item">
                <a class="c-sidebar__link" href="analytics.html">
                            <span class="c-sidebar__icon">
                                <i class="fa fa-line-chart"></i>
                            </span>Analytics
                </a>
            </li>

            <li class="c-sidebar__item">
                <a class="c-sidebar__link" target="_blank" href="index.html">
                            <span class="c-sidebar__icon">
                                <i class="fa fa-rocket"></i>
                            </span>Landing
                </a>
            </li>

            <li class="c-sidebar__item">
                <a class="c-sidebar__link" target="_blank" href="projects.html">
                            <span class="c-sidebar__icon">
                                <i class="fa fa-table"></i>
                            </span>Projects
                </a>
            </li>
        </ul>

    </div><!-- // .c-sidebar -->
</div><!-- // .o-page__sidebar -->
<main class="o-page__content">
    @yield('content')
</main>
</body>
</html>
