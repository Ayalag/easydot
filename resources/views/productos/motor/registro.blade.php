@extends('layouts.app')

@section('styles')

    <style>
        .btn-comprar {
            display: none
        }

        .card-container__insurance {
            height: 483px !important;
        }

        .condicion_poliza {
            position: relative;
            top: 9rem;
            margin-right: 5rem
        }

    </style>


@endsection

@section('content')

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
            card[index].setAttribute("style", "top: 11rem; left: -2rem")
        }
    </script>
@endsection
