@extends('layouts.app')

@section('content')

<div class="container-fluid container-cobertura-mascotas pt-5">
    <div class="container container-button">
        <div class="box-bottom pt-5" id="veterinario">Seguros para mascotas</div>
    </div>
    <div class="container container__coming-soon d-flex justify-content-center pt-2">
        Próximamente <span class="easyLigth800">.</span>
    </div>
    <div class="container container__coming-soon__img d-flex justify-content-center pt-4">
        <div>
            <img src="{{ asset('/public/includes/images/landings/mascotas2.png') }}" style="width: 100%; position: relative; bottom:-5px">
        </div>
        <div>
            <img src="{{ asset('/public/includes/images/landings/mascotas1.png') }}" style="width: 100%">
        </div>
    </div>

</div>

@endsection

@section('scripts')

<script>
    /*-------------------------------*/
    /*        Cobertura              */
    /*-------------------------------*/
    document.querySelector('#veterinario').addEventListener('click', function (e) {
        location.href = "#";
    });

</script>

@endsection
