

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Category</h1>
                </div>
                <div class="col-sm-6" style="text-align: right">
                    <a href="<?php echo e(route('admin.categories.list')); ?>" class="btn btn-secondary">Back to Category List</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Form -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo e(route('admin.categories.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.ad_layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo-p\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>