
<?php $__env->startSection('konten'); ?>
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('public/img/2023-05-20.jpg');">
        <div class="bg-black-op">
            <div class="content content-top text-center">

                <?php if(session('message')): ?>
                    <h6 class="alert alert-success">
                        <?php echo e(session('message')); ?>

                    </h6>
                <?php endif; ?>

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
            
            <center><?php echo e($data_about->judul); ?></center>
        </h2>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <p><?php echo e($data_about->content1); ?></p>
                </div>
                <div class="col-lg-6">
                   <p><?php echo e($data_about->content2); ?></p>
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
            <img src="<?php echo e(asset('public/image/strukturorganisasi.png')); ?>" alt="" style="width: 100%;">
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
                <?php $__currentLoopData = $data_visi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li><?php echo e($item->judul); ?></li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
           
        </div>

        
    </div>
    <div class="content">

        <?php $__currentLoopData = $data_riwayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <h2 class="content-heading">
            
            <?php echo e($item->judul); ?>

        </h2>

        <div class="row">
            <p><?php echo e($item->deskripsi); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </div>

</main>



<script>
    function printImg(url) {
        var win = window.open('');
        win.document.write('<img src="public/image/strukturorganisasi.png"' + url + '" onload="window.print();window.close()" />');
        win.focus();
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.front_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/tampilan/dashboard.blade.php ENDPATH**/ ?>