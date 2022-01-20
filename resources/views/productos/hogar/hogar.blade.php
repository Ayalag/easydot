@extends('layouts.app')

@section('content')
    <div class="container container-hogar p-3">
        <div class="container-hogar__title ">
            <p class="underline easyBlue800 p-3">hogar</p>
        </div>
        <div class="container container-hogar__subtitle shadow-lg bg-white rounded">
            <p>contenido del hogar</p>
        </div>
        <div class="container-hogar__subtitle-2 p-4">
            Asegura tus pertenencias del hogar como: muebles, electrodomésticos,<br> equipos electrónicos, entre
            otros.
        </div>
    </div>
    <div class="container-fluid container-productos">
        <div class="container container-autos pb-5">
            <div class="soat">
                <div class="soat-slider">
                    <div>
                        <div class="card card-container__insurance erm">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/sura_color.png') }}"
                                        alt="">
                                </div>
                                <div class="container">
                                    <div class="card-subtitle">Contenido del hogar</div>
                                    <div class="card-detail">
                                        <div class="row no-gutters text-center m-3">
                                            <div class="col easyRose800 fnt-size-3">
                                                5,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Cobertura por incendio.</li>
                                            <li>Daños por agua e inundación</li>
                                            <li>Equipos electrónicos, por derrame de líquidos, golpes o robo</li>
                                            <li>Bienes refrigerados por avería de la nevera</li>
                                            <li>Asistencia en plomería, cristalería y electricidad</li>
                                            <li>Asistencia por emergencia médica en el hogar</li>
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
                                                $ 26.25
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
                        {{-- <a href="{{ asset('/public/includes/polizas/SURA-CONDICIONES-GENERALES-PERSONAS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a> --}}
                    </div>
                    <div>
                        <div class="card card-container__insurance erm">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/sura_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">Contenido del hogar</div>
                                    <div class="card-detail">
                                        <div class="row no-gutters text-center m-3">
                                            <div class="col easyRose800 fnt-size-3">
                                                10,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Cobertura por incendio.</li>
                                            <li>Daños por agua e inundación</li>
                                            <li>Equipos electrónicos, por derrame de líquidos, golpes o robo</li>
                                            <li>Bienes refrigerados por avería de la nevera</li>
                                            <li>Asistencia en plomería, cristalería y electricidad</li>
                                            <li>Asistencia por emergencia médica en el hogar</li>
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
                                                $ 52.50
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
                        {{-- <a href="{{ asset('/public/includes/polizas/SURA-CONDICIONES-GENERALES-PERSONAS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a> --}}
                    </div>
                    <div>
                        <div class="card card-container__insurance erm">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/optima_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">Contenido del hogar</div>
                                    <div class="card-detail">
                                        <div class="row no-gutters text-center m-3">
                                            <div class="col easyRose800 fnt-size-3">
                                                10,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Cobertura por incendio.</li>
                                            <li>Daños por agua e inundación</li>
                                            <li>Equipos electrónicos, por derrame de líquidos, golpes o robo</li>
                                            <li>Bienes refrigerados por avería de la nevera</li>
                                            <li>Asistencia en plomería, cristalería y electricidad</li>
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
                                                $ 00.00
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
                        {{-- <a href="{{ asset('/public/includes/polizas/SURA-CONDICIONES-GENERALES-PERSONAS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a> --}}
                    </div>
                    <div>
                        <div class="card card-container__insurance erm">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end pb-2">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/mapfre_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">Contenido del hogar</div>
                                    <div class="card-detail">
                                        <div class="row no-gutters text-center m-3">
                                            <div class="col easyRose800 fnt-size-3">
                                                10,000
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Cobertura por incendio.</li>
                                            <li>Daños por agua e inundación</li>
                                            <li>Equipos electrónicos, por derrame de líquidos, golpes o robo</li>
                                            <li>Bienes refrigerados por avería de la nevera</li>
                                            <li>Asistencia en plomería, cristalería y electricidad</li>
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
                                                $ 42.40
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
                        {{-- <a href="{{ asset('/public/includes/polizas/SURA-CONDICIONES-GENERALES-PERSONAS.pdf') }}"
                            target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
