;
<?php $__env->startSection("content"); ?>
    <div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <h1>Welcome to Artium !</h1>
    <form action="register" method="POST">
      <div class="form-group">
      <?php echo csrf_field(); ?>
    <br><p>Please fill in this form to create an account.</p>
    <hr>
    <label for="Username">Username</label>
    <input type="text" placeholder="Enter Username" class="form-control" name="Username" required>
    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" class="form-control" name="Email" required>
    
    <label for="exampleInputPassword1"><b>Password</b></label>
    <input type="Password" placeholder="Enter Password" class="form-control" name="Password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="Password" placeholder="Repeat Password" class="form-control" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
</form>

</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/register.blade.php ENDPATH**/ ?>