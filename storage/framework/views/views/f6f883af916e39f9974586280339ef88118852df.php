
<?php $__env->startSection("content"); ?>
<div class="custom-product">
<div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>My Orders</h4>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row searched-item cart-listed-divider">
            <div class="col-sm-3">
            <a href="detail/<?php echo e($item->id); ?>">
            <img class="trending-image" src="<?php echo e($item->Gallery); ?>">            
        </a>
            </div>
            <div class="col-sm-5">
            <div class="">
           
                <h2>Price : <?php echo e($item->Price); ?></h2>
                <h5>Delivery Status : <?php echo e($item->status); ?></h5>
                <h5>Address : <?php echo e($item->address); ?></h5>
                <h5>Payment Status : <?php echo e($item->payment_status); ?></h5>
                <h5>Payment Method : <?php echo e($item->payment_method); ?></h5>

            </div>
        </a>
            </div>
           
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/myorders.blade.php ENDPATH**/ ?>