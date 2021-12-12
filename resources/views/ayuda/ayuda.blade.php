@extends('layouts.app')

@section('content')

<div class="container container-helpcenter p-5">
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
            <div class="container-general__info_contact pt-2">
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
<div class="container-general__info_partners mb-5">
    <!----------------------
   Our partners cards
------------------------>
    <div class="card card-general__info shadow-lg">
        <div class="card-body">
            <div class="card-title d-flex justify-content-center pt-5">
                <img src="public/includes/images/centro-de-ayuda/sura.png" alt="">
            </div>
            <div class="container">
                <div class="container-genreal__info__easy_partner pt-3">
                    <div class="container-general__info_contact pt-2">
                        <p><span>Asistencia</span></p>
                        <p class="pt-2">+507 800-7872</p>
                    </div>
                    <div class="container-general__info_contact pt-4">
                        <p><span>Whatsapp</span></p>
                        <p class="pt-2">+(507) 6328-7872</p>
                    </div>
                    <div class="container-general__info_contact pt-4">
                        <p><span>Línea de información</span></p>
                        <p class="pt-2">+(507) 800-7872</p>
                    </div>
                    <div class="container-general__info_contact pt-4">
                        <p><span>Correo electrónico</span></p>
                        <p class="pt-2">atenciónalasegurado@sura.com.pa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-general__info shadow-lg">
        <div class="card-body"></div>
    </div>
    <div class="card card-general__info shadow-lg">
        <div class="card-body">
            <div class="card-title d-flex justify-content-center pt-5">
                <img src="public/includes/images/centro-de-ayuda/panama-sonrie.png" alt="">
            </div>
            <div class="container"></div>
        </div>
    </div>
</div>

<div class="container container-frequent-question pt-4">
    <div class="container-frequent-question__title">
        <span class="underline">preguntas frequentes</span>
    </div>

    <div class="container-frequent-question__response d-flex justify-content-between pt-5">
        <div class="container-frequent-question__response__categories pt-3">
            <div class="container-frequent-question__response__easy shadow-lg bg-white">
                <p><span>easy</span><span style="color:#009ee2">.</span></p>
            </div>
            <div class="container-frequent-question__response__autos shadow-lg bg-white">
                <p><span>autos</span></p>
            </div>
            <div class="container-frequent-question__response__mascotas shadow-lg bg-white">
                <p><span>mascotas</span></p>
            </div>
            <div class="container-frequent-question__response__hogar shadow-lg bg-white">
                <p><span>hogar</span></p>
            </div>
        </div>

        <div class="container-frequent-question__image">
            <img src="public/includes/images/centro-de-ayuda/response-img.png" alt="">
        </div>
    </div>

</div>
@endsection
