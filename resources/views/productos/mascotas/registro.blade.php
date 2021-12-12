@extends('layouts.app')

@section('content')

<div class="container stepper__mascotas">
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col-12 col-md-8 offset-md-4 col-lg-10 offset-lg-2 col-xl-12 text-center">
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
        <div class="col-12 col-md-8 offset-md-4 col-lg-10 offset-lg-2 col-xl-12 text-center">
            <div class="registro-datos__title__mascotas">
                <p>¡ya falta muy poco!</p>
            </div>
            <div class="registro-datos__subtitle__mascotas">
                <p class="underline">datos personales</p>
            </div>
        </div>
    </div>
</div>

<div class="container container-identity__pets">
    <div class="container-card__selected"></div>
    <div class="container-icon__pet">
        <div class="pet__dog">
            <img src="{{ asset('/public/includes/images/registro/mascotas/perro.png') }}" alt="">
            <div class="form-check form-check-inline pt-2 pl-4">
                <label class="form-check-label pr-2" for="inlineRadioPerro">perro</label>
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="pet__dog" value="dog">
            </div>
        </div>
        <div class="pet__cat">
            <img src="{{ asset('/public/includes/images/registro/mascotas/gato.png') }}" alt="">
            <div class="form-check form-check-inline pt-2 pl-4">
                <label class="form-check-label pr-2" for="inlineRadioGato">gato</label>
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="pet__gato" value="gato">
            </div>
        </div>
    </div> 
</div>

@endsection