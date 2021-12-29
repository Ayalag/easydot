@extends('layouts.app')

@section('content')
    <div class="container container-conoce__easy p-5">
        <div class="container container-conocenos__title">
            <span class="underline">conoce un poco más</span>
        </div>
        <div class="container-conocenos__subtitle">
            <p>sobre nosotros</p>
        </div>

        <div class="container-conocenos__paragraph p-5">
            Somos una empresa panameña <br>
            que busca poder ofrecerte las mejores <br> soluciones del mercado para tu <br>
            bienestar y el de tus seres queridos
        </div>
    </div>
    <div class="container-fluid forma1">
        <img src="{{ asset('/public/includes/images/conocenos/forma1.png') }}" alt="">
    </div>
    <div class="container container-nuestro__propositos__creencias">
        <div class="container-nuestro__proposito">
            <div class="container-nuestro__proposito__letter p-5">
                Nuestro principal propósito es lograr que cada vez más personas y familias en Panamá se sientan tranquilas y
                seguras al contar el respaldo de las soluciones que aquí
                encontrarás.
                <br>
                <br>
                <br>
                <span>Carlos Alberto De Gracia</span>
                <span class="underline">CEO</span>
            </div>
        </div>
        <div class="container-nuestra_creencia p-5">
            <img src="{{ asset('/public/includes/images/conocenos/creemos-en.png') }}" alt="">
        </div>
    </div>
    <div class="container-fluid forma2">
        <img src="{{ asset('/public/includes/images/conocenos/forma1.png') }}" alt="">
    </div>
    <div class="container container-legenda p-5">
        <div class="container-legenda__paragraph">
            <p>Sabemos que hay soluciones y productos que tradicionalmente han sido algo complicados, pero hemos trabajado
                de la mano con empresas aliadas para que estos sean mucho más sencillos, fáciles de entender y de obtener.
                <br>
                <br>
                Es por eso, que también trabajamos de la mano con Bartoli Asesores de Seguros, quienes ponen a tu
                disposición soluciones de seguros y te asesoran en todo lo referente a ellos.
                <br>
                <br>
                Ana y Miguel cuentan con una amplia trayectoria de más de 15 años en la industria aseguradora
            </p>
        </div>

        <div class="container-legenda__bartoli">
            <div class="container-legend__bartoli__info">
                <div class="container-legend__bartoli__info-img pt-4">
                    <img src="{{ asset('/public/includes/images/centro-de-ayuda/bartoli.png') }}" alt="">
                </div>
                <div class="container_info__owners pt-2">
                    <div class="container_info__owners-1">
                        <span>Ana María Flores</span>
                        <br>
                        <span>Licencia 8510</span>
                    </div>
                    <br>
                    <div class="container_info__owners-2">
                        <span>Miguel A. Bartolí</span>
                        <br>
                        <span>Licencia 8286</span>
                    </div>
                    <br>
                    Corredores de seguros
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-categorias p-5">
        <div class="container-categorias__title">
            <span class="underline">las</span> soluciones que ofrecemos han sido <br> agrupadas en categorías para que
            sea <br>
            más <span style="color:#ff0180 ">easy</span><span style="color:#009ee2">.</span> para ti encontrarlas
        </div>
    </div>
    <div class="container box-container__categorias__conocenos mb-5">
        <div class="wrap">
            <div class="box ">
                <div class="box-category-logo auto">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/autos2.png') }}" alt="">
                </div>
                <div class="box-category__title">
                    <h1>autos</h1>
                </div>
                <div class="box-category__button">
                    <a href="{{ route('userconfirmation') }}">ver planes</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-category-logo hogar">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/hogar2.png') }}" alt="">
                </div>
                <div class="box-category__title">
                    <h1>hogar</h1>
                </div>
                <div class="box-category__button">
                    <a href="{{ route('hogar-landing') }}">ver planes</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-category-logo persona">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/personas2.png') }}"
                        alt="">
                </div>
                <div class="box-category__title">
                    <h1>personas</h1>
                </div>
                <div class="box-category__button">
                    <a href="{{ route('personas-landing') }}">ver planes</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-category-logo mascota">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/mascotas2.png') }}"
                        alt="">
                </div>
                <div class="box-category__title">
                    <h1>mascota</h1>
                </div>
                <div class="box-category__button">
                    <a href="/persona">ver planes</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-footer">
        <div class="container container-form">
            {{-- Hola mundo --}}
            <x-contact-us />
        </div>
    </div>

@endsection
