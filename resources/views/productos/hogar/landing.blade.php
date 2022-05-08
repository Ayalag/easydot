@extends('layouts.app')

@section('content')

    <div class="container container-landing landing-movil pt-5">
        <div class="container-landing__descripciones">
            <div class="container-landing__titulo">
                Vive la paz y la tranquilidad que genera contar con una póliza con cobertura completa para el hogar<span
                    style="color:#009ee2">.</span>
            </div>
            <div class="container-landing__subtitulo-1 mt-3">
                <p>Estas pólizas también conocidas como pólizas multiprotección son seguros diseñados para cubrir <br>
                    y proteger la estructura de tu hogar ya sea una casa o un apartamento, esto incluye paredes,<br>
                    pisos y techos; además podrás incluir coberturas para el contenido del hogar como muebles, <br>
                    electrodomésticos, equipos electrónicos, entre otros</p>
                <br>
                <p>Algunas pólizas cuentan con grandes beneficios adicionales, como coberturas para los <br>
                    integrantes de la familia, incluyendo mascotas.
                </p>

            </div>
            <div class="container-landing__hogar__subtitulo-2">
                <p>No esperes más y solicita tu cotización. </p>
                <p>!Ya verás lo <span>easy </span>que será¡</p>
            </div>
            <div class="container container-image__hogar">
                <img class="imgResponsive" src="{{ asset('/public/includes/images/landings/hogar.png') }}" alt="" srcset="">
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
            let tipo = 'Hogar'
            Livewire.emit("landingArea", tipo);
        })
    </script>
@endsection
