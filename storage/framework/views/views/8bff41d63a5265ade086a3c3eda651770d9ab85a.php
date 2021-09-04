;
<?php $__env->startSection("content"); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
        <img class="detail-img" src="<?php echo e($product['Gallery']); ?>" alt="">

    </div>
    <div class="col-sm-6">
        <a href="/product">Back</a>
        <h2><?php echo e($product['Artwork Name']); ?></h2>
        <h3>Artist Name: <?php echo e($product['Artist Name']); ?></h3>
        <h4>Price: <?php echo e($product['Price']); ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            Material: <?php echo e($product['Price']); ?></h4>
        <h4>Colour: <?php echo e($product['Colour']); ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            Brand: <?php echo e($product['Brand']); ?></h4>
        <br>
        <h4>Product Description: <?php echo e($product['Description']); ?></h4> 
        <br><br>
        <form action="/add_to_cart" method="POST">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="product_id" value=<?php echo e($product['id']); ?>>
        <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <button class="btn btn-success">Buy Now</button>
        <br><br>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/detail.blade.php ENDPATH**/ ?>