<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/boxicons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/meanmenu.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/rangeSlider.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/dark.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
        
        <title>Tessa Academy</title>

        <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/tessapurplelogo-01.png')); ?>">
        <script src="cart.js"></script>
    </head>
    <body>
        
        <!-- Start Top Header Area -->
        <div class="top-header">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                  <ul class="header-contact-info">
                    <li>Welcome to Tessa</li>
                    <li>Call: <a href="tel:+01321654214">+389 78 286 003</a></li>
                    <li>
                      <div class="dropdown language-switcher d-inline-block">
                        <button
                          class="dropdown-toggle"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <img src="<?php echo e(asset('assets/img/us-flag.jpg')); ?>" alt="image" />
                          <span>EN <i class="bx bx-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu">
                          <a href="#" class="dropdown-item d-flex align-items-center">
                            <img
                              src="<?php echo e(asset('assets/img/albania-flag-01.png')); ?>"
                              class="shadow-sm"
                              alt="flag"
                            />
                            <span>AL</span>
                          </a>
                          <a href="#" class="dropdown-item d-flex align-items-center">
                            <img
                              src="<?php echo e(asset('assets/img/macedonia-flag-01.png')); ?>"
                              class="shadow-sm"
                              alt="flag"
                            />
                            <span>MK</span>
                          </a>
                          </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <div class="col-lg-6 col-md-12">
                  <ul class="header-top-menu">

                  <?php if(Route::has('login')): ?>

                  <?php if(auth()->guard()->check()): ?>
                    <li>
                      <a href="login.html"><i class="bx bxs-user"></i> My Account</a>
                    </li>

                    <li>
                    <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
                    </li>

                    <?php else: ?>
                    <li>
                      <a href="<?php echo e(route('login')); ?>" ><i class="bx bx-log-in"></i> Login</a>
                    </li>
                    <li>
                      <a href="<?php echo e(route('register')); ?>"><i class="bx bx-log-in"></i> Register</a>
                    </li>
                    <?php endif; ?>

                    <?php endif; ?>

                  </ul>
                  <ul class="header-top-others-option">
                    <div class="option-item">
                      <div class="search-btn-box">
                        <i class="search-btn bx bx-search-alt"></i>
                      </div>
                    </div>
                    <div class="option-item">
                      <div class="cart-btn">
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#shoppingCartModal"
                          ><i class="bx bx-shopping-bag"></i><span>0</span></a
                        >
                      </div>
                    </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="xton-responsive-nav">
              <div class="container">
                <div class="xton-responsive-menu">
                  <div class="logo">
                    <a href="index-2.html">
                      <img src="<?php echo e(asset('assets/img/tessablack3.png')); ?>" class="main-logo" alt="logo" />
                      <img
                        src="<?php echo e(asset('assets/img/tesawhitelogo.png')); ?>"
                        class="white-logo"
                        alt="logo"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="xton-nav">
              <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="/">
                    <img src="<?php echo e(asset('assets/img/tessalogo2.png')); ?>" class="main-logo" alt="logo" />
                    <img
                      src="<?php echo e(asset('assets/img/tesawhitelogo.png')); ?>"
                      class="white-logo"
                      alt="logo"
                    />
                  </a>
                  <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a href="/" class="nav-link">Home </a>
                      </li>
                      <li class="nav-item megamenu">
                        <a href="/shop" class="nav-link">Shop </a>
                      </li>
                      <li class="nav-item megamenu">
                        <a href="/courses" class="nav-link">Courses </a>
                      </li>
                      <li class="nav-item megamenu">
                        <a href="/about" class="nav-link">About Us </a>
                      </li>
                      <li class="nav-item megamenu">
                        <a href="/contact" class="nav-link active">Contact </a>
                      </li>
                    </ul>
                    <div class="others-option">
                      <div class="option-item">
                        <div class="search-btn-box">
                          <i class="search-btn bx bx-search-alt"></i>
                        </div>
                      </div>
                      <div class="option-item">
                        <div class="cart-btn">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span>0</span></a
                          >
                        </div>
                      </div>
                      <div class="option-item">
                        <div
                          class="burger-menu"
                          data-bs-toggle="modal"
                          data-bs-target="#sidebarModal"
                        >
                          <span class="top-bar"></span>
                          <span class="middle-bar"></span>
                          <span class="bottom-bar"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
<!-- End Navbar Area -->

<!-- Start Sticky Navbar Area -->
        <div class="navbar-area header-sticky">
            <div class="xton-nav">
              <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="/">
                    <img src="<?php echo e(asset('assets/img/tessablack3.png')); ?>" class="main-logo" alt="logo" />
                    <img
                      src="<?php echo e(asset('assets/img/tesawhitelogo.png')); ?>"
                      class="white-logo"
                      alt="logo"
                    />
                  </a>
                  <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a href="/" class="nav-link">Home </a>
                      </li>
                      <li class="nav-item megamenu">
                        <a href="/shop" class="nav-link">Shop </a>
                      </li>
                      <li class="nav-item megamenu">
                        <a href="/courses" class="nav-link">Courses</a>
                      </li>
                      <li class="nav-item megamenu">
                        <a href="/about" class="nav-link">About Us </a>
                      </li>
                      <li class="nav-item megamenu">
                        <a href="/contact" class="nav-link active">Contact </a>
                      </li>
                    </ul>
                    <div class="others-option">
                      <div class="option-item">
                        <div class="search-btn-box">
                          <i class="search-btn bx bx-search-alt"></i>
                        </div>
                      </div>
                      <div class="option-item">
                        <div class="cart-btn">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span>0</span></a
                          >
                        </div>
                      </div>
                      <div class="option-item">
                        <div
                          class="burger-menu"
                          data-bs-toggle="modal"
                          data-bs-target="#sidebarModal"
                        >
                          <span class="top-bar"></span>
                          <span class="middle-bar"></span>
                          <span class="bottom-bar"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
        </div>
<!-- End Sticky Navbar Area -->

        <!-- Start Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- End Search Overlay -->

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Are you a hairstylist?<br>
                If so then please fill out this form and we'll get back to you.</h2>

                    <ul>
                        <li><a href=/>Home</a></li>
                        <li>Request Account</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Login Area -->

        <?php if(session()->has('message')): ?>

            <div class="alert alert-success">
              <center>
              <?php echo e(session()->get('message')); ?>

              </center>
            </div>

         <?php endif; ?>

        <section class="login-area ptb-100">
            
                        <div class="login-content">
                            <h2>Request stylist account:</h2>

                            <form class="login-form" action="<?php echo e(url('sendemail/send')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="surname" class="form-control" placeholder="Enter your surname">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="saloon" class="form-control" placeholder="Enter your saloon name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Enter your saloon address">
                                </div>
                                <button type="submit" class="default-btn">Submit request</button>

                            </form>
                        </div>
                  
        </section>
        <!-- End Login Area -->

    

        <!-- Start Sidebar Modal -->
        <div class="modal right fade sidebarModal" id="sidebarModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i></span>
                    </button>

                    <div class="modal-body">
                        <div class="sidebar-about-content">
                            <h3>About The Store</h3>

                            <div class="about-the-store">
                                <p>One of the most popular on the web is shopping. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                
                                <ul class="sidebar-contact-info">
                                    <li><i class='bx bx-map'></i> <a href="#" target="_blank">Gostivar , North Macedonia</a></li>
                                    <li><i class='bx bx-phone-call'></i> <a href="tel:+01321654214">+389 78 286 003</a></li>
                                    <li><i class='bx bx-envelope'></i> <a href="mailto:hello@xton.com">tessa.academy@gmail.com</a></li>
                                </ul>
                            </div>

                            <ul class="social-link">
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                            </ul>
                        </div>

                        <div class="sidebar-new-in-store">
                            <h3>New In Store</h3>

                            <ul class="products-list">
                                <li>
                                    <a href="#"><img src="assets/img/produkt prova-01.png" alt="image"></a>
                                </li>

                                <li>
                                    <a href="#"><img src="assets/img/produkt prova 2-01.png" alt="image"></a>
                                </li>

                                <li>
                                    <a href="#"><img src="assets/img/produkt prova 3-01.png" alt="image"></a>
                                </li>

                                <li>
                                    <a href="#"><img src="assets/img/produkt prova 4-01.png" alt="image"></a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="shop-now-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Modal -->

    

        <!-- Start Shopping Cart Modal -->
        <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i></span>
                    </button>

                    <div class="modal-body">
                        <h3>My Cart (3)</h3>

                        <div class="products-cart-content">
                            <div class="products-cart">
                                <div class="products-image">
                                    <a href="#"><img src="assets/img/products/img1.jpg" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                                    <span>Blue / XS</span>
                                    <div class="products-price">
                                        <span>1</span>
                                        <span>x</span>
                                        <span class="price">$250.00</span>
                                    </div>
                                    <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>

                            <div class="products-cart">
                                <div class="products-image">
                                    <a href="#"><img src="assets/img/products/img2.jpg" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                                    <span>Blue / XS</span>
                                    <div class="products-price">
                                        <span>1</span>
                                        <span>x</span>
                                        <span class="price">$200.00</span>
                                    </div>
                                    <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>

                            <div class="products-cart">
                                <div class="products-image">
                                    <a href="#"><img src="assets/img/products/img3.jpg" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="#">Hanes Men's Pullover</a></h3>
                                    <span>Blue / XS</span>
                                    <div class="products-price">
                                        <span>1</span>
                                        <span>x</span>
                                        <span class="price">$200.00</span>
                                    </div>
                                    <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="products-cart-subtotal">
                            <span>Subtotal</span>

                            <span class="subtotal">$524.00</span>
                        </div>

                        <div class="products-cart-btn">
                            <a href="checkout.html" class="default-btn">Proceed to Checkout</a>
                            <a href="cart.html" class="optional-btn">View Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shopping Cart Modal -->

        <!-- Start Wishlist Modal -->
        <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i></span>
                    </button>

                    <div class="modal-body">
                        <h3>My Wish List (3)</h3>

                        <div class="products-cart-content">
                            <div class="products-cart">
                                <div class="products-image">
                                    <a href="#"><img src="assets/img/products/img1.jpg" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                                    <span>Blue / XS</span>
                                    <div class="products-price">
                                        <span>1</span>
                                        <span>x</span>
                                        <span class="price">$250.00</span>
                                    </div>
                                    <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>

                            <div class="products-cart">
                                <div class="products-image">
                                    <a href="#"><img src="assets/img/products/img2.jpg" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                                    <span>Blue / XS</span>
                                    <div class="products-price">
                                        <span>1</span>
                                        <span>x</span>
                                        <span class="price">$200.00</span>
                                    </div>
                                    <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>

                            <div class="products-cart">
                                <div class="products-image">
                                    <a href="#"><img src="assets/img/products/img3.jpg" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="#">Hanes Men's Pullover</a></h3>
                                    <span>Blue / XS</span>
                                    <div class="products-price">
                                        <span>1</span>
                                        <span>x</span>
                                        <span class="price">$200.00</span>
                                    </div>
                                    <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="products-cart-btn">
                            <a href="#" class="optional-btn">View Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wishlist Modal -->


        <!-- Start Footer Area -->
        <footer class="footer-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <h3>About The Store</h3>
                  <div class="about-the-store">
                    <p>One of the most popular on the web is shopping.</p>
                    <ul class="footer-contact-info">
                      <li>
                        <i class="bx bx-map"></i>
                        <a href="#" target="_blank">Gostivar , North Macedonia</a>
                      </li>
                      <li>
                        <i class="bx bx-phone-call"></i>
                        <a href="tel:+01321654214">+389 78 286 003</a>
                      </li>
                      <li>
                        <i class="bx bx-envelope"></i>
                        <a href="mailto:hello@xton.com">tessa.academy@gmail.com</a>
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
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-4">
                  <h3>Quick Links</h3>
                  <ul class="quick-links">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <h3>Customer Support</h3>
                  <ul class="customer-support">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="track-order.html">Order Tracking</a></li>
                    <li><a href="contact.html">Help & Support</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                  <h3>Newsletter</h3>
                  <div class="footer-newsletter-box">
                    <p>To get the latest news and latest updates from us.</p>
                    <form class="newsletter-form" data-bs-toggle="validator">
                      <label>Your E-mail Address:</label>
                      <input
                        type="email"
                        class="input-newsletter"
                        placeholder="Enter your email"
                        name="EMAIL"
                        required
                        autocomplete="off"
                      />
                      <button type="submit">Subscribe</button>
                      <div id="validator-newsletter" class="form-result"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-bottom-area">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                
                </div>
                <div class="col-lg-6 col-md-6">
                  <ul class="payment-types">
                    <li>
                     
                        <img src="assets/img/payment/visa.png" alt="image"
                      />
                    </li>
                    <li>
                     
                        <img src="assets/img/payment/mastercard.png" alt="image"
                      />
                    </li>
                    <li>
                      
                        <img src="assets/img/payment/mastercard2.png" alt="image"
                      />
                    </li>
                    <li>
                      
                        <img src="assets/img/payment/visa2.png" alt="image"
                      />
                    </li>
                    <li>
                      
                      <img src="assets/img/payment/expresscard.png" alt="image"
                      />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

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
</html><?php /**PATH C:\Users\Luka\Desktop\Preparations\tessaweb\tessaweb\tessaweb\resources\views/request.blade.php ENDPATH**/ ?>