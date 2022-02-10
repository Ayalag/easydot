@extends('layouts.app')

@section('content')

    <div class="container-fluid container-cobertura pt-5">
        <div class="container container-button">
            <div class="box-bottom pt-5" id="danosaterceros">Daños a terceros
                <div class="muted-buttons text-muted pt-1">SOAT</div>
            </div>
            <div class="box-bottom pt-5" id="coberturacompleta">Cobertura completa
            </div>
        </div>

    </div>

@endsection

@section('scripts')

    <script>
        /*-------------------------------*/
        /*        Cobertura              */
        /*-------------------------------*/
        document.querySelector('#danosaterceros').addEventListener('click', function(e) {
            location.href = "/producto/motor/motor";
        });
        document.querySelector('#coberturacompleta').addEventListener('click', function(e) {
            location.href = "/producto/motor/landing";
        });
    </script>

@endsection
