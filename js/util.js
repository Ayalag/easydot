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

    $('[data-toggle="offcanvas"]').click(function () {
        $("#wrapper").toggleClass("toggled");
    });


    /*==================================================================
                   [ Slick1 ]*/
    $(".wrap-slick1").each(function () {
        var wrapSlick1 = $(this);
        var slick1 = $(this).find(".slick1");

        var itemSlick1 = $(slick1).find(".item-slick1");
        var layerSlick1 = $(slick1).find(".layer-slick1");
        var actionSlick1 = [];

        $(slick1).on("init", function () {
            var layerCurrentItem = $(itemSlick1[0]).find(".layer-slick1");

            for (var i = 0; i < actionSlick1.length; i++) {
                clearTimeout(actionSlick1[i]);
            }

            $(layerSlick1).each(function () {
                $(this).removeClass($(this).data("appear") + " visible-true");
            });

            for (var i = 0; i < layerCurrentItem.length; i++) {
                actionSlick1[i] = setTimeout(
                    function (index) {
                        $(layerCurrentItem[index]).addClass(
                            $(layerCurrentItem[index]).data("appear") +
                                " visible-true"
                        );
                    },
                    $(layerCurrentItem[i]).data("delay"),
                    i
                );
            }
        });

        var showDot = false;
        if ($(wrapSlick1).find(".wrap-slick1-dots").length > 0) {
            showDot = true;
        }

        $(slick1).slick({
            pauseOnFocus: false,
            pauseOnHover: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            speed: 1000,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false,
            appendArrows: $(wrapSlick1),
            prevArrow:
                '<button class="arrow-slick1 prev-slick1"><i class="zmdi zmdi-caret-left"></i></button>',
            nextArrow:
                '<button class="arrow-slick1 next-slick1"><i class="zmdi zmdi-caret-right"></i></button>',
            dots: showDot,
            appendDots: $(wrapSlick1).find(".wrap-slick1-dots"),
            dotsClass: "slick1-dots",
            customPaging: function (slick, index) {
                var linkThumb = $(slick.$slides[index]).data("thumb");
                var caption = $(slick.$slides[index]).data("caption");
                return (
                    '<img src="' +
                    linkThumb +
                    '">' +
                    '<span class="caption-dots-slick1">' +
                    caption +
                    "</span>"
                );
            },
        });

        $(slick1).on("afterChange", function (event, slick, currentSlide) {
            var layerCurrentItem = $(itemSlick1[currentSlide]).find(
                ".layer-slick1"
            );

            for (var i = 0; i < actionSlick1.length; i++) {
                clearTimeout(actionSlick1[i]);
            }

            $(layerSlick1).each(function () {
                $(this).removeClass($(this).data("appear") + " visible-true");
            });

            for (var i = 0; i < layerCurrentItem.length; i++) {
                actionSlick1[i] = setTimeout(
                    function (index) {
                        $(layerCurrentItem[index]).addClass(
                            $(layerCurrentItem[index]).data("appear") +
                                " visible-true"
                        );
                    },
                    $(layerCurrentItem[i]).data("delay"),
                    i
                );
            }
        });
    });

    $(".menu-container").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        arrows: false,
        infinite: false,
        // centerMode: true,
        variableWidth: true,
        mobilrFirst: true,
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick",
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplaySpeed: 2000,
                    arrows: false,
                    infinite: false,
                    mobilrFirst: true,
                },
            },
        ],
    });

    $(".container-box__one").slick({
        centerMode: true,
        centerPadding: "60px",
        arrows: false,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: "40px",
                    slidesToShow: 1,
                },
            },
        ],
    });

    /*==================================================================
                   [ user Confirmation]*/
     document.querySelector('#yes_account').addEventListener('click', function (e) {
        var cAccount = document.querySelector('.container-account');
        $(cAccount).slideDown("slow");
    });
});
