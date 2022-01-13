@extends('layouts.app')

@section('content')
    <div class="container-fluid container-productos pt-5">
        <div class="container container-autos pb-5">
            <div class="soat">
                <div class="soat-slider">
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/panamasonrie_color.png') }}"
                                        alt="">
                                </div>
                                <div class="container">
                                    <div class="card-subtitle">Smile Care</div>
                                    <p class="card-text underline pt-2 mb-3 easyBlue600">Incluye</p>
                                    <div class="card-detail">
                                        <div class="row no-gutters mb-3">
                                            <div class="col-12">
                                                <p>1 Consulta dental</p> <br>
                                                <p>2 Radiografías periapicales</p> <br>
                                                <p>1 Limpieza dental</p> <br>
                                            </div>
                                            {{-- <div class="col-3 justify-content-end easyBlue600">
                                                7,500
                                            </div> --}}
                                        </div>
                                        {{-- <div class="row no-gutters">
                                            <div class="col-9">
                                                Gastos médicos
                                            </div>
                                            <div class="col-3 justify-content-end easyBlue600">
                                                1,500
                                            </div>
                                        </div> --}}
                                    </div>
                                    <hr>
                                    <div class="card-list__items">
                                        <ul>
                                            <li>Este es un paquete diseñado para el cuidado integral de nuestra sonrisa, de
                                                la mano de odontólogos expertos de la clínica dental Panamá Sonríe.</li>
                                            <li>Obtén descuentos adicionales en servicios de la clinica dental Panamá
                                                sonríe.</li>
                                        </ul>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                Precio regular <span style="text-decoration: line-through">$130.00</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 90.00
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-PANAMA-SONRIE.pdf') }}" target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                    <div>
                        <div class="card card-container__insurance">
                            <div class="card-body">
                                <p class="card-title d-flex justify-content-end">
                                    <img src="{{ asset('/public/includes/images/logos-aliados/color/panamasonrie_color.png') }}"
                                        alt="">
                                </p>
                                <div class="container">
                                    <div class="card-subtitle">Bright Smile</div>
                                    <p class="card-text underline pt-2 mb-2 easyBlue600">Incluye</p>
                                    <div class="card-detail">
                                        <div class="card-list__items">
                                            <ul>
                                                <li>Blanqueamiento dental PHILIPS Zoom WhiteSpeed</li>
                                                <li>1 Consulta dental</li>
                                                <li>1 Limpieza dental</li>
                                                <li>2 Radiografías periapicales</li>
                                                <li>Descuentos adicionales en servicios de la clínica dental Panamá Sonríe.
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="row no-gutters mb-3">
                                            <div class="col-12">
                                                <p>Blanque 8 tonos en 45min.</p>
                                                <p>Tratamiento con poca o sin nada de sensibilidad</p>
                                                <p>Tecnologia avanzada activada por luz LED</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grouping_price">
                                        <div class="row mt-4 annuity">
                                            <div class="col-12 text-muted text-center">
                                                Precio regular <span style="text-decoration: line-through">$765.00</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3 price">
                                            <div class="col-12 text-center">
                                                $ 475.00
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
                        <a href="{{ asset('/public/includes/polizas/CONDICIONES-PANAMA-SONRIE.pdf') }}" target="_blank">
                            <p class="underline condicion_poliza">condiciones de la póliza</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
