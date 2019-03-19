<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>¡Bienvenidos!</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    @yield('header')
</head>
<body style="padding-top: 0px;padding-bottom: 0px;">
    <nav class="navbar navbar-expand-md BgColorBrown">
        <a class="navbar-brand" href="#">
            <img src="{{asset("img/logo75x150.png")}}" alt="Logo Country Club"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <h3 class="ColorWhite">Residencias desde <span class="display-4 ColorWhite">$9MDP</span></h3>
        </div>
    </nav>
        @yield('body')
    <footer class="footer" style="margin-top: 1em;">
        <div class="container text-center">
            Teléfonos: 999 278 17 70 / 999 133 45 29
        </div>
    </footer>
    <script type="text/javascript" src="{{asset("js/app.js")}}"></script>
@yield('scripts')
</body>
</html>