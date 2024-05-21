@extends('layout.front_dashboard')
@section('konten')
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/download (2).jpg'); ">
        <div class="bg-black-op">
            <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-white mb-10">Teknik Kendaraan Ringan otomotif</h1>
                    <h2 class="h4 font-w400 text-white-op">Selamat datang di TKR</h2>
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
                    <p>Teknik Kendaraan Ringan Otomotif adalah kompetensi keahlian yang mengajarkan keterampilan perawatan kendaraan mobil sehingga lulusan kompetensi keahlian ini memiliki keahlian sebagai tenaga mekanik perawatan mobil.</p>
                </div>
                <div class="col-lg-6">
                   <p>Kompetensi keahlian ini menempati area gedung teknik kendaraan ringan yang didalamnya terdapat fasilitas seperti ruang Balancing and spooring, ruang pengujian emisi, ruang kerja kelistrikan bodi otomotif, ruang kerja praktik perawatan mesin kendaraan ringan, ruang praktek perawatan chasis kendaraan ringan.

                    Lulusan kompetensi keahlian ini menempati bidang pekerjaan seperti tenaga mekanik, tenaga operator pada perusahaan manufaktur, tenaga kerja pada bengkel-bengkel resmi milik perusahaan ATPM (Agen Tunggal Pemegang Merek) produsen mobil berpenumpang yang tersedia di area jabodetabek dan sekitarnya.</p>
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