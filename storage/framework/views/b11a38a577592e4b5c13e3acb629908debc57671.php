
<?php $__env->startSection('konten'); ?>
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/hqdefault.jpg'); ">
        <div class="bg-black-op">
            <div class="content content-top text-center">
                <div class="py-50">
                    <h1 class="font-w700 text-white mb-10">SMK NEGERI 1 Kota Bekasi</h1>
                    <h2 class="h4 font-w400 text-white-op">Selamat datang di SMK NEGERI 1 Kota Bekasi</h2>
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
                    <p>Teknik Pemesinan adalah salah satu kompetensi keahlian yang ada dari awal pendirian sekolah. Saat ini jumlah rombongan belajar pada kompetensi keahlian ini adalah 6 Rombel.</p>
                </div>
                <div class="col-lg-6">
                   <p>Keterampilan yang diajarkan pada kompetensi keahlian ini adalah Pengetahuan dasar teknik mesin, Gambar teknik mesin, kemampuan penggunaan perkakas seperti mesin frais, mesin bor dan mesin gerinda serta penggunaan perangkat komputer dalam penggunaan mesin CNC (Computer Numerical Control) dan pembuatan gambar mesin menggunakan perangkat lunak CAD (Computer Aided Design).</p>
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
<?php echo $__env->make('layout.front_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/keahlian/mesin.blade.php ENDPATH**/ ?>