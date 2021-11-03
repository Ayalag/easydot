@extends('layouts.app')

@section('monster-banner')
    <!-- Slider -->
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance_final.png')">
                <div class="container container-slider">
                    <div class="layer-slick1">
                        <span class="slider-text-descripcion">adquiere tu póliza <br> de AUTO desde</span>
                    </div>

                    <div class="layer-slick1 slider-text-price">
                        <div>
                            autos 111.93 / año
                        </div>
                        <div>
                            motos 75.18 / año
                        </div>
                    </div>
                    <x-btn-main class='fntw-800 mt-3'>
                        <x-a-link class="slider_btn__comprar" link='/autos'>
                            Comprar Ahora
                        </x-a-link>
                    </x-btn-main>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance_final.png')">
                <div class="container container-slider">
                    <div class="layer-slick1">
                        <span class="slider-text-descripcion">adquiere tu póliza <br> de PERSONA desde</span>
                    </div>

                    <div class="layer-slick1 slider-text-price">
                        <div>
                            basico 175.00 / año
                        </div>
                        <div>
                            completa 275.00 / año
                        </div>
                    </div>
                    <x-btn-main class='fntw-800 mt-3'>
                        <x-a-link class="slider_btn__comprar" link='/persona'>
                            Comprar Ahora
                        </x-a-link>
                    </x-btn-main>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url('public/includes/images/slider/insurance_final.png')">
                <div class="container container-slider">
                    <div class="layer-slick1">
                        <span class="slider-text-descripcion">adquiere tu póliza <br> de HOGAR desde</span>
                    </div>

                    <div class="layer-slick1 slider-text-price">
                        <div>
                            basico 325.93 / año
                        </div>
                        <div>
                            completa 425.18 / año
                        </div>
                    </div>
                    <x-btn-main class='fntw-800 mt-3'>
                        <x-a-link class="slider_btn__comprar" link='/hogar'>
                            Comprar Ahora
                        </x-a-link>
                    </x-btn-main>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid box-container mb-5">
        <div class="row box-container__title">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="underline">conoce las increíbles opciones que</p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p>tenemos para ti</p>
            </div>
        </div>
        <div class="wrap">
            <div class="box ">
                <div class="box-category-logo">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/autos.png') }}" alt="">
                </div>
                <div class="box-category__title">
                    <h1>autos</h1>
                </div>
                <div class="box-category__button">
                    <a href="/autos">ver planes</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-category-logo">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/hogar.png') }}" alt="">
                </div>
                <div class="box-category__title">
                    <h1>hogar</h1>
                </div>
                <div class="box-category__button">
                    <a href="/hogar">ver planes</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-category-logo">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/personas.png') }}" alt="">
                </div>
                <div class="box-category__title">
                    <h1>personas</h1>
                </div>
                <div class="box-category__button">
                    <a href="/persona">ver planes</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-category-logo">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/mascotas.png') }}" alt="">
                </div>
                <div class="box-category__title">
                    <h1>mascota</h1>
                </div>
                <div class="box-category__button">
                    <a href="/persona">ver planes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container step-to-buy">
        <div class="row step-to-buy__title">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p>¡compra súper <span>easy</span>!</p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p>en un instante, fácil y rápido en</p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p>tan solo 3 pasos.</p>
            </div>
        </div>
        <div class="container-steps">
            <div class="row">
                <div class="col-md-4 container-step__image1">
                    <img src="{{ asset('/public/includes/images/iphone-mascotas.png') }}" alt="">
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="step-one-letter">
                        <div>1</div>
                        <div>
                            <p>Selecciona la categoria de seguros que</p>
                            <p>buscas y elige tu opcion favorita.</p>
                        </div>
                    </div>
                    <div class="step-two-letter">
                        <div>2</div>
                        <div>
                            <p>Ingresa tus datos y los del</p>
                            <p>seguro que seleccionaste.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-8 col-10">
                    <div class="step-three-letter">
                        <div>3</div>
                        <div>
                            <p>Realiza el pago y listo, estarás</p>
                            <p>recibiendo el certificado de la</p>
                            <p>póliza en tu correo electronico</p>
                        </div>
                    </div>
                    <div class="step-four-letter mt-3">
                        <p>súper <span>eeeasy</span> !!</p>
                    </div>
                </div>
                <div class="col-md-5 container-step__image2">
                    <img src="{{ asset('/public/includes/images/iphone.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container container-aliados shadow-lg bg-white mb-5">
        <div class="container_aliados__title p-3">
            <p class="underline">trabajamos y estamos respaldados por las</p>
            <p>mejores compañias del mercado panameño</p>
        </div>
        <div class="row pb-2">
            <div class="col-sm  my-auto">
                <img src="{{ asset('/public/includes/images/logos-aliados/sura.png') }}" alt="Sura">
            </div>
            <div class="col-sm my-auto">
                <img src="{{ asset('/public/includes/images/logos-aliados/mapfre.png') }}" alt="Mapfre">
            </div>
            <div class="col-sm my-auto">
                <img src="{{ asset('/public/includes/images/logos-aliados/sonrie.png') }}" alt="Mapfre">
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-sm my-auto">
                <img src="{{ asset('/public/includes/images/logos-aliados/bac.png') }}" alt="Bac">
            </div>
            <div class="col-sm my-auto">
                <img src="{{ asset('/public/includes/images/logos-aliados/bg.png') }}" alt="Bac">
            </div>
        </div>
    </div>


    <div class="container-fluid container-comments pb-5">
        <div class="container-comments__title">
            <p class="underline">algunos comentarios sobre <span>easy.</span></p>
            <p>¿y tú qué opinas?</p>
        </div>
        <div class="container-box__one">
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/51.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Hailey Ennis </span>
                        <div class="Stars" style="--rating: 5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/14.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Batur Akan </span>
                        <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/23.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Alberte Jørgensen </span>
                        <div class="Stars" style="--rating: 3.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/45.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Oğuzhan Akman </span>
                        <div class="Stars" style="--rating: 4;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/38.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Bitlis Turkey </span>
                        <div class="Stars" style="--rating: 5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/7.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Lynn Gonzalez </span>
                        <div class="Stars" style="--rating: 2.4;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/92.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Juan Martinez </span>
                        <div class="Stars" style="--rating: 2;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/18.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Roberto Carlos </span>
                        <div class="Stars" style="--rating: 4;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
            <div class="box-easy_comments basic-drop-shadow">
                <div class="user-profile__box">
                    <div class="user-profile__image">
                        <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/18.jpg" alt="">
                    </div>
                    <div class="user-profile__name">
                        <span>Massiel Einitz </span>
                        <div class="Stars" style="--rating: 3;" aria-label="Rating of this product is 2.3 out of 5."></div>
                    </div>
                   
                </div>
                <div class="comments">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci, ratione laudantium cupiditate excepturi officia!
                </div>
            </div>
        </div>
    </div>
@endsection
