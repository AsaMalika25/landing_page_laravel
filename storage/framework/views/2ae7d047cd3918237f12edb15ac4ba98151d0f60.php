
<?php $__env->startSection('konten'); ?>

<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <!-- Bootstrap Forms Validation -->
        <h2 class="content-heading">Setting Profile your information</h2>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Validation</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                        <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-bootstrap" action="<?php echo e(route('profile.update',auth()->id())); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-username" name="username" placeholder="Enter a username.." value="<?php echo e(Auth::User()->name); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="val-email" name="email" placeholder="Your valid email.." value="<?php echo e(Auth::User()->email); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" id="val-password" name="password" placeholder="Choose a safe one.." value="<?php echo e(Auth::User()->password); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-password">Upload gambar<span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="file" class="dropify-omset" data-max-file-size="3M" data-allowed-file-extensions="png jpg jpeg" id="dropify-input" name="gambar" />
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- Bootstrap Forms Validation -->

        <!-- Material Forms Validation -->
        
        <!-- END Material Forms Validation -->
    </div>
    <!-- END Page Content -->
    

    <script>
       

    </script>
    

</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.front_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/Login/update-profile.blade.php ENDPATH**/ ?>