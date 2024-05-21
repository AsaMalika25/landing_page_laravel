 
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>


<form action='' method='post' enctype="multipart/form-data" >
<?php echo csrf_field(); ?>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="<?php echo e(url('list-Cms')); ?>" class="btn-btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">judu_halaman</label>
                <div class="col-sm-10">
                    <input type="text"  name="judul_ekstrakulikuler" value="<?php echo e(isset($data_ekstrakulikuler->judul) ? $data_ekstrakulikuler->judul : ''); ?>" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"value="<?php echo e(isset($data_ekstrakulikuler->deskripsi) ? $data_ekstrakulikuler->deskripsi : ''); ?>" name='deskripsi' id="deskripsi">
                </div>
            </div>
            
            
            <div class="mb-3 row">
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.backend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/ekstrakulikuler/create.blade.php ENDPATH**/ ?>