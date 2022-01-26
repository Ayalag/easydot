@extends('layouts.app')

@section('content')
    <div class="container-fluid container-productos pt-5">
        <div class="container container-autos pb-5">
            <div class="soat">
                <div class="soat-slider">
                    @isset($er)
                        @foreach ($er as $e)
                            {!! $e->html !!}
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
