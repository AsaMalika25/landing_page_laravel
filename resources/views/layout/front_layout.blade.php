<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
    <link rel="icon" type="image/x-icon" href="{{asset('public/image/logo-lp-230531011351.jpg')}}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/app.css') }}">
    <link href="{{ asset('public/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>
 <style>
  .tulisan{
    text-decoration: none;
  }
  .getstarted{
    text-decoration: none;
  }
 </style>
<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo me-auto"><a href="" class="tulisan">SMk Negeri 1</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="getstarted scrollto" href="{{ url('login')}}">Lihat detail</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->
    @yield('konten')
    
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
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('login')}}">Lihat detail</a></li>
              </ul>
            </div>
    
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Jurusan</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('login')}}">Lihat detail</a></li>
              </ul>
            </div>
    
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>lihat selengkapnya tentang SMK NEGERI 1 Kota Bekasi  :</p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/smk1bks?fbclid=IwAR0AJ7POiXv2dr02Qe3MkEiEs5Yoo785UUhU7b0AzE44kB9uKYI8YmoMC6Y" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://web.facebook.com/smkn1kotabekasi" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/osis_smkn1bks/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
    
          </div>
        </div>
      </div>
    
    
      <script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('public/js/main.js') }}"></script>
</body>
</html>