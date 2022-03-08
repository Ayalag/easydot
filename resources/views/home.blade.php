@extends('layouts.app')

@section('monster-banner')
<!-- Slider -->
<!-- hero slider Start -->
<div class="banner-wrap">
    <div class="banner-slider">
        <!-- hero slide start -->
        <div class="banner-slide">
            <div class="hero-image" style="background-image: url('/public/includes/images/slider/insurance_final.png')">
            </div>
            <div class="container container-slider">
                <div class="layer-slick1">
                    <span class="slider-text-descripcion">adquiere tu póliza <br> de AUTO desde</span>
                </div>

                <div class="layer-slick1 slider-text-price">
                    <div>
                        autos 99.75 / año
                    </div>
                    <div>
                        motos 65.00 / año
                    </div>
                </div>
                <x-btn-main class='fntw-800 mt-3'>
                    <x-a-link class="slider_btn__comprar" link='/producto/motor/cobertura'>
                        Comprar Ahora
                    </x-a-link>
                </x-btn-main>
            </div>
        </div>
        <!-- hero slide end -->
        <!-- hero slide start -->
        <div class="banner-slide">
            <div class="hero-image" style="background-image: url('/public/includes/images/slider/insurance_final2.png')">
            </div>
            <div class="container container-slider">
                <div class="layer-slick1">
                    <span class="slider-text-descripcion-easy">easy<span style="color:#009ee2">.</span></span>
                </div>

                <div class="slider-text-descripcion-whoami">
                    <span class="underline">somos una compañía <br> creada pensando <br>primero en ti</span>
                </div>
                <div class="container container-home-banner__btn">
                    <x-btn-main class='fntw-800 mt-3'>
                        <x-a-link class="slider_btn__comprar" link='/conoce-easy'>
                            Conoce easy.
                        </x-a-link>
                    </x-btn-main>
                </div>
            </div>
        </div>
        <!-- hero slide end -->
    </div>
    <div class="slider-progress">
		<span></span>
	</div>
</div>
<!-- hero slider end -->

<div class="container-fluid blue-square__container">
    <div class="blue-square__container__container">
        <div class="blue-square__container__title">
            ¡Empecemos Hoy!
        </div>
        <div class="blue_square__container__btn">
            <button type="submit" class="btn"><a href="{{ route('login') }}" style="color:#033777">iniciar sesión</a>
            </button>
            <button type="submit" class="btn"><a href="{{ route('register') }}" style="color:#033777">crear cuenta</a>
            </button>
        </div>
    </div>
</div>
@endsection

@section('content')


<div class="container box-container mb-5">
    <div class="container container-hr">
        <hr size="20" color="grey">
    </div>
    <div class="row box-container__title mb-5">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p class="underline">conoce las increíbles opciones que</p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p>tenemos para ti</p>
        </div>
    </div>
    <div class="wrap">
        <div class="box ">
            <div class="box-category-logo auto">
                <img class="box-category-logo__image" src="{{ asset('/public/includes/images/autos2.png') }}" alt="">
            </div>
            <div class="box-category__title">
                <h1>autos</h1>
            </div>
            <div class="box-category__button">
                <a href="{{ route('autos-cobertura') }}">ver planes</a>
            </div>
        </div>
        <div class="box ">
            <div class="box-category-logo hogar">
                <img class="box-category-logo__image" src="{{ asset('/public/includes/images/hogar2.png') }}" alt="">
            </div>
            <div class="box-category__title">
                <h1>hogar</h1>
            </div>
            <div class="box-category__button">
                <a href="{{ route('hogar-cobertura') }}">ver planes</a>
            </div>
        </div>
        <div class="box ">
            <div class="box-category-logo persona">
                <img class="box-category-logo__image" src="{{ asset('/public/includes/images/personas2.png') }}" alt="">
            </div>
            <div class="box-category__title">
                <h1>personas</h1>
            </div>
            <div class="box-category__button">
                <a href="{{ route('personas-cobertura') }}">ver planes</a>
            </div>
        </div>
        <div class="box ">
            <div class="box-category-logo mascota">
                <img class="box-category-logo__image" src="{{ asset('/public/includes/images/mascotas2.png') }}" alt="">
            </div>
            <div class="box-category__title">
                <h1>mascota</h1>
            </div>
            <div class="box-category__button">
                <a href="{{ route('mascotas-cobertura') }}">ver planes</a>
            </div>
        </div>
    </div>
</div>

<div class="container container-step-to-buy p-5">
    <div class="row step-to-buy__title p-5">
        <div class="col-md-12 col-sm-12 col-xs-12 fntw-800">
            <p>¡compra súper <span>easy</span>!</p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p>en un instante, fácil y rápido en tan solo</p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p>3 pasos.</p>
        </div>
    </div>

    <div class="container container-steps">
        <div class="steps-container__box">
            <div class="steps-by-steps">
                <div class="step-one-letter shadow-lg">
                    <div>1</div>
                    <div>
                        Selecciona la categoría del
                        producto que buscas y elige
                        tu opción favorita.
                    </div>
                </div>
                <div class="step-two-letter shadow-lg">
                    <div>2</div>
                    <div>
                        Ingresa tus datos y los del
                        producto que seleccionaste.
                    </div>
                </div>
                <div class="step-three-letter shadow-lg">
                    <div>3</div>
                    <div>
                        Realiza el pago y listo,
                        estarás recibiendo el
                        certificado en tu correo
                        electrónico
                    </div>
                </div>
            </div>
            <div class="container-step__image2">
                <img src="{{ asset('/public/includes/images/iphone.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid container-super__easy mb-5">
    <div class="box-super_easy">
        <div class="container-super__title">
            <span>SÚPER</span>
        </div>
        <div class="container-super__image">
            <img src="public/includes/images/logos/super_easy.png" alt="easydot.com.pa">
        </div>
    </div>
    <div class="container-super__subtitle p-5">
        <p>sin papeleo<span>.</span> sin estrés</p>
    </div>
</div>

<div class="container-fluid container-comments pb-5">
    <div class="container-comments__title p-5">
        <p class="underline">comentarios que nos hacen sentir orgullosos</p>
        <p>¿y tú qué opinas?</p>
    </div>
    <div class="container-logo-comments">
        <div class="circle"></div>
        <div class="container-persona_logo">
            <img src="public/includes/images/persona_logo.png" alt="">
        </div>
        <div class="container-box__one">
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle " src="https://randomuser.me/api/portraits/med/women/51.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Hailey Ennis </span>
                        <div class="Stars" style="--rating: 5;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/14.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Batur Akan </span>
                        <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>

                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/23.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Alberte Jørgensen </span>
                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>

                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/45.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Oğuzhan Akman </span>
                        <div class="Stars" style="--rating: 4;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>

                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/38.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Bitlis Turkey </span>
                        <div class="Stars" style="--rating: 5;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>

                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/7.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Lynn Gonzalez </span>
                        <div class="Stars" style="--rating: 2.4;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>

                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/92.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Juan Martinez </span>
                        <div class="Stars" style="--rating: 2;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>

                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/18.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Roberto Carlos </span>
                        <div class="Stars" style="--rating: 4;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>

                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/18.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Massiel Einitz </span>
                        <div class="Stars" style="--rating: 3;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>

                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                    ratione
                    laudantium cupiditate excepturi officia!
                </div>
            </div>
        </div>
    </div>


</div>

<div class="container-fluid container-aliados">
    <div class="container-aliados_title p-5">
        <p>Trabajamos y estamos respaldados por las mejores compañías del</p>
        <p>mercado panameño</p>
    </div>
    <div class="containerl-fluid container_aliados__image pb-5">
        <div class="row">
            <div class="col-sm bartoli__aliados">
                <img src="{{ asset('/public/includes/images/logos-aliados/gris/bartoli/bartoli.png') }}" alt="Bartoli">
            </div>
            <div class="col-sm mapfre__aliados">
                <img src="{{ asset('/public/includes/images/logos-aliados/gris/mpfre/mapfre.png') }}" alt="Mapfre">
            </div>
            <div class="col-sm optima__aliados">
                <img src="{{ asset('/public/includes/images/logos-aliados/gris/optima/optima.png') }}" alt="optima">
            </div>
            <div class="col-sm sura__aliados">
                <img src="{{ asset('/public/includes/images/logos-aliados/gris/sura/sura.png') }}" alt="sura">
            </div>
            <div class="col-sm nacional__aliados">
                <img src="{{ asset('/public/includes/images/logos-aliados/gris/nacional/nacional.png') }}"
                    alt="nacional">
            </div>
            <div class="col-sm panamasonrie__aliados">
                <img src="{{ asset('/public/includes/images/logos-aliados/gris/panamasonrie/panamsonrie.png') }}"
                    alt="panamsonrie">
            </div>
        </div>
    </div>
    {{-- <div class="container container_aliados__image">
            <div class="row">
                <div class="col-sm my-auto-2 col-2 my-auto sura">
                    <img src="{{ asset('/public/includes/images/logos-aliados/sura.png') }}" alt="Sura">
</div>
<div class="col-sm-2 col-2 my-auto mapfre">
    <img src="{{ asset('/public/includes/images/logos-aliados/mapfre.png') }}" alt="Mapfre">
</div>
<div class="col-sm-2 col-2 my-auto sonrie">
    <img src="{{ asset('/public/includes/images/centro-de-ayuda/panama-sonrie.png') }}" alt="Panama Sonrie">
</div>
<div class="col-sm-2 col-2 my-auto sonrie">
    <img src="{{ asset('/public/includes/images/centro-de-ayuda/panama-sonrie.png') }}" alt="Panama Sonrie">
</div>
<div class="col-sm-2 col-2 my-auto sonrie">
    <img src="{{ asset('/public/includes/images/centro-de-ayuda/panama-sonrie.png') }}" alt="Panama Sonrie">
</div>
<div class="col-sm-2 col-2 my-auto sonrie">
    <img src="{{ asset('/public/includes/images/centro-de-ayuda/panama-sonrie.png') }}" alt="Panama Sonrie">
</div>
</div>
</div> --}}
</div>
@endsection
