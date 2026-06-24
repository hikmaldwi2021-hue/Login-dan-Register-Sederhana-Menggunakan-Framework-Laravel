<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100">

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html><?php /**PATH E:\laragon\www\login-test\resources\views/layouts/app.blade.php ENDPATH**/ ?>