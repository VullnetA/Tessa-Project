<!-- Start Checkout Area -->
<?php if(session()->has('message')): ?>

            <div class="alert alert-success">
              <center>
              <?php echo e(session()->get('message')); ?>

              </center>
            </div>

<?php endif; ?>

<section class="checkout-area ptb-100">
      <div class="container">
        <form action="<?php echo e(url('/cash_order')); ?>" method="POST">
            <?php echo csrf_field(); ?>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="billing-details">
                <h3 class="title">Billing Details</h3>
                
                <?php
                $totalprice=0;
                ?>
                
                <div class="row">
                  <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                      <label>Town / City <span class="required">*</span></label>
                      <div class="select-box">
                        <select name="city" class="form-control">
                          <option>Skopje</option>
                          <option>Tetovo</option>
                          <option>Gostivar</option>
                          <option>Ohrid</option>
                          <option>Prilep</option>
                          <option>Struga</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>First Name <span class="required">*</span></label>
                      <input type="text" name="firstname" class="form-control" />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Last Name <span class="required">*</span></label>
                      <input type="text" name="lastname" class="form-control" />
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" name="company" class="form-control" />
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                      <label>Address <span class="required">*</span></label>
                      <input type="text" name="address" class="form-control" />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Phone <span class="required">*</span></label>
                      <input type="text" name="phone" class="form-control" />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label
                        >Postcode / Zip <span class="required">*</span></label
                      >
                      <input type="text" name="postcode" class="form-control" />
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                      <label
                        >Email Address <span class="required">*</span></label
                      >
                      <input type="email" name="email" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="order-details">
                <h3 class="title">Your Order</h3>

                <div class="order-table table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="product-name">
                          <a href="#"><?php echo e($data->product_title); ?></a>
                        </td>

                        <td class="product-total">
                          <span class="subtotal-amount"><?php echo e($data->price); ?> MKD</span>
                        </td>
                      </tr>

                    <?php
                    $totalprice=$totalprice + $data->price
                    ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    

                      <tr>
                        <td class="order-subtotal">
                          <span>Cart Subtotal</span>
                        </td>

                        <td class="order-subtotal-price">
                          <span class="order-subtotal-amount"><?php echo e($totalprice); ?> MKD</span>
                        </td>
                      </tr>

                      <tr>
                        <td class="order-shipping">
                          <span>Shipping</span>
                        </td>

                        <td class="shipping-price">
                          <span>100 MKD</span>
                        </td>
                      </tr>

                      <tr>
                        <td class="total-price">
                          <span>Order Total</span>
                        </td>

                        <td class="product-subtotal">
                          <span class="subtotal-amount"><?php echo e($totalprice+100); ?> MKD</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="payment-box">
                  <input type="submit" value="PURCHASE WITH CASH ON DELIVERY" class="default-btn">
                  <a href="#" class="default-btn">PURCHASE WITH CARD PAYMENT</a>
                </div>
            
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
<!-- End Checkout Area --><?php /**PATH C:\xampp\htdocs\tessaweb1\resources\views/checkout/checkoutArea.blade.php ENDPATH**/ ?>