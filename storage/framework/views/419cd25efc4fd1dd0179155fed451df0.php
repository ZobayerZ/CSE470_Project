

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Admin</h1>
                </div>
                <div class="col-sm-6" style="text-align: right">
                    <a href="<?php echo e(route('admin.list')); ?>" class="btn btn-primary">Back to Admin List</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Admin Details</h3>
                        </div>
                        <div class="card-body p-0">
                            <form action="<?php echo e(route('admin.update', $admin->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($admin->name); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo e($admin->email); ?>" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update Admin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.ad_layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo-p\resources\views/admin/admin/edit.blade.php ENDPATH**/ ?>