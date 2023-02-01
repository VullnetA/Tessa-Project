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
        .center{
            margin:auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size{
            text-align:center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size{

        }

        .th_color{
            background: skyblue;
        }

        .th_deg{
            padding: 10px;
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

          <?php if(session()->has('message')): ?>

            <div class="alert alert-success">

              <button type="button" class="close" data_dismiss="alert" aria-hidden="true">x</button>
              
              <?php echo e(session()->get('message')); ?>


            </div>

            <?php endif; ?>

          <h2 class="font_size">All Products</h2>

            <table class="center">

                <tr class="th_color">
                    <th class="th_deg">Product title</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Category</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount price</th>
                    <th class="th_deg">Vendor</th>
                    <th class="th_deg">New</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Edit</th>
                </tr>

                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->title); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td><?php echo e($product->category); ?></td>
                    <td><?php echo e($product->quantity); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->discount_price); ?></td>
                    <td><?php echo e($product->vendor); ?></td>
                    <td><?php echo e($product->new); ?></td>
                    <td>
                        <img class="img_size" src="/product/<?php echo e($product->image); ?>">
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Confirm Deletion')" href="<?php echo e(url('delete_product',$product->id)); ?>">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="<?php echo e(url('update_product',$product->id)); ?>">Edit</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\Users\Luka\Desktop\tessaweb\tessaweb\resources\views/admin/show_product.blade.php ENDPATH**/ ?>