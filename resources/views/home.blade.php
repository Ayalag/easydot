@extends('layouts.app')

@section('monster-banner')
<!-- Slider -->
<div class="wrap-slick1">
    <div class="slick1">
        <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance_final.png')">
            <div class="container container-slider">
                <div class="layer-slick1">
                    <span class="slider-text-24-blue">adquiere tu póliza  <br> de AUTO desde</span>
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
                    <span class="slider-text-24-blue">adquiere tu póliza  <br> de PERSONA desde</span>
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
</section>
@endsection


@section('content')
<div class="drops-categories container-home">

    <x-btn-categories link="/autos">
        AUTOS
    </x-btn-categories>
    <x-btn-categories link="/mascotas">
        MASCOTAS
    </x-btn-categories>
    <x-btn-categories link="/personas">
        PERSONAS
    </x-btn-categories>
    <x-btn-categories link="/hogar">
        HOGAR
    </x-btn-categories>

</div>

<div class="container container-steps-to-buy">
    <span>Ejemplo de proceso de compra en pasos</span>
</div>
@endsection
