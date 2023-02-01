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

                  <li>
                      <a href=/sendemail ><i class="bx bx-log-in"></i> Request stylist account</a>
                  </li>

                  <?php if(Route::has('login')): ?>

                  <?php if(auth()->guard()->check()): ?>
                    <li>
                      <a href="login.html"><i class="bx bxs-user"></i> My Account</a>
                    </li>

                    <li>
                    <button class="button-dalje" role="button">
                      <span href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</span>
                    </button>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?>                     
                    </form>
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
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                        <div class="cart-btn">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span><?php echo e($count); ?></span></a
                          >
                        </div>
                        <?php else: ?>
                        <div class="cart-btn">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span>0</span>
                          </a>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
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
                      <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                        <div class="cart-btn">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span><?php echo e($count); ?></span></a
                          >
                        </div>
                        <?php else: ?>
                        <div class="cart-btn">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span>0</span></a
                          >
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
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
                        <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                        <div class="cart-btn">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span><?php echo e($count); ?></span></a
                          >
                        </div>
                        <?php else: ?>
                        <div class="cart-btn">
                          <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span>0</span></a
                          >
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                      </div>
                      <div class="option-item">
                        <div
                          class="burger-menu"
                          data-bs-toggle="modal"
                          data-bs-target="#sidebarModal"
                        >
                          <span class="top-bar"></span>
                          <span class="middle-bar"></span
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
                            <a href="products-sidebar-fullwidth.html" class="shop-now-btn">Shop Now</a>
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
                    <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                    <?php
                    $totalprice=0;
                    ?>
                    <div class="modal-body">
                        <h3>My Cart (<?php echo e($count); ?>)</h3>
                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="products-cart-content">
                            <div class="products-cart">
                                <div class="products-image">
                                    <a href="#"><img src="/product/<?php echo e($cart->image); ?>" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="#"><?php echo e($cart->product_title); ?></a></h3>
                                    <span></span>
                                    <div class="products-price">
                                        <span class="qnt-element"><?php echo e($cart->quantity); ?></span>
                                        <span>x</span>
                                        <span class="price"><?php echo e($cart->unitprice); ?></span>
                                    </div>
                                    <a href="<?php echo e(url('remove_cart', $cart->id)); ?>" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                            </div>

                        </div>

                        <?php
                        $totalprice=$totalprice + $cart->quantity * $cart->unitprice
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                       
                        <div class="products-cart-subtotal">
                            <span>Subtotal</span>
                            <span class="subtotal"><?php echo e($totalprice); ?></span>
                        </div>

                        <div class="products-cart-btn">
                            <a href="<?php echo e(url('checkout')); ?>" class="default-btn">Proceed to Checkout</a>
                            <a href="<?php echo e(url('show_cart')); ?>" class="optional-btn">View Shopping Cart</a>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="modal-body">
                        <h3>My Cart (0)</h3>
                        <div class="products-cart-content">
                            <div class="products-cart">
                                
                            </div>

                        </div>

                        <div class="products-cart-subtotal">
                            <span>Subtotal</span>
                            <span class="subtotal">0</span>
                        </div>

                        <div class="products-cart-btn">
                            <a href="<?php echo e(url('checkout')); ?>" class="default-btn">Proceed to Checkout</a>
                            <a href="<?php echo e(url('show_cart')); ?>" class="optional-btn">View Shopping Cart</a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<!-- End Shopping Cart Modal --><?php /**PATH C:\Users\Luka\Desktop\tessawebdardi\tessaweb1\resources\views/contact/header.blade.php ENDPATH**/ ?>