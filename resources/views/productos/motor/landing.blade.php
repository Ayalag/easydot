@extends('layouts.app')

@section('content')
    
<div class="container container-landing pt-5">
    <div class="container-landing__descripciones">
        <div class="container-landing__titulo">
            Disfruta de kilómetros de tranquilidad al asegurar tu auto con una póliza con cobertura completa<span style="color:#009ee2">.</span>
        </div>
        <div class="container-landing__subtitulo-1 mt-2">
            Estas pólizas incluyen coberturas por daños a terceros y también las que protegen tu auto. <br>
            Además, podrás contar con innumerbales beneficios y valores agregados.
        </div>
        <div class="container-landing__subtitulo-2">
            <p>No esperes más y solicita tu cotización. </p>
            <p>¡Ya verás lo <span>easy </span>que será!</p>
        </div>
        <div class="container container-image__carro">
            <img src="{{ asset('/public/includes/images/landings/autos.png') }}" alt="" srcset="">
        </div>
    </div>
    <div class="container container-formulario">
        <x-productos-contacto/>
    </div>
</div>
@endsection