<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Data -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Веб-студия"/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Inspiro Web Studio"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>{{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <!-- Web Fonts -->
    <link href='{{ asset('front/fonts/font-face.css') }}' rel='stylesheet' type='text/css'/>
    <!-- Bootstrap -->
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet"/>
    <!--icon-font-->
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/fonts/HeliumIconFont/iconfont.css') }}"/>
    <!-- CSS Animations -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}"/>
    <!-- CubePortfolio stlylesheet -->
    <link rel="stylesheet" href="{{ asset('front/css/cubeportfolio.css') }}"/>
    <!-- owl.carousel -->
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}"/>
    <!-- fancybox -->
    <link href="{{ asset('front/css/jquery.fancybox.css') }}" rel="stylesheet"/>
    <!-- Custom stlylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('front/css/nav-style6.css') }}" rel="stylesheet"/>
    <!-- Swiperbox -->
    <link rel="stylesheet" href="{{ asset('front/css/swipebox.css') }}" type="text/css" media="all" />

    <link href="{{ asset('front/css/subscribe.css') }}" rel="stylesheet"/>
    <script src="{{ asset('front/js/modernizr.custom.js') }}"></script>

</head>
<body>
<div class="main_wrap">
    <!--Preloader div -->
    <div class="blank">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <!--End Preloader div-->

    <x-header></x-header>
    <x-slider></x-slider>

    <!--main wrapper-->
    <div class="site-wrapper">

        <x-about></x-about>
        <x-carousel></x-carousel>
        <x-features></x-features>
        {{--<x-team></x-team>--}}
        <x-facts></x-facts>
        <x-services></x-services>
        <x-process></x-process>
        <x-separator></x-separator>
        {{--<x-portfolio></x-portfolio>--}}
        <x-clients></x-clients>
        <x-testimonials></x-testimonials>
        {{--<x-news-fun></x-news-fun>--}}
        {{--<x-separator2></x-separator2>--}}
        <x-contacts></x-contacts>
        {{--<x-video></x-video>--}}
        <x-footer></x-footer>

    </div>
    <!--End main wrapper-->

</div>
<!-- jQuery Plugins -->
{{--<script src="{{ asset('front/js/jquery-1.11.0.min.js') }}"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('front/js/jquery.easing.1.3.min.js') }}"></script>

<!-- Preloader -->
<script type="text/javascript" src="{{ asset('front/js/nprogress.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/NProgress-start.js') }}"></script>

<!-- bootstrap -->
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/jquery.stellar.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/wow.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery.placeholder.js') }}"></script>
<!-- Portfolio plugin -->
<script src="{{ asset('front/js/jquery.cubeportfolio.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/portfolio-main.js') }}" type="text/javascript"></script>

<!-- Twitter plugin -->
<script src="{{ asset('front/js/jquery.tweet.js') }}" type="text/javascript"></script>

<!-- swiper slider -->
<script src="{{ asset('front/js/idangerous.swiper-2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/home.js') }}" type="text/javascript"></script>

<!-- fancybox plugin -->
<script src="{{ asset('front/js/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/jquery.fancybox-media.js') }}" type="text/javascript"></script>

<!-- Subscribe -->
<script src="{{ asset('front/js/subscribe.js') }}" type="text/javascript"></script>
<!-- Custom javascript  -->
<script src="{{ asset('front/js/scripts.js') }}" type="text/javascript"></script>

<!-- Navigation plugin  -->
<script src="{{ asset('front/js/velocity.min.js') }}"></script>
<script src="{{ asset('front/js/nav_style6.js') }}" type="text/javascript"></script>


</body>
</html>
