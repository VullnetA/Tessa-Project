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
<!-- HEADER -->
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
        <?php echo $__env->yieldContent('navbar'); ?>

        <?php echo $__env->yieldContent('stickynavbar'); ?>
        <!-- End Navbar Area -->

<!-- END HEADER -->

<!-- START CONTENT -->

        <?php echo $__env->yieldContent('content'); ?>

<!-- END CONTENT -->

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
                      <li><a href="products-sidebar-fullwidth.html">Shop</a></li>
                      <li><a href="blog-1.html">Courses</a></li>
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
                       
                          <img src="<?php echo e(asset('assets/img/payment/visa.png')); ?>" alt="image"
                        />
                      </li>
                      <li>
                       
                          <img src="<?php echo e(asset('assets/img/payment/mastercard.png')); ?>" alt="image"
                        />
                      </li>
                      <li>
                        
                          <img src="<?php echo e(asset('assets/img/payment/mastercard2.png')); ?>" alt="image"
                        />
                      </li>
                      <li>
                        
                          <img src="<?php echo e(asset('assets/img/payment/visa2.png')); ?>" alt="image"
                        />
                      </li>
                      <li>
                        
                        <img src="<?php echo e(asset('assets/img/payment/expresscard.png')); ?>" alt="image"
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
        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/parallax.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/rangeSlider.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/nice-select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/meanmenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/sticky-sidebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/form-validator.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/contact-form-script.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/ajaxchimp.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\Users\Luka\Desktop\tessaweb\tessaweb\resources\views/layouts/master.blade.php ENDPATH**/ ?>