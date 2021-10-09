@extends('layouts.app')

@section('monster-banner')
<!-- Slider -->
<div class="wrap-slick1">
    <div class="slick1">
        <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance_final.png')">
            <div class="container container-slider">
                <div class="layer-slick1">
                    <span class="slider-text-24-blue">adquiere tu póliza <br> de AUTO desde</span>
                </div>

                <div class="layer-slick1 slider-text-16-rose">
                    <div>
                        autos 111.93 / año
                    </div>
                    <div>
                        motos 75.18 / año
                    </div>
                </div>
                <x-btn-main class='fntw-800'>
                    <x-a-link class="slider_btn__comprar" link='/autos'>
                        Comprar Ahora
                    </x-a-link>
                </x-btn-main>
            </div>
        </div>

        <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance_final.png')">
            <div class="container container-slider">
                <div class="layer-slick1">
                    <span class="slider-text-24-blue">adquiere tu póliza <br> de PERSONA desde</span>
                </div>

                <div class="layer-slick1 slider-text-16-rose">
                    <div>
                        basico 175.00 / año
                    </div>
                    <div>
                        completa 275.00 / año
                    </div>
                </div>
                <x-btn-main class='fntw-800'>
                    <x-a-link class="slider_btn__comprar" link='/persona'>
                        Comprar Ahora
                    </x-a-link>
                </x-btn-main>
            </div>
        </div>

        <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance_final.png')">
            <div class="container container-slider">
                <div class="layer-slick1">
                    <span class="slider-text-24-blue">adquiere tu póliza <br> de HOGAR desde</span>
                </div>

                <div class="layer-slick1 slider-text-16-rose">
                    <div>
                        basico 325.93 / año
                    </div>
                    <div>
                        completa 4255.18 / año
                    </div>
                </div>
                <x-btn-main class='fntw-800'>
                    <x-a-link class="slider_btn__comprar" link='/hogar'>
                        Comprar Ahora
                    </x-a-link>
                </x-btn-main>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container box-container mb-5">
    <div class="box-container__title">
        <p class="underline">conoce las increíbles opciones que</p>
        <p>tenemos para ti</p>
    </div>
    <div class="wrap">
        <div class="box ">
            <div class="box-category__logo">
                <img class="categories_logo" src="{{ asset('/public/includes/images/autos.png') }}" alt="">
            </div>
            <h1>autos</h1>
            <x-btn-card-categories>
                <x-a-link link='/autos'>
                    ver planes
                </x-a-link>
            </x-btn-card-categories>
        </div>
        <div class="box ">
            <div class="box-category__logo">
                <img class="categories_logo" src="{{ asset('/public/includes/images/hogar.png') }}" alt="">
            </div>
            <h1>hogar</h1>
            <x-btn-card-categories>
                <x-a-link link='/hogar'>
                    ver planes
                </x-a-link>
            </x-btn-card-categories>
        </div>
        <div class="box ">
            <div class="box-category__logo">
                <img class="categories_logo" src="{{ asset('/public/includes/images/personas.png') }}" alt="">
            </div>
            <h1>personas</h1>
            <x-btn-card-categories>
                <x-a-link link='/personas'>
                    ver planes
                </x-a-link>
            </x-btn-card-categories>
        </div>
        <div class="box ">
            <div class="box-category__logo">
                <img class="categories_logo" src="{{ asset('/public/includes/images/mascotas.png') }}" alt="" style="">
            </div>
            <h1>mascotas</h1>
            <x-btn-card-categories>
                <x-a-link link='/mascotas'>
                    ver planes
                </x-a-link>
            </x-btn-card-categories>
        </div>
    </div>
</div>

<div class="container step-to-buy mb-5">
    <div class="step-to-buy__title">
        <p>¡compra súper <span>easy</span>¡</p>
        <p>en un instante, fácil y rápido en</p>
        <p>tan solo 3 pasos.</p>
    </div>
    <div class="step-to-buy-image">
        <div class="step-to-buy__image1">
            <img src="{{ asset('/public/includes/images/iphone-mascotas.png') }}" alt="">
        </div>
        <div class="container-steps">
            <div class="container-step__one">
                <div class="step-one-to-buy pr-2">1</div>
                <div class="step-one-letter">
                    <p>Selecciona la categoria de seguros que</p>
                    <p>buscas y elige tu opcion favorita.</p>
                </div>
            </div>
            <div class="container-step__two">
                <div class="step-two pr-2">2</div>
                <div class="step-two-letter">
                    <p>Ingresa tus datos y los del</p>
                    <p>seguro que seleccionaste.</p>
                </div>
            </div>
            <div class="container-step__three">
                <div class="step-three pr-2">3</div>
                <div class="step-three-letter">
                    <p>Realiza el pago y listo, estarás</p>
                    <p>recibiendo el certificado de la</p>
                    <p>póliza en tu correo electronico</p>
                </div>
            </div>
            <div class="container-step__four">
                <div class="step-four-letter">
                    <p>súper <span>eeeasy</span> !!</p>
                </div>
            </div>
        </div>
        <div class="step-to-buy__image2">
            <img src="{{ asset('/public/includes/images/iphone.png') }}" alt="">
        </div>
    </div>
</div>

<div class="container container-aliados shadow-lg bg-white mb-5">
    <div class="container_aliados__title p-3">
        <p class="underline">trabajamos y estamos respaldados por las</p>
        <p>mejores compañias del mercado panameño</p>
    </div>
    <div class="row pb-2">
        <div class="col-sm text-right my-auto">
            <img src="{{ asset('/public/includes/images/logos-aliados/sura.png') }}" alt="Sura">
        </div>
        <div class="col-sm my-auto">
            <img src="{{ asset('/public/includes/images/logos-aliados/mapfre.png') }}" alt="Mapfre">
        </div>
        <div class="col-sm text-left">
            <img src="{{ asset('/public/includes/images/logos-aliados/sonrie.png') }}" alt="Mapfre">
        </div>
      </div>
      <div class="row pb-3">
        <div class="col-sm text-right">
            <img src="{{ asset('/public/includes/images/logos-aliados/bac.png') }}" alt="Bac">
        </div>
        <div class="col-sm text-left">
            <img src="{{ asset('/public/includes/images/logos-aliados/bg.png') }}" alt="Bac">
        </div>
      </div>
</div>


<div class="container container-comments pb-5">
    <div class="container-comments__title">
        <p class="underline">algunos comentarios sobre <span>easy.</span></p>
        <p>¿y tú qué opinas?</p>
    </div>
</div>
@endsection
