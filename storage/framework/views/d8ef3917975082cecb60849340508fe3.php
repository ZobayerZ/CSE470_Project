<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EchoMerch | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(url('assets/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('assets/dist/css/adminlte.min.css')); ?>">
  <?php echo $__env->yieldContent('style'); ?>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Header -->
    <?php echo $__env->make('admin.ad_layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- /.content-header -->

        <!-- Main Content -->
        <div class="content">
          <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <?php echo $__env->make('admin.ad_layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<!-- Scripts -->
<script src="<?php echo e(url('assets/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/dist/js/adminlte.js')); ?>"></script>
<script src="<?php echo e(url('assets/plugins/chart.js/Chart.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/dist/js/demo.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\demo-p\resources\views/admin/ad_layouts/app.blade.php ENDPATH**/ ?>