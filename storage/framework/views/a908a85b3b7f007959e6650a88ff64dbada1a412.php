
<?php $__env->startSection('konten'); ?>
    
<form class="row g-3" action="" method="POST">
  <?php echo csrf_field(); ?>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nama</label>
      <input type="text" class="form-control" name="name"id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" value="<?php echo e($email); ?>"id="inputCity" readonly>
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Subject</label>
      <input type="text" class="form-control" name="subject" id="inputCity">
    </div>
    <div class="col-md-6">
      <label for="name">Message</label>
      <textarea class="form-control" name="message" rows="10" required></textarea>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">kirim</button>
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/backend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/Contact/balas-pesan.blade.php ENDPATH**/ ?>