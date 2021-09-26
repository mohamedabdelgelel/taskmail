(function ($) {
    "use strict";

    /*-------------------------------------
        Contact Form initiating
    -------------------------------------*/
    var contactForm = $('#contact-form');
    if (contactForm.length) {
        contactForm.validator().on('submit', function (e) {
            var $this = $(this),
                $target = contactForm.find('.form-response');
            if (e.isDefaultPrevented()) {
                $target.html("<div class='alert alert-danger'><p>Please select all required field.</p></div>");
            } else {
                $.ajax({
                    url: "vendor/php/form-process.php",
                    type: "POST",
                    data: contactForm.serialize(),
                    beforeSend: function () {
                        $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
                    },
                    success: function (response) {
                        var res = JSON.parse(response);
                        console.log(res);
                        if (res.success) {
                            $this[0].reset();
                            $target.html("<div class='alert alert-success'><p>Message has been sent successfully.</p></div>");
                        } else {
                            if (res.message.length) {
                                var messages = null;
                                res.message.forEach(function (message) {
                                    messages += "<p>" + message + "</p>";
                                });
                                $target.html("<div class='alert alert-success'><p>" + messages + "</p></div>");
                            }
                        }
                    },
                    error: function () {
                        $target.html("<div class='alert alert-success'><p>Error !!!</p></div>");
                    }
                });
                return false;
            }
        });
    }

    /*-------------------------------------
    Section background image
    -------------------------------------*/
    $("[data-bg-image]").each(function () {
        var img = $(this).data("bg-image");
        $(this).css({
            backgroundImage: "url(" + img + ")"
        });
    });

    /*-------------------------------------
    Page Preloader
    -------------------------------------*/
    $("#preloader").fadeOut("slow", function () {
        $(this).remove();
    });

    /*---------------------------------------
    On Click Section Switch
    --------------------------------------- */
    $('[data-type="section-switch"]').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            if (target.length > 0) {

                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    /*-------------------------------------
    Offcanvas Menu activation code
    -------------------------------------*/
    $('#wrapper').on('click', '.offcanvas-menu-btn', function (e) {
        e.preventDefault();
        var $this = $(this),
            wrapper = $(this).parents('body').find('>#wrapper'),
            wrapMask = $('<div />').addClass('offcanvas-mask'),
            offCancas = $('#offcanvas-wrap'),
            position = offCancas.data('position') || 'left';

        if ($this.hasClass('menu-status-open')) {
            wrapper.addClass('open').append(wrapMask);
            $this.removeClass('menu-status-open').addClass('menu-status-close');
            offCancas.css({
                'transform': 'translateX(0)'
            });
        } else {
            removeOffcanvas();
        }

        function removeOffcanvas() {
            wrapper.removeClass('open').find('> .offcanvas-mask').remove();
            $this.removeClass('menu-status-close').addClass('menu-status-open');
            if (position === 'left') {
                offCancas.css({
                    'transform': 'translateX(-105%)'
                });
            } else {
                offCancas.css({
                    'transform': 'translateX(105%)'
                });
            }
        }
        $(".offcanvas-mask, .offcanvas-close").on('click', function () {
            removeOffcanvas();
        });

        return false;
    });

    /*-------------------------------------
    On Scroll 
    -------------------------------------*/
    $(window).on('scroll', function () {

        // Back Top Button
        if ($(window).scrollTop() > 500) {
            $('.scrollup').addClass('back-top');
        } else {
            $('.scrollup').removeClass('back-top');
        }
        // Sticky Header
        if ($('body').hasClass('sticky-header')) {
            var stickyPlaceHolder = $("#rt-sticky-placeholder"),
                menu = $("#header-menu"),
                menuH = menu.outerHeight(),
                topHeaderH = $('#header-topbar').outerHeight() || 0,
                middleHeaderH = $('#header-middlebar').outerHeight() || 0,
                targrtScroll = topHeaderH + middleHeaderH;
            if ($(window).scrollTop() > targrtScroll) {
                menu.addClass('rt-sticky');
                stickyPlaceHolder.height(menuH);
            } else {
                menu.removeClass('rt-sticky');
                stickyPlaceHolder.height(0);
            }
        }
    });

    /*-------------------------------------
    MeanMenu activation code
    --------------------------------------*/
    if ($.fn.meanmenu) {
        $('nav#dropdown').meanmenu({
            siteLogo: "<div class='mobile-menu-nav-back'><a class='logo-mobile' href='#'><img src='img/mobile-logo.png' alt='logo' class='img-fluid'/></a></div>"
        });
    }

    /*-------------------------------------
        Google Map
    -------------------------------------*/
    if ($("#googleMap").length) {
        window.onload = function () {
            var styles = [{
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [{
                    color: '#b7d0ea'
                }]
            }, {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{
                    visibility: 'off'
                }]
            }, {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{
                    visibility: 'off'
                }]
            }, {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{
                    color: '#c2c2aa'
                }]
            }, {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{
                    color: '#b6d1b0'
                }]
            }, {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#6b9a76'
                }]
            }];
            var options = {
                mapTypeControlOptions: {
                    mapTypeIds: ['Styled']
                },
                center: new google.maps.LatLng(-37.81618, 144.95692),
                zoom: 10,
                disableDefaultUI: true,
                mapTypeId: 'Styled'
            };
            var div = document.getElementById('googleMap');
            var map = new google.maps.Map(div, options);
            var styledMapType = new google.maps.StyledMapType(styles, {
                name: 'Styled'
            });
            map.mapTypes.set('Styled', styledMapType);

            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
            });
        };
    }

    /*-------------------------------------
    Counter
    -------------------------------------*/
    var counterContainer = $('.counter');
    if (counterContainer.length) {
        counterContainer.counterUp({
            delay: 50,
            time: 2000
        });
    }

    /*-------------------------------------
    Popup
    -------------------------------------*/
    var yPopup = $(".popup-youtube");
    if (yPopup.length) {
        yPopup.magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    }

    /*-------------------------------------
    Booking dates and time
    -------------------------------------*/
    var datePicker = $('.rt-date');
    if (datePicker.length) {
        datePicker.datetimepicker({
            format: 'd-m-Y',
            timepicker: false
        });
    }

    var timePicker = $('.rt-time');
    if (timePicker.length) {
        timePicker.datetimepicker({
            format: 'H:i',
            datepicker: false
        });
    }

    /*-------------------------------------
        Product View
    -------------------------------------*/
    $('.product-view-trigger').on('click', function (e) {
        var self = $(this),
            data = self.attr("data-type"),
            target = $("#product-view");
        self.parents('.layout-switcher').find('li.active').removeClass('active');
        self.parent('li').addClass('active');
        target.children('.row').find('>div').animate({
            opacity: 0,
        }, 200, function () {
            if (data === "product-box-grid") {
                target.removeClass('product-box-list');
                target.addClass('product-box-grid');
            } else if (data === "product-box-list") {
                target.removeClass('product-box-grid');
                target.addClass('product-box-list');
            }
            target.children('.row').find('>div').animate({
                opacity: 1,
            }, 100);
        });
        e.preventDefault();
        return false;
    });

    /*-------------------------------------
        Masonry
    -------------------------------------*/
    var galleryIsoContainer = $("#no-equal-gallery");
    if (galleryIsoContainer.length) {
        var blogGallerIso = galleryIsoContainer.imagesLoaded(function () {
            blogGallerIso.isotope({
                itemSelector: ".no-equal-item",
                masonry: {
                    columnWidth: ".no-equal-item"
                }
            });
        });
    }

    /*-------------------------------------
     Quantity Holder
     -------------------------------------*/
    $('#quantity-holder, #quantity-holder2').on('click', '.quantity-plus', function () {

        var $holder = $(this).parents('.quantity-holder');
        var $target = $holder.find('input.quantity-input');
        var $quantity = parseInt($target.val(), 10);
        if ($.isNumeric($quantity) && $quantity > 0) {
            $quantity = $quantity + 1;
            $target.val($quantity);
        } else {
            $target.val($quantity);
        }

    }).on('click', '.quantity-minus', function () {

        var $holder = $(this).parents('.quantity-holder');
        var $target = $holder.find('input.quantity-input');
        var $quantity = parseInt($target.val(), 10);
        if ($.isNumeric($quantity) && $quantity >= 2) {
            $quantity = $quantity - 1;
            $target.val($quantity);
        } else {
            $target.val(1);
        }
    });

    /*-------------------------------------
    Countdown activation code
    -------------------------------------*/
    var eventCounter = $(".countdown");
    if (eventCounter.length) {
        eventCounter.countdown("2019/10/21", function (e) {
            $(this).html(
                e.strftime(
                    "<div class='countdown-section'><div><div class='countdown-number'>%D</div> <div class='countdown-unit'>Day%!D</div> </div></div><div class='countdown-section'><div><div class='countdown-number'>%H</div> <div class='countdown-unit'>Hour%!H</div> </div></div><div class='countdown-section'><div><div class='countdown-number'>%M</div> <div class='countdown-unit'>Minutes</div> </div></div><div class='countdown-section'><div><div class='countdown-number'>%S</div> <div class='countdown-unit'>Second</div> </div></div>"
                )
            );
        });
    }

    /*-------------------------------------
    ElevateZoom
    -------------------------------------*/

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        elevateZoom();
    });

    function elevateZoom() {
        if ($.fn.elevateZoom !== undefined) {
            $('.zoom_01').elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 200
            });
        }
    }

    $(function () {

        /*-------------------------------------
        Tooltip Init
        -------------------------------------*/
        $('[data-toggle="tooltip"]').tooltip();

        /*-------------------------------------
        Elevate Zoom Init
        -------------------------------------*/
        elevateZoom();

        /*-------------------------------------
        Select 2 Init
        -------------------------------------*/
        if ($.fn.select2 !== undefined) {
            $('select.select2').select2({
                theme: 'classic',
                dir: "rtl",

                dropdownAutoWidth: true,
                width: '100%'
            });
        }
        /*-------------------------------------
        Carousel slider initiation
        -------------------------------------*/
        $(".rc-carousel").each(function () {
            var carousel = $(this),
                loop = carousel.data("loop"),
                Canimate = carousel.data("animate"),
                items = carousel.data("items"),
                margin = carousel.data("margin"),
                stagePadding = carousel.data("stage-padding"),
                autoplay = carousel.data("autoplay"),
                autoplayTimeout = carousel.data("autoplay-timeout"),
                smartSpeed = carousel.data("smart-speed"),
                dots = carousel.data("dots"),
                nav = carousel.data("nav"),
                navSpeed = carousel.data("nav-speed"),
                rXsmall = carousel.data("r-x-small"),
                rXsmallNav = carousel.data("r-x-small-nav"),
                rXsmallDots = carousel.data("r-x-small-dots"),
                rXmedium = carousel.data("r-x-medium"),
                rXmediumNav = carousel.data("r-x-medium-nav"),
                rXmediumDots = carousel.data("r-x-medium-dots"),
                rSmall = carousel.data("r-small"),
                rSmallNav = carousel.data("r-small-nav"),
                rSmallDots = carousel.data("r-small-dots"),
                rMedium = carousel.data("r-medium"),
                rMediumNav = carousel.data("r-medium-nav"),
                rMediumDots = carousel.data("r-medium-dots"),
                rLarge = carousel.data("r-large"),
                rLargeNav = carousel.data("r-large-nav"),
                rLargeDots = carousel.data("r-large-dots"),
                rExtraLarge = carousel.data("r-extra-large"),
                rExtraLargeNav = carousel.data("r-extra-large-nav"),
                rExtraLargeDots = carousel.data("r-extra-large-dots"),
                center = carousel.data("center"),
                custom_nav = carousel.data("custom-nav") || "";
            carousel.addClass('owl-carousel');
            var owl = carousel.owlCarousel({
                loop: loop ? true : false,
                animateOut: Canimate,
                items: items ? items : 1,
                lazyLoad: true,
                margin: margin ? margin : 0,
                autoplay: autoplay ? true : false,
                autoplayTimeout: autoplayTimeout ? autoplayTimeout : 1000,
                smartSpeed: smartSpeed ? smartSpeed : 250,
                dots: dots ? true : false,
                nav: nav ? true : false,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                navSpeed: navSpeed ? true : false,
                center: center ? true : false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: rXsmall ? rXsmall : 1,
                        nav: rXsmallNav ? true : false,
                        dots: rXsmallDots ? true : false
                    },
                    576: {
                        items: rXmedium ? rXmedium : 2,
                        nav: rXmediumNav ? true : false,
                        dots: rXmediumDots ? true : false
                    },
                    768: {
                        items: rSmall ? rSmall : 3,
                        nav: rSmallNav ? true : false,
                        dots: rSmallDots ? true : false
                    },
                    992: {
                        items: rMedium ? rMedium : 4,
                        nav: rMediumNav ? true : false,
                        dots: rMediumDots ? true : false
                    },
                    1200: {
                        items: rLarge ? rLarge : 5,
                        nav: rLargeNav ? true : false,
                        dots: rLargeDots ? true : false
                    },
                    1240: {
                        items: rExtraLarge ? rExtraLarge : 5,
                        nav: rExtraLargeNav ? true : false,
                        dots: rExtraLargeDots ? true : false
                    }
                },
            });

            if (custom_nav) {
                var nav = $(custom_nav),
                    nav_next = $(".rt-next", nav),
                    nav_prev = $(".rt-prev", nav);

                nav_next.on("click", function (e) {
                    e.preventDefault();
                    owl.trigger('next.owl.carousel');
                    return false;
                });

                nav_prev.on("click", function (e) {
                    e.preventDefault();
                    owl.trigger('prev.owl.carousel');
                    return false;
                });
            }
        });
    });

    jQuery(window).bind('scroll', function () {
        if ($(window).scrollTop() > 0) {
            $('.header').addClass('fix-top');
            $('.mh-147').addClass('mh-53');
        } else {
            $('.header').removeClass('fix-top');
            $('.mh-147').removeClass('mh-53');
        }
    });

    var removeClass = true;
    $(".menu-nav").click(function () {
        $(".navigation").toggleClass('show');
        $(".menu-nav").toggleClass('active');
        removeClass = false;
    });

    $(".navigation").click(function () {
        removeClass = false;
    });
    $(".menu-nav").click(function () {
        removeClass = false;
    });

})(jQuery);

(function ($) {
    $(window).on("load", function () {
        $(".dashoboard_sidebar").mCustomScrollbar({
            scrollButtons: { enable: true },
            theme: "dark-thin",
        });
    });
})(jQuery);

(function ($) {
    $(window).on("load", function () {
        $(".conversation-area").mCustomScrollbar({
            scrollButtons: { enable: true },
            theme: "dark-thin",
        });
    });
})(jQuery);

(function ($) {
    $(window).on("load", function () {
        $(".select-options").mCustomScrollbar({
            scrollButtons: { enable: true },
            theme: "light-thin",
        });
    });
})(jQuery);

jQuery(window).bind('scroll', function () {
    if ($(window).scrollTop() > 0) {
        $('.header').addClass('fix-top');
        $('.mh-147').addClass('mh-53');
    } else {
        $('.header').removeClass('fix-top');
        $('.mh-147').removeClass('mh-53');
    }
});

/*$('.slick-banner').slick({
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    swipe: true,
    infinite: true,
    fade: true,
    speed: 800,
    autoplay: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    autoplaySpeed: 3000,
});*/




var removeClass = true;
$(".menu-nav").click(function () {
    $(".navigation").toggleClass('show');
    $(".menu-nav").toggleClass('active');
    removeClass = false;
});

$(".navigation").click(function () {
    removeClass = false;
});
$(".menu-nav").click(function () {
    removeClass = false;
});

$(".reverse-Register-up").click(function () {
    $(".reg-drop").show();
    $(".regVerification-drop").hide();
});

$(".reverse-busi-Register-up").click(function () {
    $(".reg-drop").show();
    $(".regBusVerification-drop").hide();
});


$(".sign-up-btn").click(function () {
    $(".sign-up").addClass('active');
    $(".sign-in").removeClass('active');
    $(".navigation").removeClass('show');
    $(".menu-nav").removeClass('active');
    removeClass = false;
});
$(".reverse-drops-up").click(function () {
    $(".sign-up").removeClass('active');
    $(".sign-in").addClass('active');
    removeClass = false;

    $(".verification-drop").hide();
    $(".log-drop").show();
    $(".forget-drop").hide();
});
$(".reg-overlay").click(function () {
    $(".sign-up").removeClass('active');
    removeClass = false;
});

$(".sign-up").click(function () {
    removeClass = false;
});

$(".sign-in-btn").click(function () {
    $(".sign-in").addClass('active');
    $(".sign-up").removeClass('active');
    $(".navigation").removeClass('show');
    $(".menu-nav").removeClass('active');
    $(".verification-drop").hide();
    $(".log-drop").show();
    $(".forget-drop").hide();
    $(".regVerification-drop").hide();
    $(".regBusVerification-drop").hide();
    removeClass = false;
});
$(".reverse-drops-in").click(function () {
    $(".sign-in").removeClass('active');
    $(".sign-up").addClass('active');
    removeClass = false;

    $(".verification-drop").hide();
    $(".log-drop").hide();
    $(".forget-drop").hide();
});
$(".log-overlay").click(function () {
    $(".sign-in").removeClass('active');
    $(".verification-drop").hide();
    $(".log-drop").hide();
    $(".forget-drop").hide();
    removeClass = false;
});

$(".sign-in").click(function () {
    removeClass = false;
});

$(".srch-btn").click(function () {
    $(".search-field").addClass('show');
    removeClass = false;
});

$(".search-field").click(function () {
    removeClass = false;
});

$(".filter-candidate-btn").click(function () {
    $(".filter-candidate").toggleClass('show');
    removeClass = false;
});

$(".promo-code-btn").click(function () {
    $(".promo-popup").addClass('active');
    $(".notify-popup").removeClass('active');
    $(".navigation").removeClass('show');
    $(".menu-nav").removeClass('active');
    removeClass = false;
});

$(".promo-overlay").click(function () {
    $(".promo-popup").removeClass('active');
    removeClass = false;
});

$(".promo-popup").click(function () {
    removeClass = false;
});

$(".notify-btn").click(function () {
    $(".notify-popup").addClass('active');
    $(".promo-popup").removeClass('active');
    $(".navigation").removeClass('show');
    $(".menu-nav").removeClass('active');
    removeClass = false;
});

$(".notify-overlay").click(function () {
    $(".notify-popup").removeClass('active');
    removeClass = false;
});

$(".notify-popup").click(function () {
    removeClass = false;
});

$(".reopen-btn").click(function () {
    $(".reopen-btn").addClass('active');
    removeClass = false;
});

$(".closeTik-btn").click(function () {
    $(".closeTik-btn").addClass('active');
    removeClass = false;
});

$(".chat_btn").click(function () {
    $(".chat-box").addClass('show');
    $(".chat_btn").addClass('hide');
    removeClass = false;
});

$(".close-chat").click(function () {
    $(".chat-box").removeClass('show');
    $(".chat_btn").removeClass('hide');
    removeClass = false;
});

$(".chat-box").click(function () {
    removeClass = false;
});

$(".dashboard-nav-btn").click(function () {
    $(".dashoboard_sidebar_for_mob").addClass('show');
    $(".dashboard-nav").addClass('active');
    removeClass = false;
});

$(".dashboard-nav-close").click(function () {
    $(".dashoboard_sidebar_for_mob").removeClass('show');
    $(".dashboard-nav").removeClass('active');
    removeClass = false;
});

$(".dashoboard_sidebar_for_mob").click(function () {
    removeClass = false;
});
$(".dashboard-nav").click(function () {
    removeClass = false;
});

$(".hint-it").click(function () {
    $(".hint-loc").toggleClass('show');
    removeClass = false;
});

$("html").click(function () {
    if (removeClass) {
        $(".sign-up").removeClass('show');
        $(".sign-in").removeClass('active');
        $(".navigation").removeClass('show');
        $(".menu-nav").removeClass('active');
        $(".search-field").removeClass('show');
        $(".promo-popup").removeClass('show');
        $(".notify-popup").removeClass('active');
        $(".reopen-btn").removeClass('active');
        $(".closeTik-btn").removeClass('active');
        $(".chat-box").removeClass('show');
        $(".chat_btn").removeClass('hide');
        $(".dashoboard_sidebar_for_mob").removeClass('show');
        $(".dashboard-nav").removeClass('active');
        $(".hint-loc").removeClass('show');
    }
    removeClass = true;
});

$(".add-Location").click(function () {
    $(".new-location-form").toggleClass('hide');
    removeClass = false;
});

$(".add-account").click(function () {
    $(".new-account-form").toggleClass('hide');
    removeClass = false;
});

$(".add-sadad-account").click(function () {
    $(".new-sadad-account").toggleClass('hide');
    removeClass = false;
});

$(".Creat_New_tickets_btn").click(function () {
    $(".creat_new_ticket").toggleClass('hide');
    removeClass = false;
});

$(".lang-eng").click(function () {
    $(".lang-eng").addClass('hide');
    $(".lang-arabic").removeClass('hide');
    $(".navigation").removeClass('show');
    $(".menu-nav").removeClass('active');
    removeClass = false;
});

$(".lang-arabic").click(function () {
    $(".lang-arabic").addClass('hide');
    $(".lang-eng").removeClass('hide');
    $(".navigation").removeClass('show');
    $(".menu-nav").removeClass('active');
    removeClass = false;
});

$('#faqTab').tabCollapse();


$(".progress_bar").loading();

$(window).scroll(function () {
    var fixSidebar_1 = $('.header').innerHeight();
    var fixSidebar = fixSidebar_1;
    //alert(fixSidebar);
    var contentHeight = $('.dashoboard_body').innerHeight();
    var sidebarHeight = $('.dashoboard_sidebar').height();
    var sidebarBottomPos = contentHeight - sidebarHeight;
    //alert(sidebarBottomPos);
    var trigger = $(window).scrollTop() - fixSidebar;

    if ($(window).scrollTop() >= fixSidebar) {
        $('.dashoboard_sidebar').addClass('fixed');
        $('.dashoboard_body').removeClass('large-height');
    } else {
        $('.dashoboard_sidebar').removeClass('fixed');
        $('.dashoboard_body').addClass('large-height');
    }

    if (trigger >= sidebarBottomPos) {
        $('.dashoboard_sidebar').addClass('bottom');
        $('.dashoboard_body').removeClass('large-height');
    } else {
        $('.dashoboard_sidebar').removeClass('bottom');
    }
});

