
<?php $__env->startSection('konten'); ?>
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading"><center>Prestasi</center></h2>

        <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">List <small>Prestasi</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell"></th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;"></th>
                            <th class="text-center" style="width: 15%;">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php $__currentLoopData = $data_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($i++); ?></td>
                                <td class="font-w600"><?php echo e($item->judul); ?></td>
                                <td class="d-none d-sm-table-cell"></td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-primary"></span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo e(url('detail-prestasi/' .$item->id)); ?>">
                                        <span class="badge badge-primary">Detail</span>
                                    </a>
                                        
                                   
                                </td>
                            </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->

        <!-- Dynamic Table Full Pagination -->

    </div>
    <!-- END Page Content -->

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/Prestasi/prestasi-dash.blade.php ENDPATH**/ ?>