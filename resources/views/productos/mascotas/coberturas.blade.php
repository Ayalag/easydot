@extends('layouts.app')

{{-- <style>
    .container-cobertura {
        height: 100vh;
    }

</style> --}}

@section('content')


    <div class="container-fluid container-cobertura pt-5">
        <div class="container container-button">
            <div class="box-bottom pt-5" id="veterinario">Seguros veterinarios</div>
        </div>

    </div>

@endsection

@section('scripts')

    <script>
        /*-------------------------------*/
        /*        Cobertura              */
        /*-------------------------------*/
        document.querySelector('#veterinario').addEventListener('click', function(e) {
            location.href = "/producto/mascotas/veterinario";
        });
    </script>

@endsection
