 <!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/rangeSlider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

        <title>Tessa Academy</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/img/tessapurplelogo-01.png') }}">
        <script src="cart.js"></script>
    </head>

    <body>
        <!-- Start Header Area-->

        @include('home.header')

        <!-- End Header Area-->

        <!-- Start Main Banner Area/ slider -->
        @include('home.slider')
        <!-- End Main Banner Area/ slider -->

        <!-- Start Categories Banner Area -->
        @include('home.categoriesBanner')
        <!-- End Categories Banner Area -->

        <!-- Start Products Area -->
       @include('home.ourProducts')
        <!-- End Products Area -->

        <!-- Start Offer Area -->
        @include('home.offerArea')
        <!-- End Offer Area -->

        <!-- Start Brand Area -->
        @include('home.shopBrand')
        <!-- End Brand Area -->

        <!-- Start Products Area -->
        @include('home.popularProducts')
        <!-- End Products Area -->

        <!-- Start Facility Area -->
        @include('home.facilityArea')
        <!-- End Facility Area -->



        <!-- Start Instagram Area -->
        @include('home.instagram')
        <!-- End Instagram Area -->

        <!-- Start QuickView Modal Area -->
        @include('home.quickview')
        <!-- End QuickView Modal Area -->

        <!-- Start Footer Area -->
        @include('home.footer')
        <!-- End Footer Area -->

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Links of JS files -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/rangeSlider.min.js') }}"></script>
        <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/sticky-sidebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
        <script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
