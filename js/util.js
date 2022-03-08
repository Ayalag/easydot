$(document).ready(function () {
    "use strict";

    /*[ Load page ]
            ===========================================================*/
    $(".animsition").animsition({
        inClass: "fade-in",
        outClass: "fade-out",
        inDuration: 1500,
        outDuration: 800,
        linkElement: ".animsition-link",
        // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
        loading: true,
        loadingParentElement: "html", //animsition wrapper element
        loadingClass: "animsition-loading",
        loadingInner: '<div class="loader05"></div>', // e.g '<img src="loading.svg" />'
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: ["animation-duration", "-webkit-animation-duration"],
        // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        overlay: false,
        overlayClass: "animsition-overlay-slide",
        overlayParentElement: "html",
        transition: function (url) {
            window.location.href = url;
        },
    });

    /*[ Sidebar ]
            ===========================================================*/
    var trigger = $(".hamburger"),
        overlay = $(".overlay"),
        isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });
    overlay.click(function () {
        overlay_cross();
    });

    function hamburger_cross() {
        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass("is-open");
            trigger.addClass("is-closed");
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass("is-closed");
            trigger.addClass("is-open");
            isClosed = true;
        }
    }

    function overlay_cross() {
        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass("is-open");
            trigger.addClass("is-closed");
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass("is-closed");
            trigger.addClass("is-open");
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $("#wrapper").toggleClass("toggled");
    });
    overlay.click(function () {
        $("#wrapper").toggleClass("toggled");
    });
    /*[ Sidebar ]
        ===========================================================*/


    // Hero slider
    /*==============================================================*/

    var sliderTimer = 5000;
    var beforeEnd = 500;
    var $bannerSlider = jQuery('.banner-slider');
    var $bannerFirstSlide = $('div.banner-slide:first-child');

    $bannerSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $bannerFirstSlide.find('[data-animation]');
        slideanimate($firstAnimatingElements);
    });
    $bannerSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('div.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        slideanimate($animatingElements);
    });

    $bannerSlider.slick({
        pauseOnFocus: false,
        pauseOnHover: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        speed: 1000,
        infinite: true,
        autoplay: true,
        autoplaySpeed: sliderTimer,
        arrows: false,
        adaptiveHeight: true,
    });

    function slideanimate(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function () {
                $this.removeClass($animationType);
            });
        });
    }

    function progressBar() {
        $('.slider-progress').find('span').removeAttr('style');
        $('.slider-progress').find('span').removeClass('active');
        setTimeout(function () {
            $('.slider-progress').find('span').css('transition-duration', (sliderTimer / 1000) + 's').addClass('active');
        }, 100);
    }
    progressBar();
    $bannerSlider.on('beforeChange', function (e, slick) {
        progressBar();
    });
    $bannerSlider.on('afterChange', function (e, slick, nextSlide) {
        titleAnim(nextSlide);
    });

    // Title Animation JS
    function titleAnim(ele) {
        $bannerSlider.find('.slick-current').find('h1').addClass('show');
        setTimeout(function () {
            $bannerSlider.find('.slick-current').find('h1').removeClass('show');
        }, sliderTimer - beforeEnd);
    }
    titleAnim();

    // // data color
    // jQuery("[data-color]").each(function () {
    // 		jQuery(this).css('color', jQuery(this).attr('data-color'));
    // });
    // // data background color
    // jQuery("[data-bgcolor]").each(function () {
    // 	jQuery(this).css('background-color', jQuery(this).attr('data-bgcolor'));
    // });


    /*==================================================================
                   [ Slick1 ]*/


    $(".menu-container").slick({
        // slidesToShow: 2,
        // slidesToScroll: 1,
        // autoplaySpeed: 2000,
        // arrows: false,
        // infinite: false,
        // centerMode: true,
        variableWidth: true,
        // mobileFirst: true,
        responsive: [{
                breakpoint: 9999,
                settings: "unslick",
            },
            {
                breakpoint: 767,
                settings: {
                    // slidesToShow: 2,
                    slidesToScroll: 1,
                    // autoplaySpeed: 2000,
                    arrows: false,
                    variableWidth: true,
                    infinite: false,
                    mobileFirst: true,
                },
            },
        ],
    });

    $(".container-box__one").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        arrows: false,
        speed: 8000,
        pauseOnHover: true,
        cssEase: "linear",
        infinite: true,
        variableWidth: true,
    });

    $(".soat-slider, .soat-slider-motor").slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<button class="slick-prev slick-arrow"></button>',
        nextArrow: '<button class="slick-next slick-arrow"></button>',
        responsive: [{
                breakpoint: 960,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
    $(".container-general__info_partners").slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        // prevArrow: '<button class="slick-prev slick-arrow"></button>',
        // nextArrow: '<button class="slick-next slick-arrow"></button>',
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 425,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    /*==================================================================
    [ ageCalculator ]*/

});
