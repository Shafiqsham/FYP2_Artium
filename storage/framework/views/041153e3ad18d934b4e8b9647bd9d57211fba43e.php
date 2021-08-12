<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artium Website Development</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo e(View::make('header')); ?>

    <?php echo $__env->yieldContent("content"); ?>
    <?php echo e(View::make('footer')); ?>

</body>
    <style>
        .custom-login{
            height: 500px;
            padding-top: 50px;

        }

    </style>
<script>
    $(document).ready(function()
    {
        $("button").click(function()
        {
            alert("Verifying user...")
        })
    })
    </script>
</html><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/master.blade.php ENDPATH**/ ?>