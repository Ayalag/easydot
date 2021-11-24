@extends('layouts.app')

@section('content')


    <div class="container-fluid container-cobertura pt-5">
        <div class="container-check">
            <div class="container container-daños__terceros mb-3  shadow-lg bg-white rounded">
                <div class="form-check form-check-inline">
                    <label class="form-check-label underline" for="terceros">daños a terceros</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="terceros" value="option1">
                </div>
            </div>
            <div class="container container-cobertura__completa  shadow-lg bg-white rounded">
                <div class="form-check form-check-inline">
                    <label class="form-check-label underline" for="completa">cobertura completa</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="completa" value="option1">
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script>
    /*-------------------------------*/
    /*        Cobertura              */
    /*-------------------------------*/


    document.querySelector('#terceros').addEventListener('click', function (e) {
        location.href = "/producto/motor";
    });

    document.querySelector('#completa').addEventListener('click', function (e) {
        location.href = "/producto/motor/landing";
    });

</script>

@endsection

