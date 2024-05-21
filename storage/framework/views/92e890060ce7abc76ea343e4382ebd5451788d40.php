 
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>


<form action='' method='post' enctype="multipart/form-data" >
<?php echo csrf_field(); ?>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="<?php echo e(url('list-Cms')); ?>" class="btn-btn-secondary"><< kembali</a>
            
            
            <div class="mb-3 row">
                <input type="file" name="logo" id="image" class="form-control">
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.backend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/Logo/create.blade.php ENDPATH**/ ?>