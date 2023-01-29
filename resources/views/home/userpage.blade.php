<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
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
        <!-- Start Products Area -->
        <section class="products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2>Recent Products</h2>
                    <div class="row">

                        @foreach($product as $products)

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="products-box">
                                    <div class="products-image">
                                        <a href="{{url('product_details', $products->id)}}">
                                            <img src="product/{{$products->image}}" class="main-image" alt="image">
                                            <img src="product/{{$products->image}}" class="hover-image" alt="image">
                                        </a>

                                        <div class="products-button">
                                            <ul>

                                                <li>
                                                    <div class="quick-view-btn">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                            <i class='bx bx-search-alt'></i>
                                                            <span class="tooltip-label">Quick View</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        @if($products->new==1)
                                            <div class="new-tag">New!</div>
                                        @endif
                                    </div>

                                    <div class="products-content">
                                        <span class="category">{{$products->category}}</span>
                                        <h3><a href="products-type-2.html">{{$products->title}}</a></h3>
                                        <div class="price">

                                            @if($products->discount_price!=null)

                                                <span class="old-price">{{$products->price}}den</span>
                                                <span class="new-price">{{$products->discount_price}}den</span>

                                            @else

                                                @if(Auth::check() && isset($products->Stylistprice) && Auth::user()->usertype=='2')
                                                    <span class="new-price">{{$products->Stylistprice}}den</span>
                                                    @else
                                                    <span class="new-price">{{$products->price}}den</span>
                                                @endif



                                            @endif

                                        </div>
                                        <form action="{{url('add_cart', $products->id)}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div>
                                                    <input type="submit" value="Add to Cart" class="add-to-cart col-md-5" style="padding-left: 60px">
                                                </div>
                                                <div>
                                                    <input type="number" name="quantity" class="add-to-cart col-md-4" value="1" min="1" style="width: 50px">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <span class="products-discount">
                                <span>
                                    20% OFF
                                </span>
                            </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Products Area -->

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

        <!-- Start Products Area -->
        @include('home.productArea')
        <!-- End Products Area -->

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
