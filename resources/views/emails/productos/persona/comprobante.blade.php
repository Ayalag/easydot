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
            height: 522px !important;
        }

        /* .card-subtitle {
            color: #ff0180 !important;
        } */

        input[type="text"]::placeholder {
            /* Firefox, Chrome, Opera */
            text-align: center;
        }
        .logo {
            text-align: right
        }

        .container-datos__cliente__mobile-corredor input {
            width: 50rem;

        }


        @media screen and (max-width:768px) {

            .form-control:disabled {
                text-align: center
            }

            .header-mobile {
                flex-direction: column-reverse;
                text-align: center;
            }

            .logo {
                text-align: center;
            }

            .container-datos__cliente {
                text-align: center
            }

            .client-contact__mobile-birthday {
                justify-content: center
            }

            div {
                padding-bottom: 0.2rem;
            }

            .container-comprobante-compra-para {
                flex-direction: column-reverse;
            }

            .container-datos__cliente__mobile-corredor {
                flex-direction: column;
                align-items: center;
            }

            .container-datos__cliente__mobile-corredor div {
                width: 100%;
                text-align: center
            }

            .container-datos__cliente__mobile-corredor input {
                width: inherit;
            }
        }

    </style>

</head>

<body>
    @if ($response)
    <div class="container container-comprobante-compra">
        <div class="container container-comprobante-compra__header easyBlue800  p-4">
            <div class="row align-items-center header-mobile">
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4  ">
                    <p class="fnt-size-1-5">Comprobante de compra</p>
                    <p class="easyBlue400">Transacción {{ str_pad($response[0]->id, 7, '0', STR_PAD_LEFT) }}
                    </p>
                    <p class="easyBlue400 fnt-size-1">{{  $response[0]->fecha_pago . ' ' . $response[0]->hora_pago }}
                    </p>
                </div>
                <div class="col-sm logo">
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
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="nombre">Nombre y Apellido</label>
                        <input disabled type="text" class="form-control input__style_comprobante"
                            value="{{ $response[0]->nombre . ' ' . $response[0]->apellido }}" id="nombre"
                            placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="cédula">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label pr-2" for="inlineRadio1">Cédula</label>
                                <input disabled class="form-check-input" type="radio" name="type_id" id="cedula"
                                    {{ $response[0]->id_type == 'cedula' ? 'checked' : '' }}>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label mr-2" for="inlineRadio1">Pasaporte</label>
                                <input disabled class="form-check-input" type="radio" name="type_id" id="pasaporte"
                                    {{ $response[0]->id_type == 'pasaporte' ? 'checked' : '' }}>
                            </div>
                        </label>
                        <input disabled type="text" value="{{ $response[0]->identificacion }}"
                            class="form-control input__style_comprobante" id="pasaportenum" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="nacimiento">Fecha de nacimiento</label>
                        <div class="row no-gutters client-contact__mobile-birthday">
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
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2 text-center">
                        <label for="genero">Género</label>
                        <div class="container">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label pr-2" for="inlineRadio1">M</label>
                                <input disabled class="form-check-input"
                                    {{ $response[0]->genero == 'hombre' ? 'checked' : '' }} type="radio" name="genero"
                                    id="hombre">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label mr-2" for="inlineRadio1">F</label>
                                <input disabled class="form-check-input"
                                    {{ $response[0]->genero == 'mujer' ? 'checked' : '' }} type="radio" name="genero"
                                    id="mujer">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2">
                        <label for="estadocivil">Estado civil</label>
                        <input disabled value="{{ $response[0]->estado_civil }}" type="text"
                            class="form-control input__style_comprobante" id="estadocivil" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-3">
                        <label for="pais">Nacionalidad</label>
                        <input disabled value="{{ $response[0]->pais }}" type="text"
                            class="form-control input__style_comprobante" id="pais" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2">
                        <label for="celular">Celular</label>
                        <input disabled value="{{ $response[0]->celular }}" type="text"
                            class="form-control input__style_comprobante" id="celular" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-3">
                        <label for="mail">Correo Electrónico</label>
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
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2">
                        <label for="provincia">Provincia</label>
                        <input disabled value="{{ $response[0]->Nombre_Provincia }}" type="text"
                            class="form-control input__style_comprobante" id="provincia" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2">
                        <label for="distrito">Distrito</label>
                        <input disabled value="{{ $response[0]->nombre_distrito }}" type="text"
                            class="form-control input__style_comprobante" id="distrito" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2">
                        <label for="corregimiento">Corregimiento</label>
                        <input disabled value="{{ $response[0]->nombre_corregimiento }}" type="text"
                            class="form-control input__style_comprobante" id="corregimiento" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2">
                        <label for="barrio">Barrio / P.H</label>
                        <input disabled value="{{ $response[0]->barrio }}" type="text"
                            class="form-control input__style_comprobante" id="barrio" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2">
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
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2 text-center">
                        <label>Persona políticamente expuesta</label>
                        <div class="container">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label pr-2" for="inlineRadio1">Si</label>
                                <input disabled {{ $response[0]->ppe == 'ppeSi' ? 'checked' : '' }}
                                    class="form-check-input" type="radio" name="ppe" id="ppesi">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label mr-2" for="inlineRadio1">No</label>
                                <input disabled {{ $response[0]->ppe == 'ppeNo' ? 'checked' : '' }}
                                    class="form-check-input" type="radio" name="ppe" id="ppeno">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="cargo">Cargo</label>
                        <input disabled value="{{ $response[0]->ppe_cargo }}" type=" cargo"
                            class="form-control input__style_comprobante" id="cargo" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2 text-center">
                        <label for="fechainicio">Fecha de inicio</label>
                        <div class="row no-gutters justify-content-center">
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
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-2 text-center">
                        <label for="fechafinal">Fecha de finalización</label>
                        <div class="row no-gutters justify-content-center">
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
                    {{-- <div class="col-3">
                            <label for="mail">Correo Electronico</label>
                            <input disabled value="{{ $response[0]->ppe_mail }}" type="mail"
                    class="form-control input__style_comprobante" id="mail" placeholder="">
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container container-datos__cliente__mobile-corredor shadow mt-3 d-flex p-2">
        <div class="container-datos__cliente-titulo p-2">
            Corredor de seguros
        </div>
        <div class="ml-2">
            <input type="nombre" class="form-control input__style_comprobante" id="nombre" placeholder=""
                value="Bartoli Asesores de seguros" disabled>
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
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="placa">Nombre</label>
                        <input disabled value="{{ $response[0]->nombre . ' ' . $response[0]->apellido }}" type=" text"
                            class="form-control input__style_comprobante" id="nombre" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="placa">Cédula</label>
                        <input disabled value="{{ $response[0]->identificacion }}" type=" text"
                            class="form-control input__style_comprobante" id="Cedula" placeholder="">
                    </div>
                </div>
                <div class="form-row p-2">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="marca">Fecha de nacimiento</label>
                        <input disabled value="{{ $response[0]->dia.'/'.$response[0]->mes.'/'. $response[0]->year }}"
                            type="text" class="form-control input__style_comprobante" id="nacimiento" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="year">Celular</label>
                        <input disabled value="{{ $response[0]->celular }}" type="text"
                            class="form-control input__style_comprobante" id="celular" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="modelo">Correo Electrónico</label>
                        <input disabled value="{{ $response[0]->contactMail }}" type="text"
                            class="form-control input__style_comprobante" id="mail" placeholder="">
                    </div>
                </div>
                <div class="form-row p-2">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="color">Provincia</label>
                        <input disabled value="{{ $response[0]->Nombre_Provincia }}" type="text"
                            class="form-control input__style_comprobante" id="provincia" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="motor">Distrito</label>
                        <input disabled value="{{ $response[0]->nombre_distrito }}" type="text"
                            class="form-control input__style_comprobante" id="distrito" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="chasis">Corregimiento</label>
                        <input disabled value="{{ $response[0]->nombre_corregimiento }}" type="text"
                            class="form-control input__style_comprobante" id="corregimiento" placeholder="">
                    </div>
                </div>
            </div>

            @if (!empty($response[0]->ap_nombre))
            <div class="container-datos__cliente-titulo p-2">
                Persona Adicional:
            </div>
            <div>
                <div class="form-row p-2">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="ap_nombre">Nombres</label>
                        <input disabled value="{{ $response[0]->ap_nombre }}" type="text"
                            class="form-control input__style_comprobante" id="ap_nombre" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="ap_apellidos">Apellidos</label>
                        <input disabled value="{{ $response[0]->ap_apellido }}" type="text"
                            class="form-control input__style_comprobante" id="ap_apellidos" placeholder="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                        <label for="ap_identificacion">Cédula</label>
                        <input disabled value="{{ $response[0]->ap_identificacion }}" type="text"
                            class="form-control input__style_comprobante" id="ap_identificacion" placeholder="">
                    </div>
                </div>
            </div>
            @endif
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
