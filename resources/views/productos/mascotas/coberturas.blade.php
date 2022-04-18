@extends('layouts.app')

{{-- <style>
    .container-cobertura {
        height: 50vh !important;
    }

</style> --}}

@section('content')


    <div class="container-fluid container-cobertura pt-5">
        <div class="container container-button">
            <div class="box-bottom pt-5" id="veterinario">Seguros para mascotas</div>
        </div>
        <div class="container container__coming-soon d-flex justify-content-center pt-2">
            Próximamente <span class="easyLigth800">.</span>
        </div>
        <div class="container container__coming-soon__img d-flex justify-content-center pt-2">
            
        </div>

    </div>

@endsection

@section('scripts')

    <script>
        /*-------------------------------*/
        /*        Cobertura              */
        /*-------------------------------*/
        document.querySelector('#veterinario').addEventListener('click', function(e) {
            location.href = "#";
        });
    </script>

@endsection
