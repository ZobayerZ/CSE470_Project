

<?php $__env->startSection("style"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Customer Dashboard</h1>
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

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Trendy Items</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <div class="product-placeholder">
                    <img src="<?php echo e(url('assets/dist/img/default-150x150.png')); ?>" alt="Trendy Item 1" class="img-fluid">
                  </div>
                </div>
                <div class="col-4">
                  <div class="product-placeholder">
                    <img src="<?php echo e(url('assets/dist/img/default-150x150.png')); ?>" alt="Trendy Item 2" class="img-fluid">
                  </div>
                </div>
                <div class="col-4">
                  <div class="product-placeholder">
                    <img src="<?php echo e(url('assets/dist/img/default-150x150.png')); ?>" alt="Trendy Item 3" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Category</h3>
            </div>
            <div class="card-body">
              <select class="form-control">
                <option>Select Category</option>
                <option>Clothing</option>
                <option>Electronics</option>
                <option>Accessories</option>
              </select>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Search Products</h3>
            </div>
            <div class="card-body">
              <input type="text" class="form-control" placeholder="Search for products...">
              <div class="mt-3">
                <div class="row">
                  <div class="col-4">
                    <div class="product-placeholder">
                      <img src="<?php echo e(url('assets/dist/img/default-150x150.png')); ?>" alt="Product 1" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="product-placeholder">
                      <img src="<?php echo e(url('assets/dist/img/default-150x150.png')); ?>" alt="Product 2" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="product-placeholder">
                      <img src="<?php echo e(url('assets/dist/img/default-150x150.png')); ?>" alt="Product 3" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
<script src="<?php echo e(url("assets/dist/js/pages/dashboard.js")); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("customer.cus_layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo-p\resources\views/customer/dashboard.blade.php ENDPATH**/ ?>