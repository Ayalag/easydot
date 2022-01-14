@extends('layouts.app')

@section('content')


    <div class="container-fluid container-cobertura pt-5">
        <div class="container container-button">
            <div class="box-bottom pt-5" id="contenidoHogar">Contendio del hogar</div>
        </div>
        <div class="container container-button">
            <div class="box-bottom pt-5" id="coberturaCompleta">Cobertura completa</div>
        </div>

    </div>

@endsection

@section('scripts')

    <script>
        /*-------------------------------*/
        /*        Cobertura              */
        /*-------------------------------*/
        document.querySelector('#contenidoHogar').addEventListener('click', function(e) {
            location.href = "/producto/hogar/hogar";
        });
        document.querySelector('#coberturaCompleta').addEventListener('click', function(e) {
            location.href = "/producto/hogar/landing";
        });
    </script>

@endsection
