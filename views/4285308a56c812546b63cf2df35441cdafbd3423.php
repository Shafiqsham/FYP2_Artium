
<?php $__env->startSection("content"); ?>
<div class="custom-product">
<div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>Result for Products</h4>
        <a class="btn btn-success" href="ordernow">Order Now !</a><br><br>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row searched-item cart-listed-divider">
            <div class="col-sm-3">
            <a href="detail/<?php echo e($item->id); ?>">
            <img class="trending-image" src="<?php echo e($item->Gallery); ?>">            
        </a>
            </div>
            <div class="col-sm-5">
            <div class=""> 
                <h3><?php echo e($item->Artwork_Name); ?></h3>
                <h4>RM<?php echo e($item->Price); ?></h4>
                <h5><?php echo e($item->Description); ?></h5>
            </div>
            </div>
            <div class="col-sm-3">
                <a href="/removecart/<?php echo e($item->cart_id); ?>" class="btn btn-warning">Remove from Cart</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a class="btn btn-success" href="ordernow">Order Now !</a>

</div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/cartlist.blade.php ENDPATH**/ ?>