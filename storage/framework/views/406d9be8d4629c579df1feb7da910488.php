<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <h1>About</h1>
    <form action="<?php echo e(url('create-About')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">judul About</label>
            <input type="text" name="judul_about" value="<?php echo e(isset($data_about->judul) ? $data_about->judul : ''); ?>" class="form-control">
            <textarea name="content1" id="" cols="30" rows="10"><?php echo e(isset($data_about->content1) ? $data_about->content1 : ''); ?></textarea>
            <textarea name="content2" id="" cols="30" rows="10"><?php echo e(isset($data_about->content2) ? $data_about->content2 : ''); ?></textarea>
        </div>
        <div class="mb-3 d-grid">
            <button type="submit" name="submit" class="btn btn-primary">Kirim data</button>
        </div>
    </form>
</div><?php /**PATH C:\xampp\htdocs\latihan\resources\views/About/cms-about.blade.php ENDPATH**/ ?>