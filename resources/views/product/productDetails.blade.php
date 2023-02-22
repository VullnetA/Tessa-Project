<!-- Start Product Details Area -->
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
    <section class="product-details-area pt-100 pb-70 product_data">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <div class="products-details-image">
                <img src="product/{{$product->image}}" class="main-image" alt="image" />
            </div>
          </div>

          <div class="col-lg-7 col-md-12">
            <div class="products-details-desc">
              <h3>{{$product->title}}</h3>

              <div class="price">
              @if($product->discount_price!=null)

              <span class="old-price">{{$product->price}}den</span>
              <span class="new-price">{{$product->discount_price}}den</span>

              @else

              <span class="new-price">{{$product->price}}den</span>

              @endif
              </div>

              <ul class="products-info">
                <li><span>Vendor:</span> <a href="#">{{$product->brand}}</a></li>
                <li>
                  <span>Availability:</span> <a href="#">{{$product->quantity}}</a>
                </li>
                <li><span>Products Type:</span> <a href="#">{{$product->category}}</a></li>
              </ul>
             
              <div class="row">
                <input type="hidden" value="{{$product->id}}" class="prod_id">
                <div class="d-flex align-items-center" style="padding-top: 15px;">
                  <button type="submit" class="col-md-6 addToCartBtn mr-3" style="max-width:200px;"> Add Cart</button>
                  <div class="input-counter">
                    <span class="minus-btn"><i class="bx bx-minus"></i></span>
                    <input type="text" class="qty-input" value="1" />
                    <span class="plus-btn"><i class="bx bx-plus"></i></span>
                  </div>
                </div>
              </div>
              

              <div class="buy-checkbox-btn">
                
                
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

           
          </ul>

          <div class="tab-content">
            <div class="tabs-item">
              <div class="products-details-tab-content">
                <p>{{$product->description}}</p>

              </div>
            </div>

          
      </div>
    </section>
<!-- End Product Details Area -->