;
<?php $__env->startSection("content"); ?>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1>Welcome to Artium !</h1>
            <form action="login" method="POST">
  <div class="form-group">
    <?php echo csrf_field(); ?>
    <br><p>Please fill in this form to create an account.</p>
    <br><label for="Username">Username</label>
    <input type="AccName" name="Username" class="form-control" id="Username" placeholder="Username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="Password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me 
    </label><br><br>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <li><a href="/forgotpassword">Forgot Password ?</a></li>

  </div>
  <br><button type="CustLogin" class="btn btn-primary">Log in</button>
</form>


</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/login.blade.php ENDPATH**/ ?>