<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SCRIPTS  -->
    <script src="https://kit.fontawesome.com/933e55e7ca.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- CSS, ICON -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel='shortcut icon' href="{{asset('img/favicon.ico')}}" type='image/x-icon'>
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg" style="background-color: #FBE0C9;"> -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid" id='navbar-options'>
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/favicon.ico')}}" alt="Asesoria" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/citas">Citas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                <li class="nav-item dropdown">
            </ul>
            <div class="d-flex">
                <div class="navbar-nav" id='user-options'>
                    @if(Route::has('login'))
                        @auth
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->nombre }}  {{ Auth::user()->tipo_usuario == 1 ? '| Administrador' : ''}}
                                <i class="fa-regular fa-user fa-xl"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @if(Auth::user()->tipo_usuario == 1)
                                <li><a class="dropdown-item" href="{{ url('/dashboard') }}" >Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                @endif
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li><a class="dropdown-item" href="{{route('logout')}}"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a></li>
                                </form>
                            </ul>
                        </li>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="fa-regular fa-user fa-xl"></i>
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
            </div>
        </div>
    </nav>

    @yield('contenido')

    <!-- Footer -->
    <div class="footer" style="padding-top: 20px">
    <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
        <span>Ponte en contacto con nosotros a traves de:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
        <a href="https://wa.me/524443510418" target="_blank" class="me-4 text-reset" style="text-decoration: none">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="" class="me-4 text-reset" style="text-decoration: none">
            <i class="fa-regular fa-envelope"></i>
        </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright
    </div>
    <!-- Copyright -->
    </footer>
    </div>
</body>
</html>
