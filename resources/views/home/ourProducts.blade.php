<!-- Start Products Area -->
        <section class="products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2>Recent Products</h2>
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

                                        <span class="new-price">{{$products->price}}den</span>

                                    @endif

                                </div>
                                <form action="{{url('add_cart', $products->id)}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div>
                                            <input type="submit" value="Add to Cart" class="add-to-cart col-md-5" style="padding-left: 60px">
                                        </div>
                                        <div>
                                            <input type="number" name="quantity" class="add-to-cart col-md-4" value="1" min="1" style="width: 50px">
                                        </div>
                                    </div>
                                </form>
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