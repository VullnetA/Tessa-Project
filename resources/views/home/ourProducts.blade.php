<!-- Start Products Area -->
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
    
@if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data_dismiss="alert" aria-hidden="true">x</button>

              {{session()->get('message')}}

            </div>

            @endif

        <section class="products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2>Recent Products</h2>
                </div>

                <div class="row">

                    @foreach($product as $products)

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="products-box product_data">
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


                                <div class="row">
                                    <input type="hidden" value="{{$products->id}}" class="prod_id">
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
        </section>
<!-- End Products Area -->
