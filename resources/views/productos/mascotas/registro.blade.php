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
            height: 570px !important;
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
            .card-detail{
                display: none !important;
            }

            .container .card-subtitle+div
            {
                display: none
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
                position: relative !important;
                display: flex;
                flex-direction:column;
                align-items: center;
                font-size: 1rem !important;
                width: auto !important;
                right: 10px;
                bottom: -10px !important;
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

            /* .card-text.easyBlue600::before {
                content: 'Daños a terceros';
                display: block;
                color: var(--easyblue);
            } */
        }


    </style>

@section('content')

    <div class="container container-registro mb-5">
        @isset($cardHtml)
            {!! $cardHtml[0]->html !!}
        @endisset
        <livewire:productos.mascotas.registro />
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

        $(window).on('load', function() {
            
            const data_pk_id = $('#pk').attr("data-pk-id")
            const tipo_id = $('#tipo').attr("data-tipo-id")
            const tipo_name = $('#tipo').attr("data-tipo-name")
            const plan_name = $('#plan').attr("data-plan-name")
            const valor = $('#valor').attr("data-valor")

            Livewire.emit("getInfoInsuranceVet", data_pk_id, tipo_id, tipo_name, plan_name, valor);
        })
    </script>
@endsection
