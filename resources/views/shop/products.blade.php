<style>

    .input-counter{
       padding-left: 20px;
    }
    .qty-input{

        max-width: 60px;
    }

    .input-counter {
        display: flex;
        align-items: center;
      }
      .btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: #ddd;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
      }
      .qty-input {
        width: 40px;
        height: 32px;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin: 0 10px;
      }

    </style>


<section class="haircolor">
  <div class="hairtext">
    <h3>Choose your Hair Color:</h3>
  </div>
  <div class="haircolorimg">
    <a href="{{ url('/category/No Yellow Color') }}"><img class="colorImage" src="{{ asset('assets/img/CategoriesBannerPhoto/No Yellow Color.jpg') }}"></a>

    <a href="{{ url('/category/OroTherapy Color') }}"><img class="colorImage" src="{{ asset('assets/img/CategoriesBannerPhoto/OroTherapy Color.jpg') }}"></a>

    <a href="{{ url('/category/RrLine Color') }}"><img class="colorImage" src="{{ asset('assets/img/CategoriesBannerPhoto/RrLine Color.jpg') }}"></a>

    <a href="{{ url('/category/Fanola Color') }}"><img class="colorImage" src="{{ asset('assets/img/CategoriesBannerPhoto/Fanola Color.jpg') }}"></a>

  </div>
</section>

<!-- Start Products Area -->
<section class="products-area products-collections-area pt-100 pb-70">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="woocommerce-widget-area">
              <div class="woocommerce-widget collections-list-widget">
                <h3 class="woocommerce-widget-title">Select By Category:</h3>

                  <ul class="collections-list-row">
                  @foreach($category as $category)
                    <li>
                    <a href="{{ url('/category/'.$category->category_name) }}"><span>&#9788;</span> {{$category->category_name}}</a>
                    </li>
                  @endforeach
                  </ul>

              </div>
          

              <div class="woocommerce-widget brands-list-widget">
                <h3 class="woocommerce-widget-title">Select By Brand:</h3>

                <ul class="brands-list-row">
                  @foreach($brand as $brand)
                  <li><a href="{{ url('/brand/'.$brand->brand_name) }}"><span>&#10029;</span> {{$brand->brand_name}}</a></li>
                  @endforeach
                </ul>
              </div>

              <div class="woocommerce-widget aside-trending-widget">
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

              @foreach ($products as $product)


              <div class="col-lg-4 col-md-6 col-sm-6 products-col-item">
                <div class="single-products-box product_data">
                  <div class="products-image">
                      <a href="{{url('product_details', $product->id)}}">
                        <img src="product/{{$product->image}}" class="main-image" alt="image">
                        <img src="product/{{$product->image}}" class="hover-image" alt="image">
                    </a>

                      <div class="products-button">
                          <ul>
                              <li>
                                  <div class="quick-view-btn">
                                      <a href="{{url('product_details', $product->id)}}" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                          <i class='bx bx-search-alt'></i>
                                          <span class="tooltip-label">Quick View</span>
                                      </a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>

                    <div class="products-content">
                        <span class="category">{{$product->category}}</span>
                        <h3><a href="products-type-2.html">{{$product->title}}</a></h3>
                        <div class="price">

                            @if($product->discount_price!=null)

                                <span class="old-price">{{$product->price}}den</span>
                                <span class="new-price">{{$product->discount_price}}den</span>

                            @else

                                @if(Auth::check() && isset($product->Stylistprice) && Auth::user()->usertype=='2')
                                    <span class="new-price">{{$product->Stylistprice}}den</span>
                                @else
                                    <span class="new-price">{{$product->price}}den</span>
                                @endif



                            @endif

                        </div>


                        <div class="row">
                                    <input type="hidden" value="{{$product->id}}" class="prod_id">
                                    <div class="d-flex align-items-center" style="padding-top: 15px;">
                                      <button type="submit" class="col-md-6 addToCartBtn mr-3">Add Cart</button>
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
                {{ $products->links('partials.my-paginate') }}
              </span>

        </div>
      </div>
        </div>
      </div>
    </section>
    <!-- End Products Area -->
