<!-- Start Products Area -->

<?php if(session()->has('message')): ?>

            <div class="alert alert-success">

              <button type="button" class="close" data_dismiss="alert" aria-hidden="true">x</button>
              
              <?php echo e(session()->get('message')); ?>


            </div>

            <?php endif; ?>

        <section class="products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2>Recent Products</h2>
                </div>

                <div class="row">

                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="products-box product_data">
                            <div class="products-image">
                                <a href="<?php echo e(url('product_details', $products->id)); ?>">
                                    <img src="product/<?php echo e($products->image); ?>" class="main-image" alt="image">
                                    <img src="product/<?php echo e($products->image); ?>" class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                     
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="<?php echo e(url('product_details', $products->id)); ?>" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <?php if($products->new==1): ?>
                                <div class="new-tag">New!</div>
                                <?php endif; ?>
                            </div>

                            <div class="products-content">
                                <span class="category"><?php echo e($products->category); ?></span>
                                <h3><a href="products-type-2.html"><?php echo e($products->title); ?></a></h3>
                                <div class="price">

                                    <?php if($products->discount_price!=null): ?>

                                        <span class="old-price"><?php echo e($products->price); ?>den</span>
                                        <span class="new-price"><?php echo e($products->discount_price); ?>den</span>

                                    <?php else: ?>

                                        <?php if(Auth::check() && isset($products->Stylistprice) && Auth::user()->usertype=='2'): ?>
                                            <span class="new-price"><?php echo e($products->Stylistprice); ?>den</span>
                                        <?php else: ?>
                                            <span class="new-price"><?php echo e($products->price); ?>den</span>
                                        <?php endif; ?>



                                    <?php endif; ?>

                                </div>
                                
                                    
                                    <div class="row">
                                        <input type="hidden" value="<?php echo e($products->id); ?>" class="prod_id">
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

                            <span class="products-discount">
                                <span>
                                    20% OFF
                                </span>
                            </span>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
<!-- End Products Area --><?php /**PATH C:\Users\Luka\Desktop\tessawebdardi\tessaweb1\tessaweb1\resources\views/home/ourProducts.blade.php ENDPATH**/ ?>