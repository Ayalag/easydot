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
            top: 4rem;
            margin-right: 5rem
        }

        .card-subtitle {
            color: #ff0180 !important;
        }

        input[type="text"]::placeholder,
        input[type="file"]::placeholder,
        textarea::placeholder {
            /* Firefox, Chrome, Opera */
            text-align: center;
        }

    </style>

@section('content')
    <div class="container stepper">
        <div class="row mt-5 justify-content-end">
            {{-- <div class="col-3"></div> --}}
            <div class="col-12 text-center">
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
        <livewire:productos.mascotas.registro />
    </div>
@endsection

@section('scripts')
    <script>
        let card = document.getElementsByClassName("card-container__insurance");
        for (let index = 0; index < card.length; ++index) {
            card[index].setAttribute("style", "top: 5.7rem; left: -2rem; border: none; border-radius:10px;")
            card[index].classList.add('shadow-lg');
        }

        const clase = $('input[name="clase"]').val();
        const insurance = $('input[name="seguro"]').val();
        const type = $('input[name="tipo"]').val();
        const amount = $('input[name="valor"]').val();

        $(window).on('load', function() {
            Livewire.emit("getInfoInsuranceVet", insurance, type, amount, clase);
        })
    </script>
@endsection
