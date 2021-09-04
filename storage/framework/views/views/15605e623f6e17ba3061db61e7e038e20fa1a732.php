
<?php $__env->startSection("content"); ?>
    <div class="custom-product">
        <div class="col-sm-10">
        <table class="table table-striped">
  
    <tbody>
      <tr>
        <td>Amount</td>
        <td>RM <?php echo e($total); ?></td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>RM 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>RM 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>RM <?php echo e($total+10); ?></td>
      </tr>
    </tbody>
  </table>
    <div>
        <form action="/placeorder" method="POST">
        <?php echo csrf_field(); ?>
            <div class="form-group">
            <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea required>
        </div>
        <div class="form-group">
    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number" required>
  </div>
        <div class="form-group">
            <label for="pwd">Payment Method:</label required><br><br>
            <input type="radio" value="cash" name="payment"> <span>online payment</span ><br><br>
            <input type="radio" value="cash" name="payment"> <span>Emi payment</span><br><br>
            <input type="radio" value="cash" name="payment"> <span>Cash on Delivery</span><br><br>

         </div>
            
        <button type="submit" class="btn btn-default">Order Now</button>
</form>
    </div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/ordernow.blade.php ENDPATH**/ ?>