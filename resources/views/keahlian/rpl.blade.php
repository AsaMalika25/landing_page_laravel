@extends('layout.front_dashboard')
@section('konten')
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/download (3).jpg'); ">
        <div class="bg-black-op">
            <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-white mb-10">SMK NEGERI 1 Kota Bekasi</h1>
                    <h2 class="h4 font-w400 text-white-op">Selamat datang di SMK NEGERI 1 Kota Bekasi</h2>
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
                    <p>Rekayasa Perangkat Lunak atau disingkat dengan RPL adalah kompetensi keahlian yang ada di SMK Negeri 1 Kota Bekasi yang menyiapkan siswanya menjadi tenaga kerja pada bidang programmer komputer, database administration, Frontend and Backend Programmer, Android/mobile application developer.</p>
                </div>
                <div class="col-lg-6">
                   <p>Keterampilan yang diajarkan pada kompetensi keahlian ini adalah pengembangan perangkat lunak, perancangan dan administrasi basis data, integrasi sistem, serta penggunaan teknologi yang saat ini sedang digunakan di industri pengembangan perangkat lunak.

                    Kompetensi keahlian ini juga bekerja sama dengan beberapa perusahaan teknologi dalam menyelenggarakan sertifikasi seperti dengan Microsoft. inc, Oracle.</p>
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