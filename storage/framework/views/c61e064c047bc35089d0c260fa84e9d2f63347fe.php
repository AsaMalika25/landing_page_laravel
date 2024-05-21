<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hai <?php echo e($name); ?></h1>
    <p>click tombol berikut untuk melakukan reset password</p>
    <a href="<?php echo e(url('reset-password/'. $email.'/'.$token)); ?>"><button>reset-password</button></a>
    <p>atau bisa klik link berikut <a href="<?php echo e(url('reset-password/'. $email.'/'.$token)); ?>"><?php echo e(url('reset-password/'. $email.'/'.$token)); ?></a></p>
</body>
</html><?php /**PATH C:\xampp\htdocs\latihan\resources\views/emails/reset-password.blade.php ENDPATH**/ ?>