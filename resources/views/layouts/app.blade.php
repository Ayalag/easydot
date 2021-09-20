<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EasyDot') }}</title>

    <!--===============================================================================================-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("includes/vendor/animsition/css/animsition.min.css") }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <!--===============================================================================================-->
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
        <!--===============================================================================================-->
</head>



<body>

    <div>
        @include('layouts.header')
    </div>

    <div class="monster-banner">
        @yield('content')
    </div>


    <!--===============================================================================================-->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/util.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset("includes/vendor/animsition/js/animsition.min.js") }}"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
