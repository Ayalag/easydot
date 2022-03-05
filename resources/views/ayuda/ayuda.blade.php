@extends('layouts.app')

@section('content')
    <div class="container container-helpcenter">
        <div class="container container-helpcenter__title">
            <span class="underline">centro de ayuda</span>
        </div>
        <div class="container-helpcenter__paragraph pt-2">
            <p><span class="underline"></span>en esta sección encontrarás información relevante, como un directorio de
                contactos <br> de las diferentes
                empresas que forman parte de <span>easydot.com.pa</span>, así como algunas <br> preguntas frecuentes.</span>
            </p>
        </div>

        <div class="container container-general__info">
            <div class="container-genreal__info__easy">
                <div class="container-genreal__info__easy-img">
                    <img src="{{ asset('/public/includes/images/centro-de-ayuda/easy.png') }}" alt="">
                </div>
                <div class="container-general__info_contact pt-2">
                    <p><span>Informacion general</span></p>
                    <p class="pt-2">info@easydot.com.pa</p>
                </div>
                <div class="container-general__info_contact pt-4">
                    <p><span>Whatsapp</span></p>
                    <p class="pt-2">+(507) 6000-0000</p>
                </div>
            </div>
            <div class="container-genreal__info__bartoli">
                <div class="container-genreal__info__bartoli-img">
                    <img src="{{ asset('/public/includes/images/centro-de-ayuda/bartoli.png') }}" alt="">
                </div>
                <div class="container-general__info_contact_bartoli">
                    <p><span>Miguel Bartoli</span></p>
                    <p class="pt-2">mbartoli@bartoliseguros.com</p>
                    <p class="pt-2">+(507) 6981-2660</p>
                </div>
                <div class="container-general__info_contact pt-4">
                    <p><span>Ana María Flores</span></p>
                    <p class="pt-2">mflores@bartoliseguros.com</p>
                    <p class="pt-2">+(507) 6508-4523</p>
                </div>
            </div>
        </div>

    </div>
    <div class="container-general__info_partners mb-5" id="partners">

        <!----------------------     Our partners cards  ------------------------>

        <div class="card card-general__info shadow">
            <div class="card-body">
                <div class="card-title d-flex justify-content-center pt-5">
                    <img src="public/includes/images/centro-de-ayuda/sura.png" alt="">
                </div>
                <div class="container">
                    <div class="container-genreal__info__easy_partner pt-3">
                        <div class="container-general__info_contact pt-2">
                            <p><span>Whatsapp</span></p>
                            <p class="pt-2">+507 6328-7872</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Línea de información</span></p>
                            <p class="pt-2">507 800-7872</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Asistencia</span></p>
                            <p class="pt-2">+507 800-7872</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Correo electrónico</span></p>
                            <p class="pt-2">atenciónalasegurado@sura.com.pa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------     Our partners cards  ------------------------>

        <div class="card card-general__info shadow">
            <div class="card-body">
                <div class="card-title d-flex justify-content-center pt-5">
                    <img src="public/includes/images/centro-de-ayuda/optima_color.png" alt="">
                </div>
                <div class="container">
                    <div class="container-genreal__info__easy_partner pt-3">
                        <div class="container-general__info_contact pt-2">
                            <p><span>Whatsapp</span></p>
                            <p class="pt-2">+(507) 6288-7452</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Línea de información</span></p>
                            <p class="pt-2">+(507) 269-5000</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Asistencia</span></p>
                            <p class="pt-2">+507 62887452</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------     Our partners cards  ------------------------>

        <div class="card card-general__info shadow">
            <div class="card-body">
                <div class="card-title d-flex justify-content-center pt-5">
                    <img src="public/includes/images/centro-de-ayuda/mapfre_color.png" alt="">
                </div>
                <div class="container">
                    <div class="container-genreal__info__easy_partner pt-3">
                        <div class="container-general__info_contact pt-2">
                            <p><span>Whatsapp</span></p>
                            <p class="pt-2">+507 6319-9457</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Línea de información</span></p>
                            <p class="pt-2">+507 378-9800</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Asistencia</span></p>
                            <p class="pt-2">+507 390-9090</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Correo electrónico</span></p>
                            <p class="pt-2">info@mapfre.com.pa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------     Our partners cards  ------------------------>

        <div class="card card-general__info shadow">
            <div class="card-body">
                <div class="card-title d-flex justify-content-center pt-5">
                    <img src="public/includes/images/centro-de-ayuda/panama-sonrie.png" alt="">
                </div>
                <div class="container">
                    <div class="container-genreal__info__easy_partner pt-3">
                        <div class="container-general__info_contact pt-4">
                            <p><span>Whatsapp</span></p>
                            <p class="pt-2">+507 6140-5700</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Línea de información</span></p>
                            <p class="pt-2">507 399-5541</p>
                        </div>
                        <div class="container-general__info_contact pt-4">
                            <p><span>Correo electrónico</span></p>
                            <p class="pt-2">dentalpty@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-frequent-question pt-4">
        <div class="container-frequent-question__title">
            <span id="faq" class="underline">preguntas frecuentes</span>
        </div>

        <div class="container-frequent-question__response d-flex justify-content-between">
            <div class="container-frequent-question__response__categories pt-5">

                <div class="content">
                    <div class="container-frequent-question__response__easy shadow">
                        <input type="checkbox" id="question1" name="q" class="questions">
                        {{-- <div class="plus">+</div> --}}
                        <label for="question1" class="question">
                            <span>easy</span><span style="color:#009ee2">.</span>
                        </label>
                        <div class="answers">
                            <div class="bigger-margin">1.&nbsp;¿Es seguro el pago en línea al comprar mis pólizas?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Nuestra plataforma de pago es respaldada por Banco General. Contamos con un
                                                sistema encriptado y antifraude para proteger cada transacción que realices
                                                en easy.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">2.&nbsp;¿Qué es un certificado de cobertura?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Es un documento que funciona como constancia de contar con un seguro y está
                                                respaldado por la aseguradora de tu elección al momento de comprar la
                                                póliza.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">3.&nbsp;¿Cuándo recibo mi póliza original?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>La póliza original estará llegando al correo electrónico que nos indicaste
                                                en el transcurso de 24horas, pero no te preocupes,recuerda que cuentas con
                                                un certificado de cobertura que garantiza la compra de tu póliza.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">4.&nbsp;¿Cuáles son los números de contacto de las aseguradoras?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>En caso de atención directa, asistencia y/o reclamos puedes contactar a las
                                                aseguradoras en los números detallados en esta sección.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container-frequent-question__response__easy shadow">
                        <input type="checkbox" id="question2" name="q" class="questions">
                        {{-- <div class="plus">+</div> --}}
                        <label for="question2" class="question">
                            <span>autos</span>
                        </label>
                        <div class="answers">
                            <div class="bigger-margin">1.&nbsp;¿Qué hago en caso de un accidente de autos?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Lo primero es verificar si hay heridos. Luego debes informar de inmediato a
                                                tu compañía aseguradora llamando al número de asistencia y ellos te apoyaran
                                                en los pasos siguientes ya que es importante conocer la situación y evaluar
                                                si es necesario llamar a la autoridad correspondiente (ATTT).
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">2.&nbsp;¿Qué significa SOAT?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Significa Seguro Obligatorio de Accidentes de Tránsito.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">3.&nbsp;¿Qué son Lesiones Corporales?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Es la cobertura que aplica para hacer frente a las lesiones ocasionadas a
                                                otras personas fuera del vehículo asegurado en caso de un accidente.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">4.&nbsp;¿Qué son Daños a la Propiedad Ajena o Responsabilidad Civil?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Es la cobertura que hace frente a los daños materiales ocasionados a los
                                                bienes de otras personas en caso de un accidente.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">5.&nbsp;¿Qué son Gastos Médicos?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Esta cobertura es la que aplica para hacer frente a los gastos médicos de
                                                lesiones ocasionadas a las personas que viajan dentro del vehículo
                                                asegurado.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">6.&nbsp;¿Debo realizar una inspección vehicular?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>En el caso de los planes de daños a terceros y SOAT para autos y motos
                                                particulares con antigüedad menor a 10 años, no se requiere realizar esta
                                                inspección.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container-frequent-question__response__easy shadow">
                        <input type="checkbox" id="question3" name="q" class="questions">
                        {{-- <div class="plus">+</div> --}}
                        <label for="question3" class="question">
                            <span>mascotas</span>
                        </label>
                        <div class="answers">
                            <div class="bigger-margin">1.&nbsp;¿Cuáles son los tipos de mascotas puedo asegurar?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Puedes asegurar perros y gatos.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">2.&nbsp;¿Qué edad debe tener mi mascota para poder asegurarla?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Puedes asegurar a tu mascota desde los 3 meses de haber nacido hasta los 10
                                                años.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container-frequent-question__response__easy shadow">
                        <input type="checkbox" id="question4" name="q" class="questions">
                        {{-- <div class="plus">+</div> --}}
                        <label for="question4" class="question">
                            <span>hogar</span>
                        </label>
                        <div class="answers">
                            <div class="bigger-margin">1.&nbsp;¿Qué es un seguro de contenido?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Un seguro de contenido es aquel te brinda protección ante una situación
                                                inesperada en el hogar como incendios, inundaciones, y otros, cubriendo esos
                                                objetos que con tanto esfuerzo adquiriste para hacer de tu casa el dulce
                                                hogar que tanto deseabas.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">2.&nbsp;¿Qué se puede asegurar con un seguro de contenido del
                                hogar?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>Puedes asegurar tus muebles, equipos electrónicos como TVs,
                                                electrodomésticos como refrigeradoras, entre otros.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="bigger-margin">3.&nbsp;¿Para asegurar mis objetos personales debo ser el dueño del
                                hogar?
                                <ul>
                                    <li>
                                        <ul>
                                            <li>No importa si eres propietario o si alquilas una casa o apartamento, siempre
                                                que dicho contenido sea de tu pertenencia.
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-frequent-question__image">
                <img src="public/includes/images/centro-de-ayuda/response-img.png" alt="">
            </div>
        </div>
    </div>
@endsection
