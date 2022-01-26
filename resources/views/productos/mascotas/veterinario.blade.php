@extends('layouts.app')

@section('content')
    <div class="container-fluid container-productos pt-5">
        <div class="container container-autos pb-5">
            <div class="soat">
                <div class="soat-slider">
                    @isset($veterinario)
                        @foreach ($veterinario as $vet)
                            {!! $vet->html !!}
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
