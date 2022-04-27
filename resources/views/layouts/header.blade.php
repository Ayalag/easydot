<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <div class="sidebar-header">
                <div class="sidebar-brand">
                    {{-- <a href="/">Inicio</a> --}}
                </div>
            </div>
            <li class="dropdown">
                <a href="{{ route('home') }}">Inicio <span class="caret"></span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('autos-cobertura-autos') }}">Autos <span class="caret"></span></a>
                {{-- <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <div class="dropdown-header">Dropdown heading</div>
                    <li><a class="underline" href="/producto/motor/motor">soat</a></li>
                    <li><a class="underline" href="{{ route('autos-landing') }}">cobertura Completa</a></li>
        </ul> --}}
        </li>
        <li class="dropdown">
            <a href="{{ route('mascotas-cobertura') }}">Mascotas <span class="caret"></span></a>
            {{-- <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <div class="dropdown-header">Dropdown heading</div>
                    <li><a class="underline" href="/producto/mascotas/coberturas">seguro Veterinario</a></li>
                </ul> --}}
        </li>
        <li class="dropdown">
            <a href="{{ route('personas-cobertura') }}">Personas <span class="caret"></span></a>
            {{-- <ul class="dropdown-menu animated fadeInLeft" role="menu"> --}}
            {{-- <div class="dropdown-header">Dropdown heading</div> --}}
            {{-- <li><a class="underline" href="/producto/personas/er">ap + gastos médicos</a></li>
                    <li><a class="underline" href="/producto/personas/em">ap motos</a></li>
                    <li><a class="underline" href="/producto/personas/landing">seguro de vida</a></li> --}}
            {{-- </ul> --}}
        </li>
        <li class="dropdown">
            <a href="{{ route('hogar-cobertura') }}">Hogar <span class="caret"></span></a>
            {{-- <ul class="dropdown-menu animated fadeInLeft" role="menu"> --}}
            {{-- <div class="dropdown-header">Dropdown heading</div> --}}
            {{-- <li><a class="underline" href="/producto/hogar/hogar">contenido del hogar</a></li>
                    <li><a class="underline" href="producto/hogar/landing">cobertura Completa</a></li> --}}
            {{-- </ul> --}}
        </li>
        <li class="dropdown">
            <a href="{{ route('centro-de-ayuda') }}">Centro de ayuda <span class="caret"></span></a>
            {{-- <ul class="dropdown-menu animated fadeInLeft" role="menu"> --}}
            {{-- <div class="dropdown-header">Dropdown heading</div> --}}
            {{-- <li><a class="underline" href="/centro-de-ayuda">centro de ayuda</a></li> --}}
            {{-- <li><a class="underline" href="#">contactos de aseguradoras</a></li> --}}
            {{-- </ul> --}}
        </li>
        <li class="dropdown">
            <a href="{{ route('conoce-easy') }}">Conoce easy. <span class="caret"></span></a>
            {{-- <ul class="dropdown-menu animated fadeInLeft" role="menu"> --}}
            {{-- <div class="dropdown-header">Dropdown heading</div> --}}
            {{-- <li><a class="underline" href="/conoce-easy">reseña easy</a></li>
                    <li><a class="underline" href="/centro-de-ayuda#partners">compañías aliadas</a></li>
                    <li><a class="underline" href="/centro-de-ayuda#faq">preguntas frecuentes</a></li>
                    <li><a class="underline" href="/terminos-y-condiciones">términos y Condiciones</a></li>
                </ul> --}}
        </li>
        {{-- <li><a href="#followme">Follow me</a></li> --}}
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
    </div>


    <!-- /#page-content-wrapper -->

</div>
<div class="header-container__logo basic-drop-shadow d-flex justify-content-center">
    <a href="{{ route('home') }}"><img src="{{ asset('public/includes/images/logos/easydot_276x143_formated.png') }}"
            alt="easydot.com.pa"></a>

    @if (Route::has('login'))
    <div class="container-login">
        @auth
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->usuario }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile') }}">Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>
        </ul>
        @else
        <a href="{{ route('login') }}" class="underline">mi cuenta</a>
        @endauth
    </div>
    @endif
</div>


<!-- /#wrapper -->

<div class="menu-container container-fluid">
    <x-btn-main>
        <x-a-link link='/producto/motor/cobertura/auto'>
            autos
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/producto/mascotas/coberturas'>
            mascotas
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/producto/personas/cobertura'>
            personas
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/producto/hogar/cobertura'>
            hogar
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/producto/motor/cobertura/moto'>
            motos
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/producto/personas/dental'>
            dental
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/centro-de-ayuda'>
            centro de ayuda
        </x-a-link>
    </x-btn-main>
</div>
