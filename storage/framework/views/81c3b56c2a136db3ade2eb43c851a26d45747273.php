
<?php $__env->startSection('konten'); ?>
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/download (4).jpg'); ">
        <div class="bg-black-op">
            <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-white mb-10">Teknik Komputer dan Jaringan</h1>
                    <h2 class="h4 font-w400 text-white-op">Selamat datang di Teknik Komputer dan Jaringan</h2>
                    <a class="btn btn-hero btn-noborder btn-rounded btn-alt-success mb-10" href="<?php echo e(url('/')); ?>">
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
                    <p>Teknik Komputer dan Jaringan adalah kompetensi keahlian yang mengajarkan keterampilan sebagai teknisi jaringan komputer yang handal. Pembelajaran yang diberikan pada kompetensi keahlian ini adalah pembuatan jaringan Local Area Network (LAN) dan Wide Area Network, Wireless Network, administrasi server berbasis windows dan linux serta keterampilan pengembangan jaringan menggunakan fiber optik.</p>
                </div>
                <div class="col-lg-6">
                   <p>Kompetensi keahlian ini bekerja sama dengan mikrotik dalam Mikrotik Academy dimana peserta didik dibekali kemampuan untuk melakukan konfigurasi perangkat router dan switch mikrotik serta memungkinkan peserta didik untuk mendapatkan sertifikat kompetensi internasional dari mikrotik sepert MTCNA, MTCRE dll.</p>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.front_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/keahlian/tkj.blade.php ENDPATH**/ ?>