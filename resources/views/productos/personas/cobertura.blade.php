@extends('layouts.app')

@section('content')


    <div class="container-fluid container-cobertura pt-5">
        <div class="container container-button">
            <div class="box-bottom pt-5" id="er">Emergencias médicas
                <div class="muted-buttons text-muted pt-1">Accidentes Personales</div>
            </div>
            <div class="box-bottom p-4" id="erm">Emergencias médicas Motorizados
                <div class="muted-buttons text-muted pt-1">Accidentes Personales</div>
            </div>
            <div class="box-bottom p-5" id="lifeinsurance">Seguros de vida</div>
            <div class="box-bottom p-5" id="dental">Planes dentales</div>
        </div>

    </div>

@endsection

@section('scripts')

    <script>
        /*-------------------------------*/
        /*        Cobertura              */
        /*-------------------------------*/
        document.querySelector('#er').addEventListener('click', function(e) {
            location.href = "/producto/personas/er";
        });
        document.querySelector('#erm').addEventListener('click', function(e) {
            location.href = "/producto/personas/erm";
        });
        document.querySelector('#lifeinsurance').addEventListener('click', function(e) {
            location.href = "/producto/personas/landing";
        });
        document.querySelector('#dental').addEventListener('click', function(e) {
            location.href = "/producto/personas/dental";
        });
    </script>

@endsection
