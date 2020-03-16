<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from qbgrow.com/magen/iot-admin/app/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 01:59:07 GMT -->
  <!-- ####### HEAD  -->
  <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <body>
    <!-- ##### SIDEBAR LOGO ##### -->
    <div class="kt-sideleft-header">
      <div class="kt-logo">
        <a href="/">GreenerBrains <small>Administrator</small></a>
      </div>
      <div id="ktDate" class="kt-date-today"></div>
      <div class="input-group kt-input-search">
        <input type="text" class="form-control" placeholder="Search..." />
        <span class="input-group-btn mg-0">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
      </div>
      <!-- input-group -->
    </div>
    <!-- kt-sideleft-header -->

    <!-- ##### SIDEBAR MENU ##### -->
    <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ##### HEAD PANEL ##### -->
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="kt-breadcrumb">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="/">GreenerBrains</a>
        
      </nav>
    </div>
    <!-- kt-breadcrumb -->

    <!-- ##### MAIN PANEL ##### -->
    <div class="kt-mainpanel">
      <!-- ##### BODY #### -->
      <?php echo $__env->yieldContent('content'); ?>

      <!-- ###### FOOTER ###### -->
      <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- kt-mainpanel -->

    <script src="<?php echo e(asset('lib/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/popper.js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/bootstrap/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/moment/moment.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/highlightjs/highlight.pack.js')); ?>"></script>

    <script src="<?php echo e(asset('js/magen-iot-admin.js')); ?>"></script>
     </body>

  <!-- Mirrored from qbgrow.com/magen/iot-admin/app/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 01:59:07 GMT -->
</html>
<?php /**PATH C:\xampp\htdocs\green\server\resources\views/layouts/default.blade.php ENDPATH**/ ?>