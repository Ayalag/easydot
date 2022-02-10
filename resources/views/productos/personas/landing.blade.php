@extends('layouts.app')

@section('content')

    <div class="container container-landing pt-5">
        <div class="container-landing__descripciones">
            <div class="container-landing__personas__titulo">
                Protege tu bienestar y el de tus seres queridos con las bondades que una póliza de vida puede ofrecer<span
                    style="color:#009ee2">.</span>
            </div>
            <div class="container-landing__subtitulo-1 mt-3">
                <p>Sabemos que no podemos predecir el futuro, pero si podemos planificar como proteger a nuestros<br>
                    seres queridos y hacerle frente a situaciones inesperadas, para esto las pólizas de vida son una de las
                    mejores opciones.
                </p>
                <br>
                <p>Siempre hemos pensado que estos seguros solo pueden ser utilizados al finalizar nuestra vida, pero, <br>
                    con el pasar del tiempo las pólizas de vida han ido evolucionando para poder brindarte beneficios y <br>
                    valores agreagdis que pueden ser utilizados en cualquier momento.
                </p>
                <br>
                <p>Recuerda que estos seguros también se utulizan para respaldar compromisos financieros, como <br>
                    hipotecas y otros tipos de prestamos.
                </p>

            </div>
            <div class="container-landing__hogar__subtitulo-2">
                <p>No esperes más y solicta tu cotización. </p>
                <p>¡Ya verás lo <span>easy </span>que será!</p>
            </div>
            <div class="container container-image__persona">
                <img src="{{ asset('/public/includes/images/landings/persona.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="container container-formulario">
            <livewire:mails.product-contact-us />
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(window).on('load', function() {
            let tipo = 'Persona'
            Livewire.emit("landingArea", tipo);
        })
    </script>
@endsection
