<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">
        .title_deg
        {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }

        .table_deg
        {
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
        }

        .th_deg
        {
            background-color: skyblue
        }

        .img_size
        {
            width:100px;
            height:100px;
        }

    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">

        <h1 class="title_deg">All Orders</h1>

              <div style="padding-left: 400px; padding-bottom: 30px;">
                  <form action="<?php echo e(url('search')); ?>" method="get">

                      <?php echo csrf_field(); ?>

                      <input type="text" style="color: black;" name="search" placeholder="Search">

                      <input type="submit" value="Search" class="btn btn-outline-primary">
                  </form>


              </div>

        <table class="table_deg">
            <tr class="th_deg">
                <th>Name</th>
                <th>Surname</th>
                <th>Company</th>
                <th>City</th>
                <th>Postcode</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Payment status</th>
                <th>Delivery Status</th>
                <th>Image</th>
            </tr>

            <?php $__empty_1 = true; $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($order->firstname); ?></td>
                <td><?php echo e($order->lastname); ?></td>
                <td><?php echo e($order->company); ?></td>
                <td><?php echo e($order->city); ?></td>
                <td><?php echo e($order->postcode); ?></td>
                <td><?php echo e($order->address); ?></td>
                <td><?php echo e($order->phone); ?></td>
                <td><?php echo e($order->email); ?></td>
                <td><?php echo e($order->product_title); ?></td>
                <td><?php echo e($order->quantity); ?></td>
                <td><?php echo e($order->price); ?></td>
                <td><?php echo e($order->payment_status); ?></td>
                <td><?php echo e($order->delivery_status); ?></td>
                <td>
                    <img class="img_size" src="/product/<?php echo e($order->image); ?>" alt="">
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="16">
                        No Data Found
                    </td>
                </tr>
            <?php endif; ?>
        </table>

            </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\tessaweb1\resources\views/admin/order.blade.php ENDPATH**/ ?>