<!-- Start Products Area -->
<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Popular Products</h2>
        </div>

        <div class="row">

            @foreach($product1 as $products)
            @if($products->PopularProducts==true)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box product_data">
                    <div class="products-image">
                        <a href="{{url('product_details', $products->id)}}">
                            <img src="product/{{$products->image}}" class="main-image" alt="image">
                            <img src="product/{{$products->image}}" class="hover-image" alt="image">
                        </a>

                        
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

                    
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- End Products Area -->