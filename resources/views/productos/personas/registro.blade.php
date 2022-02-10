@extends('layouts.app')

@section('styles')

    <style>
        .container-registro {
            justify-content: center;
        }

        .btn-comprar {
            display: none
        }

        .condicion_poliza {
            position: relative;
            top: -2rem;
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
        <livewire:productos.persona.registro />
    </div>

@endsection

@section('scripts')
    <script>
        let card = document.getElementsByClassName("card-container__insurance");
        for (let index = 0; index < card.length; ++index) {
            if ($(window).width() >= 768) {
                card[index].setAttribute("style", "left: -2rem; border: none; border-radius:10px;")
            } else {
                card[index].setAttribute("style", "border: none; border-radius:10px;")
            }
            card[index].classList.add('shadow-lg');
        }

        // const insurance = $('input[name="seguro"]').val();
        // const type = $('input[name="tipo"]').val();
        // const amount = $('input[name="valor"]').val();

        // $(window).on('load', function() {
        //     Livewire.emit("getInfoInsurance", insurance, type, amount);
        // })
    </script>
@endsection
