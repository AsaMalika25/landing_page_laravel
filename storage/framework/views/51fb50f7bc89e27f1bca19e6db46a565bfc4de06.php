<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h1>VISI MISI</h1>
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
    <!-- Button trigger modal -->

    <!-- Modal -->
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">

        <a href="<?php echo e(url('/create-visi')); ?>" class="btn btn-primary">+ Tambah Data</a>

        
       
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th>Judul halaman</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php $__currentLoopData = $data_visi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($item->judul); ?></td>
                    <td>

                        <a href="<?php echo e(url('edit-visi/'.$item->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('igin menghapus data ini?')" class='d-inline' action="<?php echo e(url('delete-visi/'.$item->id)); ?>"
                            method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field('DELETE')); ?>

                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                        

                    </td>
                </tr>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\latihan\resources\views/visi/visi.blade.php ENDPATH**/ ?>