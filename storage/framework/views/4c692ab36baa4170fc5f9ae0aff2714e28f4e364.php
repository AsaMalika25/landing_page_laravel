
<?php $__env->startSection('konten'); ?>
<div class="card">
    <div class="card-header">
      <?php echo e($data_ekstra->judul); ?>

    </div>
    <div class="card-body">
      <p class="card-text"><?php echo e($data_ekstra->deskripsi); ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/ekstrakulikuler/detail.blade.php ENDPATH**/ ?>