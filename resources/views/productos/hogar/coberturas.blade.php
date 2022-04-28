@extends('layouts.app')

@section('content')

<style>
    .container-cobertura{
        height: 100vh;
    }
</style>

    <div class="container-fluid container-cobertura pt-3">
        <div class="container container-button">
            <div class="box-bottom" id="contenidoHogar">Contenido del hogar</div>
            
        </div>
        <div class="container container-button">
            <div class="box-bottom" id="coberturaCompleta">Cobertura completa
                <div class="muted-buttons text-muted pt-1">Estructura del hogar y contenido</div>
            </div>
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
