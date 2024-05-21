@extends('layout.front_dashboard')
@section('konten')
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/download (1).jpg'); ">
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
                    <p>Teknik Pengelasan merupakan kompetensi keahlian yang dikembangkan dari program keahlian teknik mesin. Kompetensi keahlian ini memiliki 3 rombongan belajar.</p>
                </div>
                <div class="col-lg-6">
                   <p>Pada kompetensi keahlian teknik pengelasan peserta didik diajarkan keterampilan penggunaan perkakas seperti mesin frais, mesin bor, dan mesin gerinda serta penggunaan alat pengelasan yang sesuai dengan standar industri.

                    Kompetensi keahlian ini memiliki misi mencetak lulusan yang handal sebagai tenaga las terampil dan mampu bekerja sesuai dengan kebutuhan industri manufaktur yang tersebar baik di dalam negeri maupun luar negeri.</p>
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