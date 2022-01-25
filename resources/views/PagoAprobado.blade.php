@extends('layouts.app')

@section('content')

    <div class="container container-payment__accepted">
        <div class="container-payment__accepted--title pt-5">
            <span>¡easy!</span>
        </div>
        <div class="container-payment__accepted--image pt-3">
            <img src="{{ asset('/public/includes/images/paymentAccepted.png') }}" alt="">
        </div>
        <div class="container-payment__accepted--subtitle pt-3">
            <span>Compra realizada</span>
        </div>
        <div class="container-payment__accepted--legend pt-3">
            <p>Transación N°0000000</p>
            <p class="pt-2">Muchas gracias por tu compra. <br>
                Hemos enviado un correo electrónico a la <br>
                dirección que nos indicaste en tus datos, por <br>
                lo que en un instante podr'as verlo en tu <br>
                bandeja de entrada.</p>
        </div>
    </div>

@endsection
