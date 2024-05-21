
<?php $__env->startSection('konten'); ?>
<div class="card">
    <div class="card-header">
      <?php echo e($data_prestasi->judul); ?>

    </div>
    <div class="card-body">
      <p class="card-text"><?php echo e($data_prestasi->deskripsi); ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/Prestasi/detail.blade.php ENDPATH**/ ?>