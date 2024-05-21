@extends('layout.front_dashboard')
@section('konten')
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/download (6).jpg'); ">
        <div class="bg-black-op">
            <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-white mb-10">Tata Busana</h1>
                    <h2 class="h4 font-w400 text-white-op">Selamat datang di Tata Busana</h2>
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
                    <p>Kompetensi Keahlian Tata Busana mengajarkan keterampilan dalam pembuatan busana pesta, busana kerja, pembuatan dan perancangan pola pakaian serta keterampilan menggunakan mesin jahit</p>
                </div>
                <div class="col-lg-6">
                   <p>Peserta didik pada kompetensi ini disiapkan untuk menjadi tenaga kerja pada bidang fashion seperti butik, rumah mode atau industri sejenis lainnya.

                    Seluruh kompetensi keahlian yang ada di SMK Negeri 1 Kota Bekasi juga menjadi TUK (Tempat Uji Kompetensi) untuk program sertifikasi profesi yang diselenggarakan dibawah BNSP (Badan Nasional Sertifikasi Profesi). Lembaga Sertifikasi Profesi SMK Negeri 1 Kota Bekasi adalah LSP – P1 yaitu sebuah lembaga di sekolah yang melaksanakan uji kompetensi dan mengeluarkan sertifikat kompetensi bagi peserta yang berhasil uji kompetensi sesuai dengan standar KKNI (Kompetensi Kerja Nasional Indonesia) yang digunakan sebagai standar kompetensi bagi peserta.</p>
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