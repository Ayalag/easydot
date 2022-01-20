@extends('layouts.app')

@section('content')
    <div class="container-fluid container-productos pt-5">
        <div class="row justify-content-center align-items-center">
            <div
                class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-5 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center mr-2 py-2">
                <input id="auto" type="radio" name="motor" checked>
                <label for="auto" class="clickable"><span class="checked-box">&#10004;</span></label>
                <div>
                    <img src="{{ asset('/public/includes/images/icons8-car-64.png') }}" alt="easydot_automoviles">
                </div>
                <div>
                    <span class="product_text_1">autos</span>
                </div>
            </div>
            <div
                class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-5 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center ml-2 py-2">
                <input id="moto" type="radio" name="motor">
                <label for="moto" class="clickable"><span class="checked-box">&#10004;</span></label>
                <div>
                    <img src="{{ asset('/public/includes/images/icons8-motorcycle-64.png') }}" alt="easydot_automoviles">
                </div>
                <div>
                    <span class="product_text_1">motos</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pt-3 mb-3 car-options">
            <div
                class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center mr-2 py-2">
                <input id="soat" type="radio" name="categoria" checked>
                <label for="soat" class="clickable"><span class="checked-box">&#10004;</span></label>
                <span class="product_text_2">soat</span>
            </div>
            <div
                class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center mr-2 py-2">
                <input id="basico" type="radio" name="categoria">
                <label for="basico" class="clickable"><span class="checked-box">&#10004;</span></label>
                <span class="product_text_2">básico</span>
            </div>
            <div
                class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center py-2">
                <input id="estandar" type="radio" name="categoria">
                <label for="estandar" class="clickable"><span class="checked-box">&#10004;</span></label>
                <span class="product_text_2">éstandar</span>
            </div>
        </div>
        <div class="row justify-content-center pt-3 mb-3 moto-options hide">
            <div
                class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center mr-2 py-2">
                <input id="soat-motos" type="radio" name="categoria" checked>
                <label for="soat-motos" class="clickable"><span class="checked-box">&#10004;</span></label>
                <span class="product_text_2">soat</span>
            </div>
            <div
                class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center mr-2 py-2">
                <input id="basico-motos" type="radio" name="categoria">
                <label for="basico-motos" class="clickable"><span class="checked-box">&#10004;</span></label>
                <span class="product_text_2">básico</span>
            </div>
            <div
                class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center py-2">
                <input id="estandar-motos" type="radio" name="categoria">
                <label for="estandar-motos" class="clickable"><span class="checked-box">&#10004;</span></label>
                <span class="product_text_2">éstandar</span>
            </div>
        </div>
        <div class="container container-autos pb-5">
            <div class="soat">
                <div class="soat-slider">
                    {{-- AQUI VA LA ITERACION DE SOAT  CARROS --}}
                    @isset($motores)
                        @foreach ($motores as $motor)
                            @if ($motor->Motor_Tipo === 1 and $motor->Motor_Tipo_Seguro === 1)
                                {!! $motor->html !!}
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
            <div class="basico hide">
                <div class="soat-slider">
                    {{-- AQUI VA LA ITERACION DE BASICO  CARROS --}}
                    @isset($motores)
                        @foreach ($motores as $motor)
                            @if ($motor->Motor_Tipo === 1 and $motor->Motor_Tipo_Seguro === 2)
                                {!! $motor->html !!}
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
            <div class="estandar hide">
                <div class="soat-slider">
                    {{-- AQUI VA LA ITERACION DE ESTANDART  CARROS --}}
                    @isset($motores)
                        @foreach ($motores as $motor)
                            @if ($motor->Motor_Tipo === 1 and $motor->Motor_Tipo_Seguro === 3)
                                {!! $motor->html !!}
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
        {{-- MOTOS --}}
        <div class="container container-motos hide pb-5">
            <div class="soat-motos">
                <div class="soat-slider-motor">
                    {{-- AQUI VA LA ITERACION DE SOAT  MOTOS --}}
                    @isset($motores)
                        @foreach ($motores as $motor)
                            @if ($motor->Motor_Tipo === 2 and $motor->Motor_Tipo_Seguro === 1)
                                {!! $motor->html !!}
                            @endif
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
        <div class="basico-motos hide pb-5">
            <div class="soat-slider-motor">
                {{-- AQUI VA LA ITERACION DE BASICO  MOTOS --}}
                @isset($motores)
                    @foreach ($motores as $motor)
                        @if ($motor->Motor_Tipo === 2 and $motor->Motor_Tipo_Seguro === 2)
                            {!! $motor->html !!}
                        @endif
                    @endforeach
                @endisset
            </div>
        </div>
        <div class="estandar-motos hide pb-5">
            <div class="soat-slider-motor">
                {{-- AQUI VA LA ITERACION DE ESTANDART  MOTOS --}}
                @isset($motores)
                    @foreach ($motores as $motor)
                        @if ($motor->Motor_Tipo === 2 and $motor->Motor_Tipo_Seguro === 3)
                            {!! $motor->html !!}
                        @endif
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function() {

            let soat = document.querySelector('.soat');
            let soatMotos = document.querySelector('.soat-motos');

            let basico = document.querySelector('.basico');
            let basicoMotos = document.querySelector('.basico-motos');

            let estandar = document.querySelector('.estandar');
            let estandarMotos = document.querySelector('.estandar-motos');

            let containerAutos = document.querySelector('.container-autos');
            let carOptions = document.querySelector('.car-options');

            let containerMotos = document.querySelector('.container-motos');
            let motoOptions = document.querySelector('.moto-options');

            $('input[id="moto"]').change(function() {
                if ($(containerMotos).hasClass('hide')) {
                    $(containerMotos).removeClass('hide');
                } else {
                    $(containerMotos).removeClass('hide');
                }
                if ($(motoOptions).hasClass('hide')) {
                    $(motoOptions).removeClass('hide');
                } else {
                    $(motoOptions).removeClass('hide');
                }
                $(containerAutos).addClass("hide");
                $(carOptions).addClass("hide");
                $('.soat-slider-motor').get(0).slick.setPosition()
            });

            $('input[id="soat-motos"]').change(function() {
                if ($(soatMotos).hasClass('hide')) {
                    $(soatMotos).removeClass('hide');
                } else {
                    $(soatMotos).removeClass('hide');
                }
                $(basicoMotos).addClass("hide");
                $(estandarMotos).addClass("hide");
                $('.soat-slider-motor').get(0).slick.setPosition()
            });
            $('input[id="basico-motos"]').change(function() {
                if ($(basicoMotos).hasClass('hide')) {
                    $(basicoMotos).removeClass('hide');
                } else {
                    $(basicoMotos).removeClass('hide');
                }
                $(soatMotos).addClass("hide");
                $(estandarMotos).addClass("hide");
                $('.soat-slider-motor').get(1).slick.setPosition()
            });
            $('input[id="estandar-motos"]').change(function() {
                if ($(estandarMotos).hasClass('hide')) {
                    $(estandarMotos).removeClass('hide');
                } else {
                    $(estandarMotos).removeClass('hide');
                }
                $(soatMotos).addClass("hide");
                $(basicoMotos).addClass("hide");
                $('.soat-slider-motor').get(2).slick.setPosition()
            });

            $('input[id="auto"]').change(function() {
                if ($(containerAutos).hasClass('hide')) {
                    $(containerAutos).removeClass('hide');
                } else {
                    $(containerAutos).removeClass('hide');
                }
                if ($(carOptions).hasClass('hide')) {
                    $(carOptions).removeClass('hide');
                } else {
                    $(carOptions).removeClass('hide');
                }
                $(containerMotos).addClass("hide");
                $(motoOptions).addClass("hide");
                $('.soat-slider').get(0).slick.setPosition()
            });

            $('input[id="soat"]').change(function() {
                if ($(soat).hasClass('hide')) {
                    $(soat).removeClass('hide');
                } else {
                    $(soat).removeClass('hide');
                }
                $(basico).addClass("hide");
                $(estandar).addClass("hide");
            });
            $('input[id="basico"]').change(function() {
                if ($(basico).hasClass('hide')) {
                    $(basico).removeClass('hide');
                } else {
                    $(basico).removeClass('hide');
                }
                $(soat).addClass("hide");
                $(estandar).addClass("hide");
                $('.soat-slider').get(1).slick.setPosition()
            });
            $('input[id="estandar"]').change(function() {
                if ($(estandar).hasClass('hide')) {
                    $(estandar).removeClass('hide');
                } else {
                    $(estandar).removeClass('hide');
                }
                $(soat).addClass("hide");
                $(basico).addClass("hide");
                $('.soat-slider').get(2).slick.setPosition()
            });
        });
    </script>

@endsection
