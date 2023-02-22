<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

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

    <link
        rel="icon"
        type="image/png"
        href="assets/img/tessapurplelogo-01.png"
    />
</head>
<body>
<!-- Start Top Header Area -->
@include('Orders.header')
<!-- End Top Header Area -->

<!-- Start Navbar Area -->



<!-- Start Cart Area -->
@include('Orders.ordertable')
<!-- End Cart Area -->



<!-- Start Instagram Area -->
@include('Orders.instagram')
<!-- End Instagram Area -->

<!-- Start Sidebar Modal -->
<div
    class="modal right fade sidebarModal"
    id="sidebarModal"
    tabindex="-1"
    role="dialog"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
            >
                <span aria-hidden="true"><i class="bx bx-x"></i></span>
            </button>

            <div class="modal-body">
                <div class="sidebar-about-content">
                    <h3>About The Store</h3>

                    <div class="about-the-store">
                        <p>
                            One of the most popular on the web is shopping. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit.
                        </p>

                        <ul class="sidebar-contact-info">
                            <li>
                                <i class="bx bx-map"></i>
                                <a href="#" target="_blank">Wonder Street, USA, New York</a>
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <a href="tel:+01321654214">+01 321 654 214</a>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                <a href="mailto:hello@xton.com">hello@xton.com</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="social-link">
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-facebook"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-twitter"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-instagram"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-linkedin"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-pinterest-alt"></i
                                ></a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-new-in-store">
                    <h3>New In Store</h3>

                    <ul class="products-list">
                        @foreach($product as $product)
                            <li>
                                <a href="#"
                                ><img src="/product/{{$product->image}}" alt="image"
                                    /></a>
                            </li>
                        @endforeach


                    </ul>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="shop-now-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->





<!-- Start Footer Area -->
@include('Orders.footer')
<!-- End Footer Area -->

<div class="go-top"><i class="bx bx-up-arrow-alt"></i></div>

<!-- Links of JS files -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/rangeSlider.min.js"></script>
<script src="assets/js/nice-select.min.js"></script>
<script src="assets/js/meanmenu.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/sticky-sidebar.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
