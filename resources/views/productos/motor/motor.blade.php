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
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/sura_color.png') }}"
                                        alt="">
                                </div>
                                <div class="container">
                                    <div class="card-subtitle">soat</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
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
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                            <li>Descuento en trámite de placa</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
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
                        </div>
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-SURA-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/optima_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">soat</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                5,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>3 servicios de grúa al año</li>
                                            <li>3 asistencias vial por año</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 99.75
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-OPTIMA-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/mapfre_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">soat</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                5,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Grúa, hasta 150.00 por año.</li>
                                            <li>2 Servicios de asistencia vial</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 111.00
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-MAPFRE-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>

                </div>
            </div>
            <div class="basico hide">
                <div class="soat-slider">
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('public/includes/images/logos-aliados/color/sura_color.png') }}"
                                        alt="">
                                </div>
                                <div class="container">
                                    <div class="card-subtitle">básico</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                5,000
                                            </div>
                                        </div>
                                        <p> </p>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                2,500
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Revisado vehicular gratuito</li>
                                            <li>3 servicios de grúa al año</li>
                                            <li>Servicios de asistencia vial</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                            <li>Descuento en trámite de placa</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 111.32
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-SURA-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('public/includes/images/logos-aliados/color/optima_color.png') }}"
                                        alt="">
                                </div>
                                <div class="container">
                                    <div class="card-subtitle">básico</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                5,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                2,500
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>3 servicios de grúa al año</li>
                                            <li>3 asistencias vial por año</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 111.26
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-OPTIMA-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end" style="margin-top: 13px">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/mapfre_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">básico</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                5,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                2,500
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Grúa, hasta 150.00 por año</li>
                                            <li>2 asistencias vial</li>
                                            <li>Servicios de asistencia vial</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                        </ul>
                                    </div>

                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 148.40
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-MAPFRE-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="estandar hide">
                <div class="soat-slider">
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('public/includes/images/logos-aliados/color/sura_color.png') }}"
                                        alt="">
                                </div>
                                <div class="container">
                                    <div class="card-subtitle">estándar</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                20,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Revisado vehicular gratuito</li>
                                            <li>3 servicios de grúa al año</li>
                                            <li>Servicios de asistencia vial</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                            <li>Descuento en trámite de placa</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 189.14
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-SURA-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>

                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/optima_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">estándar</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                20,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>3 servicios de grúa al año</li>
                                            <li>3 asistencias vial por año</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 164.98
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-OPTIMA-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end" style="margin-top: 13px">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/mapfre_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">estándar</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                20,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Grúa, hasta 150.00 por año. al año</li>
                                            <li>2 asistencias vial</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 208.24
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-MAPFRE-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- MOTOS --}}
        <div class="container container-motos hide pb-5">
            <div class="soat-motos">
                <div class="soat-slider-motor">
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/sura_color.png') }}"
                                        alt="">
                                </div>
                                <div class="container">
                                    <div class="card-subtitle">soat</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                5,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Descuento en revisado vehicular</li>
                                            <li>3 servicios de grúa al año</li>
                                            <li>Servicios de asistencia vial</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                            <li>Descuento para servicios de motos</li>
                                            <li>Descuento en trámite de placa</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 67.88
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-SURA-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/mapfre_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">soat</div>
                                    <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-9">
                                                Lesiones corporales
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                10,000
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Daños a la propiedad ajena
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                5,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Grúa, hasta 150.00 por año.</li>
                                            <li>2 Servicios de asistencia vial</li>
                                            <li>Servicio de ambulancia</li>
                                            <li>Asistencia legal</li>
                                            <li>Asistencia funeraria hasta 1,500.00</li>
                                            <li>Dr. en minutos</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 65.00
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-MAPFRE-AUTOS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="basico-motos hide pb-5">
            <div class="soat-slider-motor">
                <div>
                    <div class="card card-container__insurance">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-end">
                                <img src="{{ asset('public/includes/images/logos-aliados/color/sura_color.png') }}"
                                    alt="">
                            </div>
                            <div class="container">
                                <div class="card-subtitle">básico</div>
                                <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                <div class="card-detail">
                                    <div class="row no-gutters mb-3">
                                        <div class="col-9">
                                            Lesiones corporales
                                        </div>
                                        <div class="col-3 justify-content-end easyBlue600">
                                            10,000
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-9">
                                            Daños a la propiedad ajena
                                        </div>
                                        <div class="col-3 justify-content-end easyBlue600">
                                            5,000
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-9">
                                            Gastos médicos
                                        </div>
                                        <div class="col-3 justify-content-end easyBlue600">
                                            2,000
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-list__items">
                                    <ul>
                                        <li>Descuento en revisado vehicular</li>
                                        <li>3 servicios de grúa al año</li>
                                        <li>Servicios de asistencia vial</li>
                                        <li>Servicio de ambulancia</li>
                                        <li>Descuentos en servicios de motos</li>
                                        <li>Descuento en trámite de placa</li>
                                    </ul>
                                </div>
                                <div class="grouping_price">
                                    <div class="row mt-4 annuity">
                                        <div class="col-12 text-muted text-center">
                                            anual
                                        </div>
                                    </div>
                                    <div class="row mb-3 price">
                                        <div class="col-12 text-center">
                                            $ 75.18
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
                    <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-SURA-AUTOS.pdf') }}"
                        target="_blank">
                        <p class="underline condicion_poliza">condiciones de la póliza</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="estandar-motos hide pb-5">
            <div class="soat-slider-motor">
                <div>
                    <div class="card card-container__insurance">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-end">
                                <img src="{{ asset('public/includes/images/logos-aliados/color/sura_color.png') }}"
                                    alt="">
                            </div>
                            <div class="container">
                                <div class="card-subtitle">estándar</div>
                                <p class="card-text underline mb-3 easyBlue600">cobertura por accidente</p>
                                <div class="card-detail">
                                    <div class="row no-gutters mb-3">
                                        <div class="col-9">
                                            Lesiones corporales
                                        </div>
                                        <div class="col-3 justify-content-end easyBlue600">
                                            10,000
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-9">
                                            Daños a la propiedad ajena
                                        </div>
                                        <div class="col-3 justify-content-end easyBlue600">
                                            5,000
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-9">
                                            Gastos médicos
                                        </div>
                                        <div class="col-3 justify-content-end easyBlue600">
                                            4,000
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-list__items">
                                    <ul>
                                        <li>Descuentos en revisado vehicular</li>
                                        <li>3 servicios de grúa al año</li>
                                        <li>Servicios de asistencia vial</li>
                                        <li>Servicio de ambulancia</li>
                                        <li>Descuentos en servicios de motos</li>
                                        <li>Descuento en trámite de placa</li>
                                    </ul>
                                </div>
                                <div class="grouping_price">
                                    <div class="row mt-4 annuity">
                                        <div class="col-12 text-muted text-center">
                                            anual
                                        </div>
                                    </div>
                                    <div class="row mb-3 price">
                                        <div class="col-12 text-center">
                                            $ 107.71
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
                    <a href="{{ asset('/public/includes/polizas/CONDICIONES-GENERALES-SURA-AUTOS.pdf') }}"
                        target="_blank">
                        <p class="underline condicion_poliza">condiciones de la póliza</p>
                    </a>
                </div>
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
