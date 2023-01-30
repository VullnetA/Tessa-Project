@extends('layouts.master')

@section('navbar')
<!-- Start Navbar Area -->
<div class="navbar-area">
            <div class="xton-responsive-nav">
              <div class="container">
                <div class="xton-responsive-menu">
                  <div class="logo">
                    <a href="index-2.html">
                      <img src="{{ asset('assets/img/tessablack3.png') }}" class="main-logo" alt="logo" />
                      <img
                        src="{{ asset('assets/img/tesawhitelogo.png') }}"
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
                    <img src="{{ asset('assets/img/tessalogo2.png') }}" class="main-logo" alt="logo" />
                    <img
                      src="{{ asset('assets/img/tesawhitelogo.png') }}"
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
@endsection

@section('stickynavbar')
<!-- Start Sticky Navbar Area -->
<div class="navbar-area header-sticky">
            <div class="xton-nav">
              <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/tessablack3.png') }}" class="main-logo" alt="logo" />
                    <img
                      src="{{ asset('assets/img/tesawhitelogo.png') }}"
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
@endsection

@section('content')
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
              <input
                type="text"
                class="input-search"
                placeholder="Search here..."
              />
              <button type="submit"><i class="bx bx-search-alt"></i></button>
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
          <h2>Contact Us</h2>
          <ul>
            <li><a href="index-2.html">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <div class="contact-info">
              <h3>Here to Help</h3>

              <ul class="contact-list">
                <li>
                  <i class="bx bx-map"></i> Location:
                  <a href="#">Gostivar , North Macedonia</a>
                </li>
                <li>
                  <i class="bx bx-phone-call"></i> Call Us:
                  <a href="tel:+01321654214">+389 78 286 003</a>
                </li>
                <li>
                  <i class="bx bx-envelope"></i> Email Us:
                  <a href="mailto:hello@xton.com">tessa.academy@gmail.com</a>
                </li>
                <li>
                  <i class="bx bx-microphone"></i> Fax:
                  <a href="tel:+123456789">+389 78 286 003</a>
                </li>
              </ul>

              <h3>Opening Hours:</h3>
              <ul class="opening-hours">
                <li><span>Monday:</span> 8AM - 6AM</li>
                <li><span>Tuesday:</span> 8AM - 6AM</li>
                <li><span>Wednesday:</span> 8AM - 6AM</li>
                <li><span>Thursday - Friday:</span> 8AM - 6AM</li>
                <li><span>Sunday:</span> Closed</li>
              </ul>

              <h3>Follow Us:</h3>
              <ul class="social">
                <li>
                  <a href="#" target="_blank"
                    ><i class="bx bxl-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                </li>
                <li>
                  <a href="#" target="_blank"
                    ><i class="bx bxl-instagram"></i
                  ></a>
                </li>
                <li>
                  <a href="#" target="_blank"
                    ><i class="bx bxl-linkedin"></i
                  ></a>
                </li>
                <li>
                  <a href="#" target="_blank"><i class="bx bxl-skype"></i></a>
                </li>
                <li>
                  <a href="#" target="_blank"
                    ><i class="bx bxl-pinterest-alt"></i
                  ></a>
                </li>
                <li>
                  <a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-7 col-md-12">
            <div class="contact-form">
              <h3>Drop Us A Line</h3>
              <p>
                We're happy to answer any questions you have or provide you with
                an estimate. Just send us a message in the form below with any
                questions you may have.
              </p>

              <form id="contactForm">
                <div class="row">
                  <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                      <label>Name <span>*</span></label>
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        required
                        data-error="Please enter your name"
                        placeholder="Your name"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                      <label>Email <span>*</span></label>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        required
                        data-error="Please enter your email"
                        placeholder="Your email address"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <label>Phone Number <span>*</span></label>
                      <input
                        type="text"
                        name="phone_number"
                        id="phone_number"
                        class="form-control"
                        required
                        data-error="Please enter your phone number"
                        placeholder="Your phone number"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <label>Your Message <span>*</span></label>
                      <textarea
                        name="message"
                        id="message"
                        cols="30"
                        rows="5"
                        required
                        data-error="Please enter your message"
                        class="form-control"
                        placeholder="Write your message..."
                      ></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <button type="submit" class="default-btn">
                      Send Message
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Area -->

    <!-- Map -->
    <div id="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2987.7593473566985!2d-73.78797548432667!3d41.509489596379204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd490255c9bfa7%3A0xfe099945f43b6e47!2sWonderland%20Dr%2C%20East%20Fishkill%2C%20NY%2012533%2C%20USA!5e0!3m2!1sen!2sbd!4v1622957216342!5m2!1sen!2sbd"
      ></iframe>
    </div>
    <!-- End Map -->

    <!-- Start Facility Area -->
    <section class="facility-area pt-100 pb-70">
      <div class="container">
        <div class="facility-slides owl-carousel owl-theme">
          <div class="single-facility-box">
            <div class="icon">
              <i class="flaticon-tracking"></i>
            </div>
            <h3>Free Shipping Worldwide</h3>
          </div>

          <div class="single-facility-box">
            <div class="icon">
              <i class="flaticon-return"></i>
            </div>
            <h3>Easy Return Policy</h3>
          </div>

          <div class="single-facility-box">
            <div class="icon">
              <i class="flaticon-shuffle"></i>
            </div>
            <h3>7 Day Exchange Policy</h3>
          </div>

          <div class="single-facility-box">
            <div class="icon">
              <i class="flaticon-sale"></i>
            </div>
            <h3>Weekend Discount Coupon</h3>
          </div>

          <div class="single-facility-box">
            <div class="icon">
              <i class="flaticon-credit-card"></i>
            </div>
            <h3>Secure Payment Methods</h3>
          </div>

          <div class="single-facility-box">
            <div class="icon">
              <i class="flaticon-location"></i>
            </div>
            <h3>Track Your Package</h3>
          </div>

          <div class="single-facility-box">
            <div class="icon">
              <i class="flaticon-customer-service"></i>
            </div>
            <h3>24/7 Customer Support</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- End Facility Area -->

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

            <div class="sidebar-new-in-store">
              <h3>New In Store</h3>

              <ul class="products-list">
                <li>
                  <a href="#"
                    ><img src="assets/img/produkt prova-01.png" alt="image"
                  /></a>
                </li>

                <li>
                  <a href="#"
                    ><img src="assets/img/produkt prova 2-01.png" alt="image"
                  /></a>
                </li>

                <li>
                  <a href="#"
                    ><img src="assets/img/produkt prova 3-01.png" alt="image"
                  /></a>
                </li>

                <li>
                  <a href="#"
                    ><img src="assets/img/produkt prova 4-01.png" alt="image"
                  /></a>
                </li>
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

    <!-- Start Shopping Cart Modal -->
    <div
      class="modal right fade shoppingCartModal"
      id="shoppingCartModal"
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
            <h3>My Cart (3)</h3>

            <div class="products-cart-content">
              <div class="products-cart">
                <div class="products-image">
                  <a href="#"
                    ><img src="assets/img/products/img1.jpg" alt="image"
                  /></a>
                </div>

                <div class="products-content">
                  <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                  <span>Blue / XS</span>
                  <div class="products-price">
                    <span>1</span>
                    <span>x</span>
                    <span class="price">$250.00</span>
                  </div>
                  <a href="#" class="remove-btn"><i class="bx bx-trash"></i></a>
                </div>
              </div>

              <div class="products-cart">
                <div class="products-image">
                  <a href="#"
                    ><img src="assets/img/products/img2.jpg" alt="image"
                  /></a>
                </div>

                <div class="products-content">
                  <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                  <span>Blue / XS</span>
                  <div class="products-price">
                    <span>1</span>
                    <span>x</span>
                    <span class="price">$200.00</span>
                  </div>
                  <a href="#" class="remove-btn"><i class="bx bx-trash"></i></a>
                </div>
              </div>

              <div class="products-cart">
                <div class="products-image">
                  <a href="#"
                    ><img src="assets/img/products/img3.jpg" alt="image"
                  /></a>
                </div>

                <div class="products-content">
                  <h3><a href="#">Hanes Men's Pullover</a></h3>
                  <span>Blue / XS</span>
                  <div class="products-price">
                    <span>1</span>
                    <span>x</span>
                    <span class="price">$200.00</span>
                  </div>
                  <a href="#" class="remove-btn"><i class="bx bx-trash"></i></a>
                </div>
              </div>
            </div>

            <div class="products-cart-subtotal">
              <span>Subtotal</span>

              <span class="subtotal">$524.00</span>
            </div>

            <div class="products-cart-btn">
              <a href="checkout.html" class="default-btn"
                >Proceed to Checkout</a
              >
              <a href="cart.html" class="optional-btn">View Shopping Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Shopping Cart Modal -->

    <!-- Start Wishlist Modal -->
    <div
      class="modal right fade shoppingWishlistModal"
      id="shoppingWishlistModal"
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
            <h3>My Wish List (3)</h3>

            <div class="products-cart-content">
              <div class="products-cart">
                <div class="products-image">
                  <a href="#"
                    ><img src="assets/img/products/img1.jpg" alt="image"
                  /></a>
                </div>

                <div class="products-content">
                  <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                  <span>Blue / XS</span>
                  <div class="products-price">
                    <span>1</span>
                    <span>x</span>
                    <span class="price">$250.00</span>
                  </div>
                  <a href="#" class="remove-btn"><i class="bx bx-trash"></i></a>
                </div>
              </div>

              <div class="products-cart">
                <div class="products-image">
                  <a href="#"
                    ><img src="assets/img/products/img2.jpg" alt="image"
                  /></a>
                </div>

                <div class="products-content">
                  <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                  <span>Blue / XS</span>
                  <div class="products-price">
                    <span>1</span>
                    <span>x</span>
                    <span class="price">$200.00</span>
                  </div>
                  <a href="#" class="remove-btn"><i class="bx bx-trash"></i></a>
                </div>
              </div>

              <div class="products-cart">
                <div class="products-image">
                  <a href="#"
                    ><img src="assets/img/products/img3.jpg" alt="image"
                  /></a>
                </div>

                <div class="products-content">
                  <h3><a href="#">Hanes Men's Pullover</a></h3>
                  <span>Blue / XS</span>
                  <div class="products-price">
                    <span>1</span>
                    <span>x</span>
                    <span class="price">$200.00</span>
                  </div>
                  <a href="#" class="remove-btn"><i class="bx bx-trash"></i></a>
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
@endsection