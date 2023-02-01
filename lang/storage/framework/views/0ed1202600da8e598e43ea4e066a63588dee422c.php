<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/boxicons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/meanmenu.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/rangeSlider.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/dark.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
        
        <title>Tessa Academy</title>

        <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/tessapurplelogo-01.png')); ?>">
        <script src="cart.js"></script>
    </head>

  <body>
    <!-- Start Top Header Area -->
    <?php echo $__env->make('product.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
    <!-- End Header Area -->

    <!-- Start Page Title -->
    <?php echo $__env->make('checkout.pageTitle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Page Title -->

    <!-- Start Checkout Area -->
    <?php echo $__env->make('checkout.checkoutArea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Checkout Area -->

    <!-- Start Facility Area -->
    <?php echo $__env->make('home.facilityArea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Facility Area -->

    <!-- Start Instagram Area -->
    <?php echo $__env->make('home.instagram', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Instagram Area -->

    <!-- Start Footer Area -->
    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Footer Area -->

    <div class="go-top"><i class="bx bx-up-arrow-alt"></i></div>

        <!-- Links of JS files -->
        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/parallax.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/rangeSlider.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/nice-select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/meanmenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/sticky-sidebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/form-validator.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/contact-form-script.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/ajaxchimp.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\tessaweb1\resources\views/checkout/checkout.blade.php ENDPATH**/ ?>