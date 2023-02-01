<!-- Start Product Details Area -->
    <section class="product-details-area pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <div class="products-details-image">
                <img src="product/<?php echo e($product->image); ?>" class="main-image" alt="image" />
            </div>
          </div>

          <div class="col-lg-7 col-md-12">
            <div class="products-details-desc">
              <h3><?php echo e($product->title); ?></h3>

              <div class="price">
              <?php if($product->discount_price!=null): ?>

              <span class="old-price"><?php echo e($product->price); ?>den</span>
              <span class="new-price"><?php echo e($product->discount_price); ?>den</span>

              <?php else: ?>

              <span class="new-price"><?php echo e($product->price); ?>den</span>

              <?php endif; ?>
              </div>

              <ul class="products-info">
                <li><span>Vendor:</span> <a href="#"><?php echo e($product->vendor); ?></a></li>
                <li>
                  <span>Availability:</span> <a href="#"><?php echo e($product->quantity); ?></a>
                </li>
                <li><span>Products Type:</span> <a href="#"><?php echo e($product->category); ?></a></li>
              </ul>

              <!--
              <div class="products-color-switch">
                <span>Color:</span>

                <ul>
                  <li><a href="#" title="Black" class="color-black"></a></li>
                  <li><a href="#" title="White" class="color-white"></a></li>
                  <li class="active">
                    <a href="#" title="Green" class="color-green"></a>
                  </li>
                  <li>
                    <a
                      href="#"
                      title="Yellow Green"
                      class="color-yellowgreen"
                    ></a>
                  </li>
                  <li><a href="#" title="Teal" class="color-teal"></a></li>
                </ul>
              </div>
-->

              <div class="products-info-btn">
                <a
                  href="#"
                  data-bs-toggle="modal"
                  data-bs-target="#sizeGuideModal"
                  ><i class="bx bx-crop"></i> Size guide</a
                >
                <a
                  href="#"
                  data-bs-toggle="modal"
                  data-bs-target="#productsShippingModal"
                  ><i class="bx bxs-truck"></i> Shipping</a
                >
                <a href="contact.html"
                  ><i class="bx bx-envelope"></i> Ask about this products</a
                >
              </div>
              <form action="<?php echo e(url('add_cart', $product->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="products-add-to-cart">
                  <div class="input-counter">
                    <span class="minus-btn"><i class="bx bx-minus"></i></span>
                    <input name="quantity" type="text" value="1" min="1" />
                    <span class="plus-btn"><i class="bx bx-plus"></i></span>
                  </div>

                  <button type="submit" value="Add to Cart" class="default-btn">
                    <i class="fas fa-cart-plus"></i> Add to Cart
                  </button>
                </div>

              </form>

              <div class="wishlist-compare-btn">
                <a href="#" class="optional-btn"
                  ><i class="bx bx-heart"></i> Add to Wishlist</a
                >
                <a href="#" class="optional-btn"
                  ><i class="bx bx-refresh"></i> Add to Compare</a
                >
              </div>

              <div class="buy-checkbox-btn">
                <div class="item">
                  <input class="inp-cbx" id="cbx" type="checkbox" />
                  <label class="cbx" for="cbx">
                    <span>
                      <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                      </svg>
                    </span>
                    <span>I agree with the terms and conditions</span>
                  </label>
                </div>

                <div class="item">
                  <a href="#" class="default-btn">Buy it now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab products-details-tab">
          <ul class="tabs">
            <li>
              <a href="#">
                <div class="dot"></div>
                Description
              </a>
            </li>

            <li>
              <a href="#">
                <div class="dot"></div>
                Additional Information
              </a>
            </li>

            <li>
              <a href="#">
                <div class="dot"></div>
                Shipping
              </a>
            </li>

            <li>
              <a href="#">
                <div class="dot"></div>
                Why Buy From Us
              </a>
            </li>

            <li>
              <a href="#">
                <div class="dot"></div>
                Reviews
              </a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tabs-item">
              <div class="products-details-tab-content">
                <p>
                  Design inspiration lorem ipsum dolor sit amet, consectetuer
                  adipiscing elit. Morbi commodo, ipsum sed pharetra gravida,
                  orci magna rhoncus neque, id pulvinar odio lorem non turpis.
                  Nullam sit amet enim. Suspendisse id velit vitae ligula
                  volutpat condimentum. Aliquam erat volutpat. Sed quis velit.
                  Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien.
                  Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper,
                  lectus nunc ullamcorper orci, fermentum bibendum enim nibh
                  eget ipsum. Nam consectetuer. Sed aliquam, nunc eget euismod
                  ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum
                  enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere
                  sapien.
                </p>

                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <ul>
                      <li>Fabric 1: 100% Polyester</li>
                      <li>Fabric 2: 100% Polyester, Lining: 100% Polyester</li>
                      <li>Fabric 3: 75% Polyester, 20% Viscose, 5% Elastane</li>
                    </ul>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <ol>
                      <li>Fabric 3: 75% Polyester, 20% Viscose, 5% Elastane</li>
                      <li>Fabric 2: 100% Polyester, Lining: 100% Polyester</li>
                      <li>Fabric 1: 100% Polyester</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>

            <div class="tabs-item">
              <div class="products-details-tab-content">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td>Color:</td>
                        <td>Blue, Purple, White</td>
                      </tr>
                      <tr>
                        <td>Size:</td>
                        <td>20, 24</td>
                      </tr>
                      <tr>
                        <td>Material:</td>
                        <td>100% Polyester</td>
                      </tr>
                      <tr>
                        <td>Height:</td>
                        <td>180 cm - 5' 11”</td>
                      </tr>
                      <tr>
                        <td>Bust:</td>
                        <td>83 cm - 32”</td>
                      </tr>
                      <tr>
                        <td>Waist:</td>
                        <td>57 cm - 22”</td>
                      </tr>
                      <tr>
                        <td>Hips:</td>
                        <td>88 cm - 35</td>
                      </tr>
                      <tr>
                        <td>Shipping:</td>
                        <td>Free</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="tabs-item">
              <div class="products-details-tab-content">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Shipping</td>
                        <td>This item Ship to USA</td>
                      </tr>

                      <tr>
                        <td>Delivery</td>
                        <td>
                          Estimated between Wednesday 07/31/2021 and Monday
                          08/05/2021 <br />
                          Will usually ship within 1 bussiness day.
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="tabs-item">
              <div class="products-details-tab-content">
                <p>Here are 5 more great reasons to buy from us:</p>

                <ol>
                  <li>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s.
                  </li>
                  <li>
                    Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s.
                  </li>
                  <li>
                    When an unknown printer took a galley of type and scrambled
                    it to make a type specimen book.
                  </li>
                  <li>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                  </li>
                  <li>
                    When an unknown printer took a galley of type and scrambled
                    it to make a type specimen book.
                  </li>
                </ol>
              </div>
            </div>

            <div class="tabs-item">
              <div class="products-details-tab-content">
                <div class="products-review-form">
                  <h3>Customer Reviews</h3>

                  <div class="review-title">
                    <div class="rating">
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bx-star"></i>
                    </div>
                    <p>Based on 3 reviews</p>
                    <a href="#" class="default-btn">Write a Review</a>
                  </div>

                  <div class="review-comments">
                    <div class="review-item">
                      <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                      </div>
                      <h3>Good</h3>
                      <span
                        ><strong>Admin</strong> on
                        <strong>Sep 21, 2021</strong></span
                      >
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation.
                      </p>
                    </div>

                    <div class="review-item">
                      <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                      </div>
                      <h3>Good</h3>
                      <span
                        ><strong>Admin</strong> on
                        <strong>Sep 21, 2021</strong></span
                      >
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation.
                      </p>
                    </div>

                    <div class="review-item">
                      <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bx-star"></i>
                      </div>
                      <h3>Good</h3>
                      <span
                        ><strong>Admin</strong> on
                        <strong>Sep 21, 2021</strong></span
                      >
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation.
                      </p>
                    </div>
                  </div>

                  <div class="review-form">
                    <h3>Write a Review</h3>

                    <form>
                      <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <input
                              type="text"
                              id="name"
                              name="name"
                              placeholder="Enter your name"
                              class="form-control"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <input
                              type="email"
                              id="email"
                              name="email"
                              placeholder="Enter your email"
                              class="form-control"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <input
                              type="text"
                              id="review-title"
                              name="review-title"
                              placeholder="Enter your review a title"
                              class="form-control"
                            />
                          </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <textarea
                              name="review-body"
                              id="review-body"
                              cols="30"
                              rows="6"
                              placeholder="Write your comments here"
                              class="form-control"
                            ></textarea>
                          </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                          <button type="submit" class="default-btn">
                            Submit Review
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="related-products">
        <div class="container">
          <div class="section-title">
            <span class="sub-title">Our Shop</span>
            <h2>Related Products</h2>
          </div>

          <div class="products-slides owl-carousel owl-theme">
            <div class="single-products-box">
              <div class="products-image">
                <a href="#">
                  <img
                    src="assets/img/products/img1.jpg"
                    class="main-image"
                    alt="image"
                  />
                  <img
                    src="assets/img/products/img-hover1.jpg"
                    class="hover-image"
                    alt="image"
                  />
                </a>

                <div class="products-button">
                  <ul>
                    <li>
                      <div class="wishlist-btn">
                        <a href="#">
                          <i class="bx bx-heart"></i>
                          <span class="tooltip-label">Add to Wishlist</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="compare-btn">
                        <a href="#">
                          <i class="bx bx-refresh"></i>
                          <span class="tooltip-label">Compare</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="quick-view-btn">
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#productsQuickView"
                        >
                          <i class="bx bx-search-alt"></i>
                          <span class="tooltip-label">Quick View</span>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="products-content">
                <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                <div class="price">
                  <span class="old-price">$321</span>
                  <span class="new-price">$250</span>
                </div>
                <div class="star-rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <a href="#" class="add-to-cart">Add to Cart</a>
              </div>
            </div>

            <div class="single-products-box">
              <div class="products-image">
                <a href="#">
                  <img
                    src="assets/img/products/img2.jpg"
                    class="main-image"
                    alt="image"
                  />
                  <img
                    src="assets/img/products/img-hover2.jpg"
                    class="hover-image"
                    alt="image"
                  />
                </a>

                <div class="products-button">
                  <ul>
                    <li>
                      <div class="wishlist-btn">
                        <a href="#">
                          <i class="bx bx-heart"></i>
                          <span class="tooltip-label">Add to Wishlist</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="compare-btn">
                        <a href="#">
                          <i class="bx bx-refresh"></i>
                          <span class="tooltip-label">Compare</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="quick-view-btn">
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#productsQuickView"
                        >
                          <i class="bx bx-search-alt"></i>
                          <span class="tooltip-label">Quick View</span>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>

                <div class="sale-tag">Sale!</div>
              </div>

              <div class="products-content">
                <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                <div class="price">
                  <span class="old-price">$210</span>
                  <span class="new-price">$200</span>
                </div>
                <div class="star-rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <a href="#" class="add-to-cart">Add to Cart</a>
              </div>
            </div>

            <div class="single-products-box">
              <div class="products-image">
                <a href="#">
                  <img
                    src="assets/img/products/img3.jpg"
                    class="main-image"
                    alt="image"
                  />
                  <img
                    src="assets/img/products/img-hover3.jpg"
                    class="hover-image"
                    alt="image"
                  />
                </a>

                <div class="products-button">
                  <ul>
                    <li>
                      <div class="wishlist-btn">
                        <a href="#">
                          <i class="bx bx-heart"></i>
                          <span class="tooltip-label">Add to Wishlist</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="compare-btn">
                        <a href="#">
                          <i class="bx bx-refresh"></i>
                          <span class="tooltip-label">Compare</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="quick-view-btn">
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#productsQuickView"
                        >
                          <i class="bx bx-search-alt"></i>
                          <span class="tooltip-label">Quick View</span>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="products-content">
                <h3><a href="#">Hanes Men's Pullover</a></h3>
                <div class="price">
                  <span class="old-price">$210</span>
                  <span class="new-price">$200</span>
                </div>
                <div class="star-rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <a href="#" class="add-to-cart">Add to Cart</a>
              </div>
            </div>

            <div class="single-products-box">
              <div class="products-image">
                <a href="#">
                  <img
                    src="assets/img/products/img4.jpg"
                    class="main-image"
                    alt="image"
                  />
                  <img
                    src="assets/img/products/img-hover4.jpg"
                    class="hover-image"
                    alt="image"
                  />
                </a>

                <div class="products-button">
                  <ul>
                    <li>
                      <div class="wishlist-btn">
                        <a href="#">
                          <i class="bx bx-heart"></i>
                          <span class="tooltip-label">Add to Wishlist</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="compare-btn">
                        <a href="#">
                          <i class="bx bx-refresh"></i>
                          <span class="tooltip-label">Compare</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="quick-view-btn">
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#productsQuickView"
                        >
                          <i class="bx bx-search-alt"></i>
                          <span class="tooltip-label">Quick View</span>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="products-content">
                <h3><a href="#">Gildan Men's Crew T-Shirt</a></h3>
                <div class="price">
                  <span class="new-price">$150</span>
                </div>
                <div class="star-rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <a href="#" class="add-to-cart">Add to Cart</a>
              </div>
            </div>

            <div class="single-products-box">
              <div class="products-image">
                <a href="#">
                  <img
                    src="assets/img/products/img5.jpg"
                    class="main-image"
                    alt="image"
                  />
                  <img
                    src="assets/img/products/img-hover5.jpg"
                    class="hover-image"
                    alt="image"
                  />
                </a>

                <div class="products-button">
                  <ul>
                    <li>
                      <div class="wishlist-btn">
                        <a href="#">
                          <i class="bx bx-heart"></i>
                          <span class="tooltip-label">Add to Wishlist</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="compare-btn">
                        <a href="#">
                          <i class="bx bx-refresh"></i>
                          <span class="tooltip-label">Compare</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="quick-view-btn">
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#productsQuickView"
                        >
                          <i class="bx bx-search-alt"></i>
                          <span class="tooltip-label">Quick View</span>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="products-content">
                <h3><a href="#">Yidarton Women's Comfy</a></h3>
                <div class="price">
                  <span class="new-price">$240</span>
                </div>
                <div class="star-rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <a href="#" class="add-to-cart">Add to Cart</a>
              </div>
            </div>

            <div class="single-products-box">
              <div class="products-image">
                <a href="#">
                  <img
                    src="assets/img/products/img6.jpg"
                    class="main-image"
                    alt="image"
                  />
                  <img
                    src="assets/img/products/img-hover6.jpg"
                    class="hover-image"
                    alt="image"
                  />
                </a>

                <div class="products-button">
                  <ul>
                    <li>
                      <div class="wishlist-btn">
                        <a href="#">
                          <i class="bx bx-heart"></i>
                          <span class="tooltip-label">Add to Wishlist</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="compare-btn">
                        <a href="#">
                          <i class="bx bx-refresh"></i>
                          <span class="tooltip-label">Compare</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="quick-view-btn">
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#productsQuickView"
                        >
                          <i class="bx bx-search-alt"></i>
                          <span class="tooltip-label">Quick View</span>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>

                <div class="new-tag">New!</div>
              </div>

              <div class="products-content">
                <h3><a href="#">Womens Tops Color</a></h3>
                <div class="price">
                  <span class="old-price">$150</span>
                  <span class="new-price">$100</span>
                </div>
                <div class="star-rating">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <a href="#" class="add-to-cart">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Product Details Area -->
<?php /**PATH C:\xampp\htdocs\tessaweb1\resources\views/product/productDetails.blade.php ENDPATH**/ ?>