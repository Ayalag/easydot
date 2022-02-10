<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>comprobante de compra</title>

    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ url('css/util.css') }}" rel="stylesheet">


    <style>
        .condicion_poliza,
        .btn-comprar {
            display: none;
        }

        .btn-comprar {
            display: none
        }

        .card-container__insurance {
            height: 474px !important;
        }

        .card-subtitle {
            color: #ff0180 !important;
        }

        input[type="text"]::placeholder {
            /* Firefox, Chrome, Opera */
            text-align: center;
        }

    </style>

</head>

<body>
    @if ($response)
        <div class="container container-comprobante-compra">
            <div class="container container-comprobante-compra__header easyBlue800  p-4">
                <div class="row align-items-center">
                    <div class="col-sm ">
                        <p class="fnt-size-1-5">Comprobante de compra</p>
                        <p class="easyBlue400">Transacción {{ str_pad($response[0]->id, 7, '0', STR_PAD_LEFT) }}
                        </p>
                        <p class="easyBlue400 fnt-size-1">dd/mm/aa hh:mm</p>
                    </div>
                    <div class="col-sm text-right">
                        <img src="{{ asset('/public/includes/images/logos/easydot_276x143_formated.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="container container-datos__cliente shadow pb-2">
                <div class="container-datos__cliente-titulo p-2">
                    Datos del cliente
                </div>
                <div>
                    <div class="form-row p-2">
                        <div class="col-5">
                            <label for="nombre">Nombre y Apellido</label>
                            <input disabled type="text" class="form-control input__style_comprobante"
                                value="{{ $response[0]->nombre . ' ' . $response[0]->apellido }}" id="nombre"
                                placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="cedula">
                                <div class="col-5 form-check form-check-inline">
                                    <label class="form-check-label pr-2" for="inlineRadio1">Cedula</label>
                                    <input disabled class="form-check-input"
                                        type="radio"
                                        name="type_id" 
                                        id="cedula"
                                        {{ $response[0]->id_type == 'cedula' ? 'checked' : '' }}>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                    <label class="form-check-label mr-2" for="inlineRadio1">Pasaporte</label>
                                    <input disabled class="form-check-input" 
                                        type="radio"
                                        name="type_id" 
                                        id="pasaporte"
                                        {{ $response[0]->id_type == 'pasaporte' ? 'checked' : '' }}>
                                </div>
                            </label>
                            <input disabled type="text" value="{{ $response[0]->identificacion }}"
                                class="form-control input__style_comprobante" id="pasaportenum" placeholder="">
                        </div>
                        <div class="col-4">
                            <label for="nacimiento">Fecha de nacimiento</label>
                            <div class="row no-gutters">
                                <div class="col-3 mr-1">
                                    <input disabled value="{{ $response[0]->dia }}" type=" text"
                                        class="form-control input__style_comprobante " id="dd" placeholder="">
                                </div>
                                <div class="col-3 mr-1">
                                    <input disabled value="{{ $response[0]->mes }}" type="text"
                                        class="form-control input__style_comprobante" id="mm" placeholder="">
                                </div>
                                <div class="col-3 mr-1">
                                    <input disabled value="{{ $response[0]->year }}" type="text"
                                        class="form-control input__style_comprobante" id="yyyy" placeholder="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="col-2">
                            <label for="genero">Genero</label>
                            <div class="container row">
                                <div class="col-3 form-check form-check-inline">
                                    <label class="form-check-label pr-2" for="inlineRadio1">M</label>
                                    <input disabled class="form-check-input"
                                        {{ $response[0]->genero == 'hombre' ? 'checked' : '' }} type="radio"
                                        name="genero" id="hombre">
                                </div>
                                <div class="col-1 form-check form-check-inline">
                                    <label class="form-check-label mr-2" for="inlineRadio1">F</label>
                                    <input disabled class="form-check-input"
                                        {{ $response[0]->genero == 'mujer' ? 'checked' : '' }} type="radio"
                                        name="genero" id="mujer">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <label for="estadocivil">Estado civil</label>
                            <input disabled value="{{ $response[0]->estado_civil }}" type="text"
                                class="form-control input__style_comprobante" id="estadocivil" placeholder="">
                        </div>
                        <div class="col-2">
                            <label for="pais">Pais de nacimiento</label>
                            <input disabled value="{{ $response[0]->pais }}" type="text"
                                class="form-control input__style_comprobante" id="pais" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="celular">Celular</label>
                            <input disabled value="{{ $response[0]->celular }}" type="text"
                                class="form-control input__style_comprobante" id="celular" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="mail">Correo Electronico</label>
                            <input disabled value="{{ $response[0]->contactMail }}" type="text"
                                class="form-control input__style_comprobante" id="mail" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-datos__cliente shadow mt-3">
                <div class="container-datos__cliente-titulo p-2">
                    Dirección
                </div>
                <div>
                    <div class="form-row p-2">
                        <div class="col-2">
                            <label for="provincia">Provincia</label>
                            <input disabled value="{{ $response[0]->Nombre_Provincia }}" type="text"
                                class="form-control input__style_comprobante" id="provincia" placeholder="">
                        </div>
                        <div class="col-2">
                            <label for="distrito">Distrito</label>
                            <input disabled value="{{ $response[0]->nombre_distrito }}" type="text"
                                class="form-control input__style_comprobante" id="distrito" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="corregimiento">Corregimiento</label>
                            <input disabled value="{{ $response[0]->nombre_corregimiento }}" type="text"
                                class="form-control input__style_comprobante" id="corregimiento" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="barrio">Barrio / P.H</label>
                            <input disabled value="{{ $response[0]->barrio }}" type="text"
                                class="form-control input__style_comprobante" id="barrio" placeholder="">
                        </div>
                        <div class="col-2">
                            <label for="casa">N° Casa/Apto.</label>
                            <input disabled value="{{ $response[0]->casa }}" type="text"
                                class="form-control input__style_comprobante" id="casa" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-datos__cliente shadow mt-3">
                <div>
                    <div class="form-row p-2">
                        <div class="col-2">
                            <label>Persona politicamente expuesta</label>
                            <div class="container row">
                                <div class="col-4 form-check form-check-inline">
                                    <label class="form-check-label pr-2" for="inlineRadio1">Si</label>
                                    <input disabled {{ $response[0]->ppe == 'ppeSi' ? 'checked' : '' }}
                                        class="form-check-input" type="radio" name="ppe" id="ppesi">
                                </div>
                                <div class="col-1 form-check form-check-inline">
                                    <label class="form-check-label mr-2" for="inlineRadio1">No</label>
                                    <input disabled {{ $response[0]->ppe == 'ppeNo' ? 'checked' : '' }}
                                        class="form-check-input" type="radio" name="ppe" id="ppeno">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="cargo">Cargo</label>
                            <input disabled value="{{ $response[0]->ppe_cargo }}" type=" cargo"
                                class="form-control input__style_comprobante" id="cargo" placeholder="">
                        </div>
                        <div class="col-2 text-center">
                            <label for="fechainicio">Fecha de inicio</label>
                            <div class="row no-gutters">
                                <div class="col-3 mr-1">
                                    <input disabled value="{{ $response[0]->ppe_inicio_dia }}" type="text"
                                        class="form-control input__style_comprobante " id="dd" placeholder="">
                                </div>
                                <div class="col-3 mr-1">
                                    <input disabled value="{{ $response[0]->ppe_inicio_mes }}" type="text"
                                        class="form-control input__style_comprobante" id="mm" placeholder="">
                                </div>
                                <div class="col-4 mr-1">
                                    <input disabled value="{{ $response[0]->ppe_inicio_year }}" type="text"
                                        class="form-control input__style_comprobante" id="yyyy" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-2 text-center">
                            <label for="fechafinal">Fecha de finalización</label>
                            <div class="row no-gutters">
                                <div class="col-3 mr-1">
                                    <input disabled value="{{ $response[0]->ppe_fin_dia }}" type="text"
                                        class="form-control input__style_comprobante " id="dd" placeholder="">
                                </div>
                                <div class="col-3 mr-1">
                                    <input disabled value="{{ $response[0]->ppe_fin_mes }}" type="text"
                                        class="form-control input__style_comprobante" id="mm" placeholder="">
                                </div>
                                <div class="col-4 mr-1">
                                    <input disabled value="{{ $response[0]->ppe_fin_year }}" type=" text"
                                        class="form-control input__style_comprobante" id="yyyy" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="mail">Correo Electronico</label>
                            <input disabled value="{{ $response[0]->ppe_mail }}" type="mail"
                                class="form-control input__style_comprobante" id="mail" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-datos__cliente shadow mt-3 d-flex p-2">
                <div class="container-datos__cliente-titulo p-2">
                    Corredor de seguros
                </div>
                <div class="ml-2" style="width: 50rem">
                    <input type="nombre" class="form-control input__style_comprobante" id="nombre" placeholder=""
                        value="Bartoli Asesores de seguros">
                </div>
            </div>
        </div>
        <div class="container container-comprobante-compra-para mt-4 mb-5 d-flex">

            {!! $response[0]->html !!}


            <div class="container container-datos__cliente mt-3">
                <div class="container-datos__cliente-titulo p-2">
                    Cobertura para:
                </div>
                <div>
                    <div class="form-row p-2">
                        <div class="col-3">
                            <label for="placa">Placa</label>
                            <input disabled value="{{ $response[0]->placa }}" type=" text"
                                class="form-control input__style_comprobante" id="placa" placeholder="">
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="col-3">
                            <label for="marca">Marca</label>
                            <input disabled value="{{ $response[0]->marca }}" type="text"
                                class="form-control input__style_comprobante" id="marca" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="modelo">Modelo</label>
                            <input disabled value="{{ $response[0]->modelo }}" type="text"
                                class="form-control input__style_comprobante" id="modelo" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="year">Año</label>
                            <input disabled value="{{ $response[0]->car_year }}" type="text"
                                class="form-control input__style_comprobante" id="year" placeholder="">
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="col-3">
                            <label for="color">Color</label>
                            <input disabled value="{{ $response[0]->color }}" type="text"
                                class="form-control input__style_comprobante" id="color" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="motor">Motor</label>
                            <input disabled value="{{ $response[0]->numero_de_chasis }}" type="text"
                                class="form-control input__style_comprobante" id="motor" placeholder="">
                        </div>
                        <div class="col-3">
                            <label for="chasis">Chasis</label>
                            <input disabled value="{{ $response[0]->numero_de_motor }}" type="text"
                                class="form-control input__style_comprobante" id="chasis" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-comprobante-compra-footer d-flex p-4">
            <div class="container-comprobante-compra-footer-legend">
                <p>
                    La póliza está siendo procesada en este momento con la compañía seleccionada, tan pronto esté lista,
                    podrás recibirla en la bandeja <br> de tu correo electrónico.
                </p>
                <br>
                <p>
                    En caso de tener alguna consulta, puedes contactarnos a través de nuestro correo de atención a
                    clientes,
                    <span style="color: #ff0180 ">clientes@easydot.com.pa</span> o <br>vía WhatsApp.
                </p>
                <br>
                <p>
                    Recuerda que en nuestro Centro de Ayuda podrás encontrar un directorio telefónico con los contactos
                    de
                    asistencia y atención <br> de las diferentes compañías con las que trabajamos.
                </p>
                {{-- <div class="footer-image"> --}}
                {{-- </div> --}}
            </div>
            {{-- <img src="{{ asset('/public/includes/images/cintillo_footer.png') }}" alt=""> --}}

        </div>
    @else
    @endif


</body>

<script src="{{ url('js/app.js') }}"></script>
<script>
    let card = document.getElementsByClassName("card-container__insurance");
    for (let index = 0; index < card.length; ++index) {
        card[index].setAttribute("style", "top: 1rem; border: none; border-radius:10px;")
        card[index].classList.add('shadow');
    }
</script>

</html>
