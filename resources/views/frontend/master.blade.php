<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css"
        id="bootstrap-style" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/materialdesignicons.min.css') }}"
        type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet"
        href="{{ asset('frontend/../../../unicons.iconscout.com/release/v4.0.0/css/line.css') }}" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/tiny-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/tiny-slider.css.css') }}"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}" type="text/css" />

    @stack('css')

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
        <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i>
    </a>


    <!--Navbar Start-->
    @include('frontend.layout.nav')
    <!-- Navbar End -->

    <!-- Modal -->
    @include('frontend.pages.signup')
    <!-- end modal -->

    <!-- home section -->
    @include('frontend.pages.home')
    <!-- end home section -->

    <!-- about-me section -->
    @include('frontend.pages.about')
    <!-- end about-me -->

    <!-- start service -->
    @include('frontend.pages.service')
    <!-- end service -->

    <!-- start counter -->
    @include('frontend.pages.achievement')
    <!-- end counter -->

    <!-- start my-work -->
    @include('frontend.pages.work')
    <!-- end my-work -->

    <!-- start testimonial -->
    @include('frontend.pages.testimonial')
    <!-- end testimonial -->

    <!-- start blog -->
    @include('frontend.pages.blog')
    <!-- end blog -->

    <!-- start contact -->
    @include('frontend.pages.contact')
    <!-- end contact -->

    <!-- start footer -->
    @include('frontend.layout.footer')
    <!-- end footer -->

    <!--Bootstrap Js-->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Slider Js -->
    <script src="{{ asset('frontend/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>

    <!-- conter -->
    <script src="{{ asset('frontend/js/counter.init.js') }}"></script>

    <!-- App Js -->
    <script src="{{ asset('frontend/js/app.js') }}"></script>


</body>

</html>
