@extends('layouts.app')

@section('styles')

<style>
    .container-registro {
        height: 1060px;
        justify-content: center;
        /* position: relative; */
    }

    .btn-comprar {
        display: none
    }

    .card-container__insurance {
        height: 570px !important;
    }

    .condicion_poliza {
        position: relative;
        top: 12rem;
        margin-right: 5rem;
        margin-top: -6.5rem !important;
    }

    .card-subtitle {
        color: #ff0180 !important;
    }

    input[type="text"]::placeholder {
        /* Firefox, Chrome, Opera */
        text-align: center;
    }

    input {
        text-align: center;
    }

    @media screen and (max-width: 768px) {
        .input-group {
            justify-content: center;
        }
    }

    @media screen and (max-width: 425px) {

        .stepper,
        /* .container-registo__datos-header, */
        .condicion_poliza,
        .card-list__items{
            display: none !important;
        }

        /* .container .card-subtitle+div {
            display: none
        } */

        .container-registro {
            flex-direction: column;
            height: auto;
        }

        .card-container__insurance {
            height: auto !important;
            width: auto !important;
        }

        .card-subtitle {
            font-size: 1.5rem
        }

        .card-text {
            font-size: 1rem
        }

        .grouping_price {
            position: relative !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 1rem !important;
            width: auto !important;
            right: 10px;
            bottom: -10px !important;
        }

        .grouping_price div.row {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            font-size: 1.5rem !important;
        }

        .price {
            font-weight: 600
        }

        .annuity {
            margin-right: 1px;
        }
    }

</style>

@section('content')

<div class="container container-registro mb-5">
    @isset($cardHtml)
    {!! $cardHtml[0]->html !!}
    @endisset
    <livewire:productos.hogar.registro />
</div>
@endsection

@section('scripts')
<script>
    let card = document.getElementsByClassName("card-container__insurance");
    for (let index = 0; index < card.length; ++index) {
        if ($(window).width() >= 768) {
            card[index].setAttribute("style", "top: 6.7rem; left: -2rem; border: none; border-radius:10px;")
        } else {
            card[index].setAttribute("style", "border: none; border-radius:10px;")
        }
        card[index].classList.add('shadow-lg');
    }

    $(window).on('load', function () {

        const data_pk_id = $('#pk').attr("data-pk-id")
        const aseguradora_id = $('#aseguradora').attr("data-aseguradora-id")
        const aseguradora_name = $('#aseguradora').attr("data-aseguradora-name")
        const tipo_id = $('#tipo').attr("data-tipo-id")
        const tipo_name = $('#tipo').attr("data-tipo-name")
        const plan_name = $('#plan').attr("data-plan-name")
        const valor = $('#valor').attr("data-valor")

        Livewire.emit("getInfoInsuranceHogar", data_pk_id, aseguradora_id, aseguradora_name, tipo_id, tipo_name, plan_name, valor);
    })

    document.getElementById("birthdayYear").addEventListener("change", ageCalculator);

    function ageCalculator() {

        const today = new Date();

        let birthdayDay = document.getElementById("birthdayDay").value;
        let birthdayMonth = document.getElementById("birthdayMonth").value;
        let birthdayYear = document.getElementById("birthdayYear").value;

        let birth = new Date(parseInt(birthdayMonth) + '/' + parseInt(birthdayDay) + '/' + parseInt(birthdayYear));

        let diff = today.getTime() - birth.getTime();

        let age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));

        if (age >= 18) {
            document.getElementById("ageError").style.display = "none";
            document.getElementById('process').removeAttribute('disabled');
        } else {
            document.getElementById("ageError").style.display = "block";
            document.getElementById('process').disabled = true;
        }
    }

</script>
@endsection
