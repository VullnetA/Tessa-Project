<!-- Start Products Area -->
        <section class="products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">See Our Collection</span>
                    <h2>Recent Products</h2>
                </div>

                <div class="row">

                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="products-box">
                            <div class="products-image">
                                <a href="<?php echo e(url('product_details', $products->id)); ?>">
                                    <img src="product/<?php echo e($products->image); ?>" class="main-image" alt="image">
                                    <img src="product/<?php echo e($products->image); ?>" class="hover-image" alt="image">
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

                                        <span class="new-price"><?php echo e($products->price); ?>den</span>

                                    <?php endif; ?>

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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
<!-- End Products Area --><?php /**PATH C:\Users\Luka\Desktop\Preparations\tessaweb\tessaweb\tessaweb\resources\views/home/recentProducts.blade.php ENDPATH**/ ?>