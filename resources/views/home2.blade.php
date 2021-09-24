@extends('layouts.app')


<div class="header-container container-fluid">
    <div class="header-container__sidebar">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle" style="height: 250px">
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
            </ul>
        </div>
    </div>
    <div class="header-container__logo">
        <a href="/"><img src="public/includes/images/logos/easydot_207x107.png" alt="easydot.com.pa"></a>
    </div>
</div>
<hr class="hr-text">
<div class="menu-container container-fluid">
    <x-btn-main link="/autos">AUTOS</x-btn-main>
    <x-btn-main link="/mascotas">MASCOTAS</x-btn-main>
    <x-btn-main link="/personas">PERSONAS</x-btn-main>
    <x-btn-main link="/hogar">HOGAR</x-btn-main>
    <x-btn-main link="/dental">DENTAL</x-btn-main>
    <x-btn-main link="/contactos">CONTACTOS</x-btn-main>
</div>


<div class="header-container container-fluid">
    <div class="header-container__sidebar" style="height: 124px">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle" style="height: 597px">
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
            </ul>
        </div>
    </div>
    <div class="header-container__logo">
        <a href="/"><img src="public/includes/images/logos/easydot_276x143.png" alt="easydot.com.pa"></a>
    </div>
</div>
<hr class="hr-text">
<div class="menu-container container-fluid">
    <x-btn-main link="/autos">AUTOS</x-btn-main>
    <x-btn-main link="/mascotas">MASCOTAS</x-btn-main>
    <x-btn-main link="/personas">PERSONAS</x-btn-main>
    <x-btn-main link="/hogar">HOGAR</x-btn-main>
    <x-btn-main link="/dental">DENTAL</x-btn-main>
    <x-btn-main link="/contactos">CONTACTOS</x-btn-main>
</div>

