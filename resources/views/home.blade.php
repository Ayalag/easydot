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

    <div class="container-fluid blue-square__container">
        <div class="blue-square__container__container">
            <div class="blue-square__container__title">
                ¡Empecemos Hoy!
            </div>
            <div class="blue_square__container__btn">
                <button type="submit" class="btn">iniciar sesión</button>
                <button type="submit" class="btn">crear cuenta</button>
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
                    <a href="/autos">ver planes</a>
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
                    <a href="/hogar">ver planes</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-category-logo persona">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/personas2.png') }}"
                        alt="">
                </div>
                <div class="box-category__title">
                    <h1>personas</h1>
                </div>
                <div class="box-category__button">
                    <a href="/persona">ver planes</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-category-logo mascota">
                    <img class="box-category-logo__image" src="{{ asset('/public/includes/images/mascotas2.png') }}"
                        alt="">
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

    <div class="container container-step-to-buy mb-5">
        <div class="row step-to-buy__title">
            <div class="col-md-12 col-sm-12 col-xs-12">
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
                            Selecciona la categoria del 
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
                                electronico
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
        <div class="container-super__subtitle">
            <p>sin papeleo<span>.</span> sin estrés</p>
        </div>
    </div>

    <div class="container-fluid container-comments pb-5">
        <div class="container-comments__title">
            <p class="underline">comentarios que nos hacen sentir orgullosos</p>
            <p>¿y tú qué opinas?</p>
        </div>
        <div class="container-logo-comments">
            <div class="circle"></div>
            <div class="container-persona_logo">
                <img src="public/includes/images/persona_logo.png" alt="">
            </div>
            <div class="container-box__one">
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle " src="https://randomuser.me/api/portraits/med/women/51.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Hailey Ennis </span>
                            <div class="Stars" style="--rating: 5;"
                                aria-label="Rating of this product is 2.3 out of 5.">
                            </div>
                        </div>
                    </div>
                    <div class="comments">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                        ratione
                        laudantium cupiditate excepturi officia!
                    </div>
                </div>
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/14.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Batur Akan </span>
                            <div class="Stars" style="--rating: 4.5;"
                                aria-label="Rating of this product is 2.3 out of 5.">
                            </div>
                        </div>

                    </div>
                    <div class="comments">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                        ratione
                        laudantium cupiditate excepturi officia!
                    </div>
                </div>
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/23.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Alberte Jørgensen </span>
                            <div class="Stars" style="--rating: 3.3;"
                                aria-label="Rating of this product is 2.3 out of 5.">
                            </div>
                        </div>

                    </div>
                    <div class="comments">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                        ratione
                        laudantium cupiditate excepturi officia!
                    </div>
                </div>
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/45.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Oğuzhan Akman </span>
                            <div class="Stars" style="--rating: 4;"
                                aria-label="Rating of this product is 2.3 out of 5.">
                            </div>
                        </div>

                    </div>
                    <div class="comments">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                        ratione
                        laudantium cupiditate excepturi officia!
                    </div>
                </div>
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/38.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Bitlis Turkey </span>
                            <div class="Stars" style="--rating: 5;"
                                aria-label="Rating of this product is 2.3 out of 5.">
                            </div>
                        </div>

                    </div>
                    <div class="comments">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                        ratione
                        laudantium cupiditate excepturi officia!
                    </div>
                </div>
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/7.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Lynn Gonzalez </span>
                            <div class="Stars" style="--rating: 2.4;"
                                aria-label="Rating of this product is 2.3 out of 5.">
                            </div>
                        </div>

                    </div>
                    <div class="comments">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                        ratione
                        laudantium cupiditate excepturi officia!
                    </div>
                </div>
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/92.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Juan Martinez </span>
                            <div class="Stars" style="--rating: 2;"
                                aria-label="Rating of this product is 2.3 out of 5.">
                            </div>
                        </div>

                    </div>
                    <div class="comments">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                        ratione
                        laudantium cupiditate excepturi officia!
                    </div>
                </div>
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/men/18.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Roberto Carlos </span>
                            <div class="Stars" style="--rating: 4;"
                                aria-label="Rating of this product is 2.3 out of 5.">
                            </div>
                        </div>

                    </div>
                    <div class="comments">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quam placeat! Eveniet adipisci,
                        ratione
                        laudantium cupiditate excepturi officia!
                    </div>
                </div>
                <div class="box-easy_comments basic-drop-shadow">
                    <div class="user-profile__box">
                        <div class="user-profile__image">
                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/med/women/18.jpg" alt="">
                        </div>
                        <div class="user-profile__name">
                            <span>Massiel Einitz </span>
                            <div class="Stars" style="--rating: 3;"
                                aria-label="Rating of this product is 2.3 out of 5.">
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
        <div class="container-aliados_title pt-5">
            <p>Trabajamos y estamos respaldados por las mejores compañías del</p>
            <p>mercado panameño</p>
        </div>
        <div class="container container_aliados__image">
            <div class="row">
                <div class="col-sm-4 col-4 my-auto sura">
                    <img src="{{ asset('/public/includes/images/logos-aliados/sura.png') }}" alt="Sura">
                </div>
                <div class="col-sm-4 col-4 my-auto mapfre">
                    <img src="{{ asset('/public/includes/images/logos-aliados/mapfre.png') }}" alt="Mapfre">
                </div>
                <div class="col-sm-4 col-4 my-auto sonrie">
                    <img src="{{ asset('/public/includes/images/logos-aliados/sonrie.png') }}" alt="Panama Sonrie">
                </div>
            </div>
        </div>
    </div>
@endsection
