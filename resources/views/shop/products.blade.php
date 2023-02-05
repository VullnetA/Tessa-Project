<!-- Start Products Area -->
<section class="products-area products-collections-area pt-100 pb-70">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="woocommerce-widget-area">
              <div class="woocommerce-widget collections-list-widget">
                <h3 class="woocommerce-widget-title">Collections</h3>

                <ul class="collections-list-row">
                  <li><a href="#">Men's</a></li>
                  <li class="active"><a href="#" class="active">Women’s</a></li>
                  <li><a href="#">Clothing</a></li>
                  <li><a href="#">Shoes</a></li>
                  <li><a href="#">Accessories</a></li>
                  <li><a href="#">Uncategorized</a></li>
                </ul>
              </div>

              <div class="woocommerce-widget price-list-widget">
                <h3 class="woocommerce-widget-title">Price</h3>

                <div class="collection-filter-by-price">
                    <label>
                        <input
                          class="js-range-of-price"
                          type="text"
                          data-min="0"
                          data-max="1055"
                          name="filter_by_price"
                          data-step="10"
                        />
                    </label>
                </div>
              </div>

              <div class="woocommerce-widget size-list-widget">
                <h3 class="woocommerce-widget-title">Size</h3>

                <ul class="size-list-row">
                  <li><a href="#">20</a></li>
                  <li><a href="#">24</a></li>
                  <li class="active"><a href="#">36</a></li>
                  <li><a href="#">30</a></li>
                  <li><a href="#">XS</a></li>
                  <li><a href="#">S</a></li>
                  <li><a href="#">M</a></li>
                  <li><a href="#">L</a></li>
                  <li><a href="#">L</a></li>
                  <li><a href="#">XL</a></li>
                </ul>
              </div>

              <div class="woocommerce-widget color-list-widget">
                <h3 class="woocommerce-widget-title">Color</h3>

                <ul class="color-list-row">
                  <li class="active">
                    <a href="#" title="Black" class="color-black"></a>
                  </li>
                  <li><a href="#" title="Red" class="color-red"></a></li>
                  <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                  <li><a href="#" title="White" class="color-white"></a></li>
                  <li><a href="#" title="Blue" class="color-blue"></a></li>
                  <li><a href="#" title="Green" class="color-green"></a></li>
                  <li>
                    <a
                      href="#"
                      title="Yellow Green"
                      class="color-yellowgreen"
                    ></a>
                  </li>
                  <li><a href="#" title="Pink" class="color-pink"></a></li>
                  <li><a href="#" title="Violet" class="color-violet"></a></li>
                  <li>
                    <a
                      href="#"
                      title="Blue Violet"
                      class="color-blueviolet"
                    ></a>
                  </li>
                  <li><a href="#" title="Lime" class="color-lime"></a></li>
                  <li><a href="#" title="Plum" class="color-plum"></a></li>
                  <li><a href="#" title="Teal" class="color-teal"></a></li>
                </ul>
              </div>

              <div class="woocommerce-widget brands-list-widget">
                <h3 class="woocommerce-widget-title">Brands</h3>

                <ul class="brands-list-row">
                  <li><a href="#">Gucci</a></li>
                  <li><a href="#">Virgil Abloh</a></li>
                  <li><a href="#">Balenciaga</a></li>
                  <li class="active"><a href="#">Moncler</a></li>
                  <li><a href="#">Fendi</a></li>
                  <li><a href="#">Versace</a></li>
                </ul>
              </div>

              <div class="woocommerce-widget aside-trending-widget">
                <div class="aside-trending-products">
                  <img src="assets/img/offer-bg.jpg" alt="image" />

                  <div class="category">
                    <h3>Top Trending</h3>
                    <span>Spring/Summer 2021 Collection</span>
                  </div>
                  <a href="#" class="link-btn"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8 col-md-12">
            <div class="products-filter-options">
              <div class="row align-items-center">
                <div class="col-lg-4 col-md-4">
                  <div class="d-lg-flex d-md-flex align-items-center">
                    <span class="sub-title d-lg-none"
                      ><a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#productsFilterModal"
                        ><i class="bx bx-filter-alt"></i> Filter</a
                      ></span
                    >

                    <span class="sub-title d-none d-lg-block d-md-block"
                      >View:</span
                    >

                    <div class="view-list-row d-none d-lg-block d-md-block">
                      <div class="view-column">
                        <a href="#" class="icon-view-two">
                          <span></span>
                          <span></span>
                        </a>

                        <a href="#" class="icon-view-three active">
                          <span></span>
                          <span></span>
                          <span></span>
                        </a>

                        <a href="#" class="icon-view-four">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                        </a>

                        <a href="#" class="view-grid-switch">
                          <span></span>
                          <span></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4">
                  <p>Showing 1 – 18 of 100</p>
                </div>

                <div class="col-lg-4 col-md-4">
                  <div class="products-ordering-list">
                    <select>
                      <option>Sort by Price: Low to High</option>
                      <option>Default Sorting</option>
                      <option>Sort by Popularity</option>
                      <option>Sort by Average Rating</option>
                      <option>Sort by Latest</option>
                      <option>Sort by Price: High to Low</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div id="products-collections-filter" class="row">

              @foreach ($product as $products)


              <div class="col-lg-4 col-md-6 col-sm-6 products-col-item">
                <div class="single-products-box">
                  <div class="products-image">
                      <a href="{{url('product_details', $products->id)}}">
                        <img src="product/{{$products->image}}" class="main-image" alt="image">
                        <img src="product/{{$products->image}}" class="hover-image" alt="image">
                    </a>

                      <div class="products-button">
                          <ul>

                              <li>
                                  <div class="quick-view-btn">
                                      <a href="{{url('product_details', $products->id)}}" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                          <i class='bx bx-search-alt'></i>
                                          <span class="tooltip-label">Quick View</span>
                                      </a>
                                  </div>
                              </li>
                          </ul>
                      </div>
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


                        <div class="row">
                            <input type="hidden" value="{{$products->id}}" class="prod_id">
                            <div>
                                <a type="submit" class="col-md-5 addToCartBtn" style="padding-left: 60px">Add Cart</a>
                            </div>
                            <div>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class="bx bx-minus"></i></span>
                                    <input type="text" class="qty-input" value="1" />
                                    <span class="plus-btn"><i class="bx bx-plus"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
              </div>
              @endforeach
              <span class="text-center">
                {{ $product->links('partials.my-paginate') }}
              </span>
          
        </div>
      </div>
    </section>
    <!-- End Products Area -->
