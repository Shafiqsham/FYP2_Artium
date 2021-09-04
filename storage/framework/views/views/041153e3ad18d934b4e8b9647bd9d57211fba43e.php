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

    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }

    /* Set a style for all buttons */
   button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }

    button:hover {
    opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
    }

    /* Add padding to container elements 
    .container {
    padding: 16px;
    }*/

    /* Clear floats */
    .clearfix::after {
    content: "";
    clear: both;
    display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media  screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
    width: 100%;
    }
}
        .custom-login{
            height: 500px;
            padding-top: 50px;

        }

        .header{
            background-color: yellow;
            color: white;
            height: 100px;
            width: 100%;

        }

        img.slider-img{
            height:400px !important;
        }

        .custom-product{
            height:600px;
        }
        
        .slider-text{
            background-color: #b9b6b6 !important;
        }
        .trending-image{
            height:100px;
        }
        .trending-item{
            float:left;
            width: 16%;
        }
        .trending-wrapper{
            margin:30px;
        }
        .detail-img{
            height:300px;
        }
        .cart-listed-divider{
            border-bottom:1px solid;
            margin-bottom: 20px;
            padding-bottom:20px;
        }

    </style>
<script>
    $(document).ready(function()
    {
        $("buttonlogin").click(function()
        {
            alert("Verifying user...")
        })
    })
    </script>
</html><?php /**PATH C:\Users\Muhammad Shafiq\fyp2\resources\views/master.blade.php ENDPATH**/ ?>