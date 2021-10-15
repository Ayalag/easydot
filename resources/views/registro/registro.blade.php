@extends('layouts.app')

@section('content')

<div class="container stepper">
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col-9 text-center">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-5"></div>
        <div class="col-6 text-center">
            <div class="registro-datos__title">
                <p class="underline">datos personales</p>
            </div>
        </div>
    </div>
</div>
<div class="container container-registro mb-5">
    <div class="container product-card-selected">
        <div class="card shadow">
            <div class="card-body">
                <div class="card-title d-flex justify-content-end">
                    <img src="public/includes/images/logos-aliados/color/sura_color.png" alt="">
                </div>
                <div class="container">
                    <div class="card-subtitle__poliza">soat</div>
                    <p class="card-text underline mb-3 detail-selected">cobertura por accidente</p>
                    <div class="card-detail">
                        <div class="row no-gutters mb-3">
                            <div class="col-9">
                                Lesiosnes corporales
                            </div>
                            <div class="col-3 justify-content-end detail-selected">
                                10,000
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-9">
                                Daños a la propiedad ajena
                            </div>
                            <div class="col-3 justify-content-end detail-selected">
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
                    <div class="row mb-1 detail-selected">
                        <div class="col-12 text-center">
                            <p class="underline">condiciones de la póliza</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form>
        <div class="container-fluid container-registro-datos shadow-lg ">
            <div class="p-4">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombres">nombres</label>
                        <input type="text" class="form-control" id="nombres" placeholder="nombres">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellidos">apellidos</label>
                        <input type="text" class="form-control" id="apellidos" placeholder="apellidos">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="col-2 form-check form-check-inline">
                        <label class="form-check-label pr-2" for="inlineRadio1">cedula</label>
                        <input class="form-check-input" type="radio" name="identificacion" id="cedula" value="option1">
                    </div>
                    <div class="col-3 form-check form-check-inline">
                        <label class="form-check-label mr-2" for="inlineRadio1">pasaporte</label>
                        <input class="form-check-input" type="radio" name="identificacion" id="pasaporte"
                            value="option1">
                    </div>
                    <div class="col-4"><label for="birthday">fecha de nacimiento</label></div>
                    <div class="col-2 text-center"><label for="genero">género</label></div>
                </div>
                <div class="form-row">
                    <div class="col-5 form-group">
                        <input type="text" class="form-control" id="identificacion" placeholder="identificacion">
                    </div>
                    <div class="col-4 d-flex">
                        <input type="number" class="form-control ml-4" id="day" placeholder="dd">
                        <input type="number" class="form-control" id="month" placeholder="mm">
                        <input type="number" class="form-control" id="year" placeholder="aa">
                    </div>
                    <div class="col-2 form-check text-center">
                        <label class="form-check-label mr-4 h4" for="">m</label>
                        <input class="form-check-input" type="radio" name="genero" id="hombre" value="option1">
                    </div>
                    <div class="col-1 form-check">
                        <label class="form-check-label mr-4 h4" for="">f</label>
                        <input class="form-check-input" type="radio" name="genero" id="mujer" value="option1">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2 text-center">
                        <label for="eCivil">estado civil</label>
                        <input type="text" class="form-control" id="eCivil" placeholder="">
                    </div>
                    <div class="form-group col-md-6 text-center">
                        <h3>foto de cédula o pasaporte</h3>
                        <div class="input-group input-file" name="upload">
                            <input type="file" class="form-control" placeholder='clic para adjuntar' />
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pais">país de nacimiento</label>
                        <input type="text" class="form-control" id="eCivil" placeholder="Pais">
                    </div>
                </div>
            </div>
        </div>
        <div class="datos-de-contacto">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-3 mt-5">
                        <div class="registro-contactos__title">
                            <p class="underline">datos de contacto</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-registro-contactos shadow-lg p-4">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">dirección</label>
                        <input type="text" class="form-control" id="provincia" placeholder="provincia">
                    </div>
                    <div class="form-group col-md-4">
                        <label for=""></label>
                        <input type="text" class="form-control" id="distrito" placeholder="distrito">
                    </div>
                    <div class="form-group col-md-4">
                        <label for=""></label>
                        <input type="text" class="form-control" id="corregimiento" placeholder="corregimiento">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for=""></label>
                        <input type="text" class="form-control" id="barrio" placeholder="barrio / P.H">
                    </div>
                    <div class="form-group col-md-3 col-3">
                        <label for=""></label>
                        <input type="text" class="form-control" id="casa" placeholder="# casa / apto">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">celular</label>
                        <input type="text" class="form-control" id="celular" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">correo electrónico</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
