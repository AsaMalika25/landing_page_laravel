@extends('layout.front_dashboard')
@section('konten')
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/download (5).jpg'); ">
        <div class="bg-black-op">
            <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-white mb-10">Akuntansi</h1>
                    <h2 class="h4 font-w400 text-white-op">Selamat datang di Akuntansi</h2>
                    <a class="btn btn-hero btn-noborder btn-rounded btn-alt-success mb-10" href="{{url('/')}}">
                         Back to Landing page
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Courses -->
    <div class="content">
        
        <h2 class="content-heading">
            
            <center>Pengertian</center>
        </h2>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <p>Kompetensi Keahlian Akuntansi membekali peserta didik sebagai tenaga akuntan yang mampu membuat dan mengelola pelaporan keuangan, mengelola kas perusahaan serta menghitung biaya operasional pada sebuah usaha/industri.</p>
                </div>
                <div class="col-lg-6">
                   <p>Peserta didik diajarkan bagaimana mengelola kas sesuai dengan kaidah-kaidah ilmu akuntansi, membuat laporan buku besar serta proses – proses pada akuntansi lainnya.

                    Lulusan kompetensi keahlian ini menjadi tenaga kerja yang siap bersaing pada perusahaan bidang keuangan, manajemen kekayaan perusahaan serta mampu mengelola siklus akuntasi pada perusahaan.</p>
                </div>
                
            </div> 
        </div>
          
        
        <!-- Featured Courses -->
        
        <!-- END Featured Courses -->

        <!-- Latest Courses -->
       
        <!-- END Latest Courses -->
    </div>
    <!-- END Courses -->

    <!-- Courses -->
    

    
    

</main>


@endsection