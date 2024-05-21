<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h1>Prestasi</h1>
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="<?php echo e(url('list-cms')); ?>" method="post">
        <?php echo csrf_field(); ?>
          <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>
<!-- Button trigger modal -->

<!-- Modal -->
<!-- TOMBOL TAMBAH DATA -->
<div class="pb-3">

  <a href="<?php echo e(url('/create-prestasi')); ?>" class="btn btn-primary">+ Tambah Data</a>

  <a href='<?php echo e(route('users.export')); ?>' class="btn btn-primary">+ Export Data</a>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    import data
  </button>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">import data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          masukan data yang ingin diimport
        </div>
        <form action="<?php echo e(route('users.import')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <input type="file" name="file" class="form-control">
          <br>
          <button class="btn btn-primary">unggah Data</button>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
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
          <?php $__currentLoopData = $data_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($item->judul); ?></td>
            <td>

              <a href="<?php echo e(url('edit-prestasi/' . $item->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
              <form  onsubmit="return confirm('igin menghapus data ini?')" class='d-inline' action="<?php echo e(url('delete-prestasi/' .$item->id)); ?>"
                  method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo e(method_field('DELETE')); ?>

              <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
          </form>
          <a href="<?php echo e(url('detail-prestasi/' .$item->id)); ?>" class="btn btn-warning btn-sm">Detail</a>
          
        </td>
      </tr>
      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\latihan\resources\views/Prestasi/cms-prestasi.blade.php ENDPATH**/ ?>