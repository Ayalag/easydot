@extends('layouts.app')

@section('content')
<!-- Slider -->
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1"
                style="background-image: url({{ asset("includes/images/slider/insurance1.jpg") }})">
            </div>

            <div class="item-slick1"
                style="background-image:  url({{ asset("includes/images/slider/insurance2.jpg") }})">

            </div>

            <div class="item-slick1"
                style="background-image: url({{ asset("includes/images/slider/insurance3.jpg") }})">
            </div>
        </div>
    </div>
</section>
@endsection
