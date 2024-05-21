<?php
echo "Today is " . date("Y/m/d") . "<br>";
?>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="<?php echo e(url('list-Cms')); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <span class="fs-4">Simple header</span>
    </a>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link <?php echo e(request()->is('list-cms') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('/')); ?>">Landingpage</a>
      </li>
      
        
    </ul>
  </header><?php /**PATH C:\xampp\htdocs\latihan\resources\views/komponen/menu.blade.php ENDPATH**/ ?>