<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('komponen/pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Reset</h1>
        <div class="pb-3">
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

        <form action="" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="email" class="form-label">Password</label>
                <input type="password" name="password"   class="form-control" value="" required autocomplete="email" autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Password confirmation</label>
                <input type="password" name="password_confirmation" class="form-control" value="" required autocomplete="email" >
            </div>
            <div class="mb-3">
            </div>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="mb-3 d-grid">
                <button type="submit" name="submit" class="btn btn-primary">reset password</button>
            </div>
        </form>
    </div>
    </body>
    
</html><?php /**PATH C:\xampp\htdocs\latihan\resources\views/Auth/reset.blade.php ENDPATH**/ ?>