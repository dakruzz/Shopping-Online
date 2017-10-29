<!doctype html>
<html lang="pl">

<head>

    <title>My Shop</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Opis naszej strony">
    <meta name="keywords" content="shop,cheapest,quality,clothes">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/main.css')); ?>" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/main.js')); ?>"></script>
</head>

<body>
<?php echo $__env->make('partials.navigate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>

<!-- JS -->
<?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>