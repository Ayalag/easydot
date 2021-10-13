<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <div class="sidebar-header">
                <div class="sidebar-brand">
                    {{-- <a href="#">Brand</a> --}}
                </div>
            </div>
            <li class="dropdown">
                <a href="#works" data-toggle="dropdown">autos <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    {{-- <div class="dropdown-header">Dropdown heading</div> --}}
                    <li><a class="underline" href="#">soat</a></li>
                    <li><a class="underline" href="#">cobertura Completa</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" data-toggle="dropdown">mascotas <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    {{-- <div class="dropdown-header">Dropdown heading</div> --}}
                    <li><a class="underline" href="#">seguro Veterinario</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" data-toggle="dropdown">personas <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    {{-- <div class="dropdown-header">Dropdown heading</div> --}}
                    <li><a class="underline" href="#">ap + gastos médicos</a></li>
                    <li><a class="underline" href="#">ap motos</a></li>
                    <li><a class="underline" href="#">seguro de vida</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" data-toggle="dropdown">hogar <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    {{-- <div class="dropdown-header">Dropdown heading</div> --}}
                    <li><a class="underline" href="#">contenido del hogar</a></li>
                    <li><a class="underline" href="#">cobertura Completa</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" data-toggle="dropdown">contactos <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    {{-- <div class="dropdown-header">Dropdown heading</div> --}}
                    <li><a class="underline" href="#">contacto easy.</a></li>
                    <li><a class="underline" href="#">contactos de aseguradoras</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#works" data-toggle="dropdown">Conoce easy. <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    {{-- <div class="dropdown-header">Dropdown heading</div> --}}
                    <li><a class="underline" href="#">reseña easy</a></li>
                    <li><a class="underline" href="#">compañías aliadas</a></li>
                    <li><a class="underline" href="#">preguntas frecuentes</a></li>
                    <li><a class="underline" href="#">términos y Condiciones</a></li>
                </ul>
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
<div class="header-container__logo">
    <a href="/"><img src="public/includes/images/logos/easydot_276x143_formated.png" alt="easydot.com.pa"></a>
</div>
<!-- /#wrapper -->

<div class="menu-container container-fluid">
    <x-btn-main>
        <x-a-link link='/autos'>
            Autos
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/mascotas'>
            Mascotas
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/persona'>
            Persona
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/hogar'>
            Hogar
        </x-a-link>
    </x-btn-main>
    {{-- <x-btn-main>
        <x-a-link link='/dental'>
            Dental
        </x-a-link>
    </x-btn-main> --}}
    <x-btn-main>
        <x-a-link link='/contactos'>
            Contactos
        </x-a-link>
    </x-btn-main>
</div>
