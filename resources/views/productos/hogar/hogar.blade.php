@extends('layouts.app')

@section('content')
    <div class="container container-hogar p-3">
        <div class="container-hogar__title ">
            <p class="underline easyBlue800 p-3">hogar</p>
        </div>
        <div class="container container-hogar__subtitle shadow-lg bg-white rounded">
            <p>contenido del hogar</p>
        </div>
        <div class="container-hogar__subtitle-2 p-4">
            Asegura tus pertenencias del hogar como: muebles, electrodomésticos,<br> equipos electrónicos, entre
            otros.
        </div>
    </div>
    <div class="container-fluid container-productos">
        <div class="container container-autos pb-5">
            <div class="soat">
                <div class="soat-slider">
                    @isset($hogares)
                    @foreach ($hogares as $hogar)
                        {!! $hogar->html !!}
                    @endforeach
                @endisset

                </div>
            </div>
        </div>
    </div>
@endsection
