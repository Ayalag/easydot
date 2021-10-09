<div class="header-container container-fluid">
    <div class="header-container__sidebar">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <div class="overlay"></div>
                <li>
                    <div tabindex="0" class="menu__item" href="#">autos
                        <ul class="menu__item--submenu">
                            <li class="submenu--item"><a href="">soat</a> </li>
                            <li class="submenu--item"><a href="">cobertura Completa</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div tabindex="0" class="menu__item" href="#">mascotas
                        <ul class="menu__item--submenu">
                            <li class="submenu--item"><a href="">seguro Veterinario</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div tabindex="0" class="menu__item" href="#">personas
                        <ul class="menu__item--submenu">
                            <li class="submenu--item"><a href="">ap + gastos médicos</a></li>
                            <li class="submenu--item"><a href="">ap + motos</a></li>
                            <li class="submenu--item"><a href="">seguro de vida</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div tabindex="0" class="menu__item" href="#">hogar
                        <ul class="menu__item--submenu">
                            <li class="submenu--item"><a href="">contenido del hogar</a></li>
                            <li class="submenu--item"><a href="">cobertura Completa</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div tabindex="0" class="menu__item" href="#">contactos
                        <ul class="menu__item--submenu">
                            <li class="submenu--item"><a href="">contacto easy.</a></li>
                            <li class="submenu--item"><a href="">contacto aseguradoras</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div tabindex="0" class="menu__item" href="#">Conoce easy.
                        <ul class="menu__item--submenu">
                            <li class="submenu--item"><a href="">reseñas easy.</a></li>
                            <li class="submenu--item"><a href="">compañías aliadas</a></li>
                            <li class="submenu--item"><a href="">preguntas frecuentes</a></li>
                            <li class="submenu--item"><a href="">términos y Condiciones</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="container container-crear__cuenta">
                        <div class="mb-2">
                            <span>Aún no tienes una cuenta¿?</span>
                        </div>
                        
                        <x-btn-main>
                            <x-a-link link='/register'>
                                Crear Cuenta
                            </x-a-link>
                        </x-btn-main>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-container__logo">
        <a href="/"><img src="public/includes/images/logos/easydot_276x143_formated.png" alt="easydot.com.pa"></a>
    </div>
</div>
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
    <x-btn-main>
        <x-a-link link='/dental'>
            Dental
        </x-a-link>
    </x-btn-main>
    <x-btn-main>
        <x-a-link link='/contactos'>
            Contactos
        </x-a-link>
    </x-btn-main>
</div>
