<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('public/image/logo-lp-230531011351.jpg')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/app.css')); ?>">
    <link href="<?php echo e(asset('public/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
</head>
<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo me-auto"><a href="<?php echo e(url('list-cms')); ?>">SMk Negeri 1</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="getstarted scrollto" href="<?php echo e(url('/create')); ?>">Lihat detail</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->
    <?php echo $__env->yieldContent('konten'); ?>
    
    <footer id="footer">
        
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>SMK NEGERI 1 Kota Bekasi</h4>
              <p>Berdoa, Berusaha, Tawakal</p>
            </div>
          </div>
        </div>
      </div>
    
      <div class="footer-top">
        <div class="container">
          <div class="row">
    
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>SMK NEGERI 1 Kota Bekasi</h3>
              <p>
                Jl. Bintara VIII No.2 <br>
                RT.005/RW.003, Bintara,Kec. Bekasi Bar.<br>
                Kota Bks, Jawa Barat 17134, Indonesia <br><br>
                <strong>Phone:</strong> 02188951151<br>
                <strong>Email:</strong> info@smkn1kotabekasi.sch.id<br>
              </p>
            </div>
    
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Lihat Detail</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Lihat detail</a></li>
              </ul>
            </div>
    
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Jurusan</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Lihat detail</a></li>
              </ul>
            </div>
    
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>lihat selengkapnya tentang SMK NEGERI 1 Kota Bekasi  :</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
    
          </div>
        </div>
      </div>
    
    
      <script src="<?php echo e(asset('public/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Latihan\resources\views/layout/front_layout.blade.php ENDPATH**/ ?>