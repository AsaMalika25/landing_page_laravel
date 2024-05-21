@extends('layout.front_dashboard')
@section('konten')
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/2023-05-20.jpg'); ">
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
                    <p>Kompetensi keahlian multimedia membekali peserta didiknya dengan keterampilan penggunaan perangkat lunak pengolah gambar digital, pengolah audio , pembuatan animasi dan model 3 dimensi dan keterampilan khusus seperti desain product packaging.</p>
                </div>
                <div class="col-lg-6">
                   <p>Selain peserta didik pada kompetensi keahlian ini disiapkan sebagai tenaga kerja pada bidang industri kreatif, mereka juga dibekali dengan keterampilan berwirausaha berdasarkan kompetensi kejuruan yang didapat sehingga setelah lulus, peserta didik memiliki kemampuan untuk menjadi wirausaha baru yang berkontribusi di masyarakat.</p>
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