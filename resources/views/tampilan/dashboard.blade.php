@extends('layout.front_dashboard')
@section('konten')
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/2023-05-20.jpg');">
        <div class="bg-black-op">
            <div class="content content-top text-center">

                @if(session('message'))
                    <h6 class="alert alert-success">
                        {{ session('message') }}
                    </h6>
                @endif

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
            
            <center>{{$data_about->judul}}</center>
        </h2>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <p>{{$data_about->content1}}</p>
                </div>
                <div class="col-lg-6">
                   <p>{{$data_about->content2}}</p>
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
    <div class="content">
        <h2 class="content-heading">
            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right" onclick="printImg()">Save PDF</button>
           <center>Struktur Organisasi</center> 
        </h2>
        <div class="row items-push">
            <img src="{{asset('public/image/strukturorganisasi.png')}}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="content">
        
        <h2 class="content-heading">
            
            <p>Visi SMK Negeri 1 Kota Bekasi Tahun 2015-2020</p>
        </h2>

            <div class="d-flex justify-content-center align-items-center" style="color: #000;">
               <p>“MENJADI  SMK  YANG MENGHASILKAN SDM KOMPETEN, BERKARAKTER,  DAN IHSAN”</p>
            </div>

        <div style="color:#000; font-size:20px; font-weight:300;">
            <p>Misi SMK Negeri 1 Kota Bekasi Tahun 2015-2020</p>
        </div>

        <div class="row">
            <ol>
                @foreach ($data_visi as $item)

                <li>{{$item->judul}}</li>

                @endforeach
            </ol>
           
        </div>

        
    </div>
    <div class="content">

        @foreach ($data_riwayat as $item)

        <h2 class="content-heading">
            
            {{$item->judul}}
        </h2>

        <div class="row">
            <p>{{$item->deskripsi}}</p>
        </div>
        @endforeach
       
    </div>

</main>



<script>
    function printImg(url) {
        var win = window.open('');
        win.document.write('<img src="public/image/strukturorganisasi.png"' + url + '" onload="window.print();window.close()" />');
        win.focus();
    }
</script>
@endsection