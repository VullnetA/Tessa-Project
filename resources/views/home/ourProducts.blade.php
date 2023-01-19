<!-- Start Products Area -->
<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Our Products</h2>
        </div>

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

                                <span class="new-price">{{$products->price}}den</span>

                            @endif

                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
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