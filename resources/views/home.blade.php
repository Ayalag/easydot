@extends('layouts.app')

@section('monster-banner')
<!-- Slider -->
<div class="wrap-slick1">
    <div class="slick1">
        <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance1.jpg')">
        </div>

        <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance2.jpg')">
        </div>

        <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance3.jpg')">
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
