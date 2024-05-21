
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>


<form action="<?php echo e(url('edit-logo/'.$data_logo->id)); ?>" method='post'
    enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="<?php echo e(url('list-cms')); ?>" class="btn-btn-secondary">
            << kembali</a>
                <?php if($data_logo->image): ?>
                    <div class="mb-3 row">
                        <img style="max-width:50px;max-height:50px"
                            src="<?php echo e(asset('public/image/'.$data_logo->logo_banner)); ?>" alt=""
                            width="150px">
                    </div>
                <?php endif; ?>

                <div class="mt-3 row">
                    <input type="file" name="logo_banner" id="image" class="form-control">
                    <div class="mt-3">
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    </div>
                    </div>
                </div>

               
    </div>
</form>
<!-- AKHIR FORM -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.backend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/Logo/edit.blade.php ENDPATH**/ ?>