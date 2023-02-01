<!-- Start Cart Area -->
<section class="cart-area ptb-100">
    <div class="container">

        <div class="cart-table table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Name</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>

                <tbody>

                <?php
                    $totalprice=0;
                ?>

                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td class="product-thumbnail">
                            <a href="#">
                                <img src="/product/<?php echo e($cart->image); ?>" alt="item" />
                            </a>
                        </td>

                        <td class="product-name">
                            <a href="#"><?php echo e($cart->product_title); ?></a>
                            <ul>
                                <li>Color: <span>Light Blue</span></li>
                                <li>Size: <span>XL</span></li>
                                <li>Material: <span>Cotton</span></li>
                            </ul>
                        </td>

                        <td class="product-price">
                            <span class="unit-amount"><?php echo e($cart->unitprice); ?></span>
                        </td>


                        <td class="product-quantity">
                            <div class="input-counter">
                                <span class="minus-btn"><i class="bx bx-minus updateCartItem" data-cartid="<?php echo e($cart->id); ?>" data-qty="<?php echo e($cart->quantity); ?>"></i></span>
                                <input type="text" min="1" value="<?php echo e($cart->quantity); ?>" />
                                <span class="plus-btn"><i class="bx bx-plus updateCartItem" data-cartid="<?php echo e($cart->id); ?>" data-qty="<?php echo e($cart->quantity); ?>"></i></span>
                            </div>
                        </td>


                        <td class="product-subtotal">
                            <span class="subtotal-amount"><?php echo e($cart->unitprice * $cart->quantity); ?></span>

                            <button class="remove"><i class="bx bx-trash deleteCartitem" data-cartid="<?php echo e($cart->id); ?>"></i></button>
                        </td>
                    </tr>

                    <?php
                        $totalprice=$totalprice + ($cart->unitprice * $cart->quantity)
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>
        </div>



        <div class="cart-buttons">
            <div class="row align-items-center">
                <div class="col-lg-7 col-sm-7 col-md-7">
                    <a href="#" class="optional-btn">Continue Shopping</a>
                </div>

                <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                    <a href="#" class="default-btn">Update Cart</a>
                </div>

            </div>
        </div>

        <div class="cart-totals">
            <h3>Cart Totals</h3>

            <ul>
                <li>Total <span><?php echo e($totalprice); ?> MKD</span></li>
            </ul>

            <a href="<?php echo e(url('checkout')); ?>" class="default-btn">Proceed to Checkout</a>
        </div>

    </div>
</section>
<!-- End Cart Area -->
<?php /**PATH C:\Users\Luka\Desktop\tessawebdardi\tessaweb1\resources\views/cart/cartArea.blade.php ENDPATH**/ ?>