<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();

}
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

   
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/product">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Art Gallery</a></li>
        <li class="active"><a href="/product">Store</a></li>
        <li class="active"><a href="#">My Artwork</a></li>
        <li class="active"><a href="#">About Us</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">Cart(<?php echo e($total); ?>)</a></li>
        <?php if(Session::has('user')): ?>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo e(Session::get('user')['Username']); ?>

        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">My Profile</a></li>
          <li><a href="/myorders">Order History</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      </li>
      <?php else: ?>
       <li><a href="/login">Login</a></li>
       <li><a href="/register">Register</a></li>

      <?php endif; ?> 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/header.blade.php ENDPATH**/ ?>