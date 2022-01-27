@extends('layouts.app')

@section('styles')

    <style>
        .container-registro {
            height: 100vh;
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
            top: 4rem;
            margin-right: 5rem
        }

        .card-subtitle {
            color: #ff0180 !important;
        }

        input[type="text"]::placeholder {
            /* Firefox, Chrome, Opera */
            text-align: center;
        }

    </style>

@endsection

@section('content')

    <div class="container stepper">
        <div class="row mt-5 justify-content-end">
            {{-- <div class="col-3"></div> --}}
            <div class="col-10 text-center">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active"></li>
                    <li class="active"></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container container-registro mb-5">
        @isset($cardHtml)
            {!! $cardHtml[0]->html !!}
        @endisset
        <livewire:productos.motor.registro />
    </div>

@endsection

@section('scripts')
    <script>
        let card = document.getElementsByClassName("card-container__insurance");
        for (let index = 0; index < card.length; ++index) {
            card[index].setAttribute("style", "top: 5.7rem; left: -2rem; border: none; border-radius:10px;")
            card[index].classList.add('shadow-lg');
        }

        $(window).on('load', function() {
            const tipo_id = $('#tipo').attr("data-tipo-id")
            const aseguradora_id = $('#aseguradora').attr("data-aseguradora-id")
            const aseguradora_name = $('#aseguradora').attr("data-aseguradora-name")
            const plan_id = $('#plan').attr("data-plan-id")
            const plan_name = $('#plan').attr("data-plan-name")
            const valor = $('#valor').attr("data-valor")

            Livewire.emit("getMotorPlanDetail", tipo_id, aseguradora_id, aseguradora_name, plan_id, valor,
                plan_name);
        })
    </script>
@endsection
