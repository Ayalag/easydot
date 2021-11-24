@extends('layouts.app')

@section('content')
<div class="container-fluid container-productos pt-5">
    <div class="row justify-content-center align-items-center">
        <div
            class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-5 shadow-lg bg-white rounded-lg d-flex justify-content-around align-items-center mr-2 py-2">
            <input id="auto" type="radio" name="motor" checked>
            <label for="auto" class="clickable"><span class="checked-box">&#10004;</span></label>
            <div>
                <img src="public/includes/images/icons8-car-64.png" alt="easydot_automoviles">
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
                <img src="public/includes/images/icons8-motorcycle-64.png" alt="easydot_automoviles">
            </div>
            <div>
                <span class="product_text_1">motos</span>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-3 mb-3">
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
    <div class="container pb-5">
        <div class="soat">
            <div class="soat-slider">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/sura_color.png" alt="">
                        </div>
                        <div class="container">
                            <div class="card-subtitle">soat</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 103.39
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                        <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/mapfre_color.png" alt="">
                        </p>
                        <div class="container">
                            <div class="card-subtitle">soat</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 155.00
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                        <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/Bac_credomatic_logo.png" alt="">
                        </p>
                        <div class="container">
                            <div class="card-subtitle">soat</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 135.00
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                        <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="basico hide">
            <div class="soat-slider">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/sura_color.png" alt="">
                        </div>
                        <div class="container">
                            <div class="card-subtitle">básico</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 103.39
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                        <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/mapfre_color.png" alt="">
                        </p>
                        <div class="container">
                            <div class="card-subtitle">básico</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 155.00
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                        <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/Bac_credomatic_logo.png" alt="">
                        </p>
                        <div class="container">
                            <div class="card-subtitle">básico</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 135.00
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                        <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="estandar hide">
            <div class="soat-slider">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/sura_color.png" alt="">
                        </div>
                        <div class="container">
                            <div class="card-subtitle">estándar</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 103.39
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                        <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/mapfre_color.png" alt="">
                        </p>
                        <div class="container">
                            <div class="card-subtitle">estándar</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 155.00
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                        <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-title d-flex justify-content-end">
                            <img src="public/includes/images/logos-aliados/color/Bac_credomatic_logo.png" alt="">
                        </p>
                        <div class="container">
                            <div class="card-subtitle">estándar</div>
                            <p class="card-text underline mb-3">cobertura por accidente</p>
                            <div class="card-detail">
                                <div class="row no-gutters mb-3">
                                    <div class="col-9">
                                        Lesiones corporales
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        10,000
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-9">
                                        Daños a la propiedad ajena
                                    </div>
                                    <div class="col-3 justify-content-end">
                                        5,000
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-list__items">
                                <ul>
                                    <li>Revisado vehicular gratuito</li>
                                    <li>3 servicios de grúa al año</li>
                                    <li>Servicios de asistencia vial</li>
                                    <li>Ambulancia</li>
                                    <li>Descuento en trámite de placa</li>
                                </ul>
                            </div>
                            <div class="row mt-4 annuity">
                                <div class="col-12 text-muted text-center">
                                    anual
                                </div>
                            </div>
                            <div class="row mb-3 price">
                                <div class="col-12 text-center">
                                    $ 135.00
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <button class="btn-comprar">
                                       <a href="/registro">comprar</a> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function () {

        var soat = document.querySelector('.soat');
        var basico = document.querySelector('.basico');
        var estandar = document.querySelector('.estandar');

        $('input[id="soat"]').change(function () {
            if($(soat).hasClass('hide')){
                $(soat).removeClass('hide');
            }else{
                $(soat).removeClass('hide');
            }
            $(basico).addClass("hide");
            $(estandar).addClass("hide");
        });
        $('input[id="basico"]').change(function () {
            if($(basico).hasClass('hide')){
                $(basico).removeClass('hide');
            }else{
                $(basico).removeClass('hide');
            }
            $(soat).addClass("hide");
            $(estandar).addClass("hide");
            $('.soat-slider').get(1).slick.setPosition()
        });
        $('input[id="estandar"]').change(function () {
            if($(estandar).hasClass('hide')){
                $(estandar).removeClass('hide');
            }else{
                $(estandar).removeClass('hide');
            }
            $(soat).addClass("hide");
            $(basico).addClass("hide");
            $('.soat-slider').get(2).slick.setPosition()
        });
    });
</script> 

@endsection
