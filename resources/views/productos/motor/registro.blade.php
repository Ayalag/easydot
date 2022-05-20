@extends('layouts.app')

@section('styles')

<style>
    .container-registro {
        /* height: 100vh; */
        justify-content: center;
        /* position: relative; */
    }

    .btn-comprar {
        display: none
    }

    .card-container__insurance {
        height: 474px !important;
    }

    .condicion_poliza {
        position: relative;
        top: 12rem;
        margin-right: 5rem
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
        .container-registo__datos-header,
        .condicion_poliza,
        .card-list__items,
        .card-detail {
            display: none;
        }

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
            display: flex;
            align-items: center;
            font-size: 1rem !important;
            width: auto;
            right: 10px;
        }

        .grouping_price div.row {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            font-size: 1rem !important;
        }

        .price {
            font-weight: 600
        }

        .annuity {
            margin-right: 1px;
        }

        .card-text.easyBlue600::before {
            content: 'Daños a terceros';
            display: block;
            color: var(--easyblue);
        }
    }

</style>

@endsection

@section('content')
<div class="container container-registro mb-5">
    
    @isset($cardHtml)
    {!! $cardHtml[0]->html !!}
    @endisset
    @if ($clase == 'auto')
       <livewire:productos.motor.registro />
    @else
        <livewire:productos.motor.registro-moto />
    @endif
    
</div>

@endsection

@section('scripts')
<script>
    let card = document.getElementsByClassName("card-container__insurance");
    for (let index = 0; index < card.length; ++index) {
        if ($(window).width() >= 768) {
            card[index].setAttribute("style", "top: 13.7rem; left: -2rem; border: none; border-radius:10px;")
        } else {
            card[index].setAttribute("style", "border: none; border-radius:10px;")
        }
        card[index].classList.add('shadow-lg');
    }

    $(window).on('load', function () {
        const tipo_id = $('#tipo').attr("data-tipo-id")
        const aseguradora_id = $('#aseguradora').attr("data-aseguradora-id")
        const aseguradora_name = $('#aseguradora').attr("data-aseguradora-name")
        const plan_id = $('#plan').attr("data-plan-id")
        const plan_name = $('#plan').attr("data-plan-name")
        const valor = $('#valor').attr("data-valor")

        Livewire.emit("getMotorPlanDetail", tipo_id, aseguradora_id, aseguradora_name, plan_id, valor,
            plan_name);
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
