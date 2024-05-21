<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>">
</head>
<body>
    <div class="container py-5">
        
        
        <?php echo $__env->make('komponen/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('komponen/pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
            <div class="container-sm"><?php echo $__env->yieldContent('konten'); ?></div>
        </div>

        <script src="<?php echo e(asset('public/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\latihan\resources\views/layout/backend_layout.blade.php ENDPATH**/ ?>