@extends('layouts.app')

@section('content')
    <div class="container-fluid container-productos pt-5">
        <div class="container container-autos pb-5">
            <div class="soat">
                <div class="soat-slider">
                    <div>
                        <div class="card card-container__insurance erm">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/nacional_color.png') }}"
                                        alt="">
                                </div>
                                <div class="container">
                                    <div class="card-subtitle">Mascotas Plan Básico</div>
                                    <div class="row p-2">
                                        <div class="col-sm">
                                            <span class="card-text underline easyBlue600">coberturas</span>
                                        </div>
                                        <div class="col-sm text-right">
                                            Hasta
                                        </div>
                                    </div>
                                    <div class="card-detail">
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos medicos por accidente
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                650.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Robo o extravio de mascota
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                1,500.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-8">
                                                Responsabilidad Civil
                                            </div>
                                            <div class="col-4 text-right easyBlue600">
                                                5,000.00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                Vigencia por 1 año / 1 pago anual
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 57.75
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
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/nacional_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">Mascotas Plan Ultra</div>
                                    <div class="row p-2">
                                        <div class="col-sm">
                                            <span class="card-text underline pt-2 mb-2 easyBlue600">coberturas</span>
                                        </div>
                                        <div class="col-sm text-right">
                                            Hasta
                                        </div>
                                    </div>
                                    <div class="card-detail">
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos por accidente
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                650.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                robo o extravio de mascota
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                1,500.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-8">
                                                Responsabilidad Civil
                                            </div>
                                            <div class="col-4 text-right easyBlue600">
                                                5,000.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Asistencia legal
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                1 evento
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-8">
                                                Consulta veterinaria telefónica
                                            </div>
                                            <div class="col-4 text-right easyBlue600">
                                                Ilimitado
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Vacunación <span class="h6">(Mayores de 6 meses)</span>
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                50.00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                Vigencia por 1 año / 3 cuotas mensuales
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 48.30
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
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/nacional_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">Mascotas Plan Ultra Plus</div>
                                    <div class="row p-2">
                                        <div class="col-sm">
                                            <span class="card-text underline pt-2 mb-2 easyBlue600">coberturas</span>
                                        </div>
                                        <div class="col-sm text-right">
                                            Hasta
                                        </div>
                                    </div>
                                    <div class="card-detail">
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos por accidente
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                650.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                robo o extravio de mascota
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                1,500.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-8">
                                                Responsabilidad Civil
                                            </div>
                                            <div class="col-4 text-right easyBlue600">
                                                5,000.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Asistencia legal
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                1 evento
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-8">
                                                Consulta veterinaria telefónica
                                            </div>
                                            <div class="col-4 text-right easyBlue600">
                                                Ilimitado
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Vacunación <span class="h6">(Mayores de 6 meses)</span>
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                50.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-9">
                                                Esterilización <span class="h6">(si compromete su salud)</span>
                                            </div>
                                            <div class="col-3 text-right easyBlue600">
                                                150.00
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-8">
                                                Extracción dental por accidente
                                            </div>
                                            <div class="col-4 text-right easyBlue600">
                                                Ilimitado
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                Vigencia por 1 año / 6 cuotas mensuales
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 38.85
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
