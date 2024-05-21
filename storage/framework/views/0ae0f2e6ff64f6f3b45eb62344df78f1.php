<!-- START DATA -->
<?php $__env->startSection('konten'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="<?php echo e(url('list-cms')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input class="form-control me-1" type="search" name="katakunci"
                value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci"
                aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='<?php echo e(url('/create-cms')); ?>' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">gambar banner</th>
                <th>Judul halaman</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><img alt="img" width="150px"
                            src="<?php echo e(url('public/image/'.$item->nama_banner)); ?>"></td>
                    <td><?php echo e($item->judul); ?></td>
                    <td>


                        <a href="<?php echo e(url('edit-cms/'.$item->id)); ?>"
                            class="btn btn-warning btn-sm">Edit</a>
                        
                        <form onsubmit="return confirm('igin menghapus data ini?')" class='d-inline'
                            action="<?php echo e(url('delete-cms/'.$item->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                        

                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($data->links()); ?>

</div>
<?php echo $__env->make('About.cms-about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Kompetensi.cms-kompetensi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Logo.cms-logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Prestasi.cms-prestasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('ekstrakulikuler.cms-ekstra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Contact.cms-contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('visi.visi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Riwayat.riwayat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- AKHIR DATA -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/backend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/cms/cms-banner.blade.php ENDPATH**/ ?>