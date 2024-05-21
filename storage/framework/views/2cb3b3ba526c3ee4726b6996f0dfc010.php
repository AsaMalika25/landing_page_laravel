<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h1>EKSTRAKULIKULER</h1>
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
          <form class="d-flex" action="" method="post">
            <?php echo csrf_field(); ?>
              <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Cari</button>
          </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
          <a href='<?php echo e(url('/create-ekstrakulikuler')); ?>' class="btn btn-primary">+ Tambah Data</a>

        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Judul halaman</th>
                    <th>deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php $__currentLoopData = $data_ekstrakulikuler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    
                    <td><?php echo e($item->judul); ?></td>
                    <td>


                        <a href='<?php echo e(url('edit-ekstrakulikuler/'.$item->id)); ?>' class="btn btn-warning btn-sm">Edit</a>
                        
                        <form  onsubmit="return confirm('igin menghapus data ini?')" class='d-inline' action="<?php echo e(url('delete-ekstrakulikuler/'.$item->id)); ?>"
                            method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                    <a href='<?php echo e(url('detail-ekstrakulikuler/'.$item->id)); ?>' class="btn btn-warning btn-sm">Detail</a>
                   
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
       <?php echo e($data->links()); ?>

    </div>
  <!-- AKHIR DATA -->
<?php /**PATH C:\xampp\htdocs\latihan\resources\views/ekstrakulikuler/cms-ekstra.blade.php ENDPATH**/ ?>