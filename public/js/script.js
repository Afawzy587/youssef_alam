$(document).ready(function () {


    // web lang
    if ($("html").attr("dir") == "rtl") {
        var dir_lang = true;
    } else {
        var dir_lang = false;
    }


    // opne-menu
    $(".nav-bar-section .menu-icon i").click(function () {
        $(".nav-bar-section .nav-ul").addClass("open-menuCLass");
        $("body").addClass("overlay-over");
    });
    $(".nav-bar-section .nav-ul .close-icon i").click(function () {
        $(".nav-bar-section .nav-ul").removeClass("open-menuCLass");
        $("body").removeClass("overlay-over");
    });

    // opne-searchBar
    $(".open-search-icon i").click(function () {
        $(".search-box").addClass("open-search");
    });
    $(".nav-bar-section .search-box .search-form form .closeSearch").click(function () {
        $(".search-box").removeClass("open-search");
    });

    // opne-products-box
    $(".products-section .products-container .products-box").click(function () {
        $(this).toggleClass("active").siblings().removeClass("active");
    });
    // scroll link

    $(".intro-section .intro-slider .intro-slider-item .scrol-icon").click(function () {
        $("html, body").animate(
            {
                scrollTop: $("#" + $(this).data("scroll")).offset().top,
            },
            900
        );
    });


    

    // scroleBotton

    $(window).scroll(function() {
        if($(window).scrollTop() >= 500) {
            $(".scrol-box").css({"opacity": 1, "visibility": "visible", "bottom": '40px'});


            if($(window).width() <= 772){
                $(".nav-bar-section .menu-icon").addClass('fixed-box');
            }
        }
        else{
            $(".scrol-box").css({"opacity": 0, "visibility": "hidden", "bottom": '0px'});
            $(".nav-bar-section .menu-icon").removeClass('fixed-box');
        }
    });
    $(".scrol-box").click(function () {
        $("html, body").animate(
            {
                scrollTop: $('.nav-bar-section').offset().top,
            },
            900
        );
    });

    // opne-searchFooter
    $(".footer-section .buttom-link span").click(function () {
        $(".footer-form-box").addClass("active-box");
    });
    $(".footer-section .footer-form-box form i").click(function () {
        $(".footer-form-box").removeClass("active-box");
    });

    // intro-slider
    $(".intro-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        rtl: dir_lang,
        autoplay: true,
        dots: true,
        arrows: false,
        fade: true,
    });

    // pmacCourses-slider
    $(".pmacCourses-slider").slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $("#pmacCourses-slider-left"),
        nextArrow: $("#pmacCourses-slider-right"),
        autoplaySpeed: 2000,
        rtl: dir_lang,
        autoplay: false,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 997,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 772,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
    // gallery-slider
    $(".gallery-slider").slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $("#gallery-slider-left"),
        nextArrow: $("#gallery-slider-right"),
        autoplaySpeed: 2000,
        rtl: dir_lang,
        autoplay: false,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 772,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
    // video-slider
    $(".video-slider").slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        rtl: dir_lang,
        prevArrow: "<div class='circle-arrow devo-right'><i class='fas fa-angle-right'></i></div>",
        nextArrow: "<div class='circle-arrow devo-left'><i class='fas fa-angle-left'></i></div>",
        autoplay: true,
        dots: true,
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        responsive: [
            {
                breakpoint: 772,
                settings: {
                    centerMode: false,
                    slidesToShow: 1,
                },
            },
        ],
    });
    // corporate-slider-slider
    $(".corporate-slider").slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<div class="left-arrow slider-arrow"><i id="corporate-slider-left" class="fas fa-arrow-left"></i></div>',
        nextArrow: '<div class="right-arrow slider-arrow"><i id="corporate-slider-right" class="fas fa-arrow-right"></i></div>',
        autoplaySpeed: 2000,
        rtl: dir_lang,
        autoplay: false,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 997,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 772,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    // img-slider-slider
    $(".img-slider").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: "<div class='circle-arrow devo-right'><i class='fas fa-angle-right'></i></div>",
        nextArrow: "<div class='circle-arrow devo-left'><i class='fas fa-angle-left'></i></div>",
        autoplaySpeed: 2000,
        rtl: dir_lang,
        autoplay: false,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 997,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 772,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    // awards-slider-slider
    $(".awards-slider").slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: "<div class='circle-arrow devo-right'><i class='fas fa-angle-right'></i></div>",
        nextArrow: "<div class='circle-arrow devo-left'><i class='fas fa-angle-left'></i></div>",
        autoplaySpeed: 2000,
        rtl: dir_lang,
        autoplay: false,
        dots: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 997,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 772,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });



    // event-slider-slider
    $(".event-slider").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: "<div class='circle-arrow devo-right'><i class='fas fa-angle-right'></i></div>",
        nextArrow: "<div class='circle-arrow devo-left'><i class='fas fa-angle-left'></i></div>",
        autoplaySpeed: 2000,
        rtl: dir_lang,
        autoplay: false,
        dots: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 997,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 772,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    // news-slider-slider
    $(".news-slider").slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: "<div class='circle-arrow devo-right'><i class='fas fa-angle-right'></i></div>",
        nextArrow: "<div class='circle-arrow devo-left'><i class='fas fa-angle-left'></i></div>",
        autoplaySpeed: 2000,
        rtl: dir_lang,
        autoplay: false,
        dots: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 997,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 772,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    // tilt
    $(".js-tilt").tilt({
        maxTilt: 10,
        speed: 800,
        scale: 1,
        maxGlare: 10,
        perspective: 800,
    });
    // tilt
    $(".fastJs-tilt").tilt({
        maxTilt: 10,
        speed: 700,
        scale: 1,
        maxGlare: 10,
        perspective: 700,
    });

    // open popup
    $(".pop-up-opner").click(function (s) {
        s.stopPropagation();
        $("#" + $(this).data("opne")).addClass("open-poUp-box");
        $("body").addClass("overlay-over");
    });
    $(".pop-up-box .closePop-icon i").click(function () {
        $(".pop-up-box").removeClass("open-poUp-box");
        $("body").removeClass("overlay-over");
    }); 
    $(document).keyup(function (exit_popUp) {
        if (exit_popUp.key === "Escape") {
            $(".pop-up-box").removeClass("open-poUp-box");
            $("body").removeClass("overlay-over");
        }
    });



    // open interested-section
    $(".interestedPmacCourses .pmacCourses-section .pmacCourses-slider .pmacCourses-slider-item .opne-rist-section span").click(function () {
        $(".interestedPmacCourses .interested-section").slideToggle();
    });

    //   opne award-box
    $(".award-box").click(function () {
        var award_pop_content = $(this).data("discription");
        $("#exampleModal .modal-body").text(award_pop_content);
    });


    //   opne careerModal
    $(".career-section .career-pop-up ul li .career-title").click(function () {
        var career_pop_title = $(this).data("careertitle"),
            career_pop_exp = $(this).data("careerexp"),
            career_pop_content = $(this).data("careerdiscription");
        $("#careerModal .modal-title").text(career_pop_title);
        $("#careerModal .modal-body .prag").text(career_pop_content);
        $("#careerModal .modal-body .exp-year").text(career_pop_exp);
    });

    // opne project-box
    $('.product-section .prodact-box .title-box .project-title').click(function () {
        $("#" + $(this).data("projet")).toggleClass("active-opne");
    });


    // show more contact-box
    if ($('.contact-show-box').length > 3) {
        $('.contact-show-box:gt(3)').hide();
        $('.more-bottom').show();
    }
    $('.more-bottom').click(function () {
        $('.contact-show-box:gt(3)').slideToggle();
        $(this).hide();
    });






    // AOS
    AOS.init();
});
