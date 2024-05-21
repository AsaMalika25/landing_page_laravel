<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>">
    <title>Document</title>
    <style>
        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('../public/image/banner-lp-230630072542.jpg');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <div class="text-welcome-n-login">
                                    <h1>Halo, Welcome to SMK NEGERI 1 KOTA BEKASI</h1>
                                </div>

                                <?php echo $__env->make('komponen/pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <!-- Sign In Form -->
                                <form action="" method="post">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="enter your name..." name="name">
                                        <label for="floatingInput">Name</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" name="email">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password" name="password">
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            type="submit">Sign in</button>
                                        <div class="text-center">
                                            <a class="small"
                                                href="<?php echo e(url('
                                                                                            lupa-password')); ?>">Forgot
                                                password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?php echo e(url('sesi/register')); ?>">Create new account</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\latihan\resources\views/Login/register.blade.php ENDPATH**/ ?>