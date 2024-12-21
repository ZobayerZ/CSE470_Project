<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Dashboard</title>
  <link rel="stylesheet" href="<?php echo e(url('assets/dist/css/adminlte.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('assets/plugins/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('assets/dist/css/custom.css')); ?>">
  <?php echo $__env->yieldContent('style'); ?> <!-- Page-specific styles -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php echo $__env->make('customer.cus_layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Include header -->
    
    <!-- Sidebar -->
    <?php echo $__env->make('customer.cus_layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Include sidebar -->
    
    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <?php echo $__env->yieldContent('content'); ?> <!-- Page-specific content -->
        </div>
      </section>
    </div>
    
    <!-- Footer -->
    <?php echo $__env->make('customer.cus_layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Include footer -->
  </div>
  
  <!-- Scripts -->
  <script src="<?php echo e(url('assets/plugins/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(url('assets/dist/js/adminlte.min.js')); ?>"></script>
  <?php echo $__env->yieldContent('script'); ?> <!-- Page-specific scripts -->
</body>
</html>
<?php /**PATH C:\xampp\htdocs\demo-p\resources\views/customer/cus_layouts/app.blade.php ENDPATH**/ ?>