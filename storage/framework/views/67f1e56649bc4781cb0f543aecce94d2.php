

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sub-Category List</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?php echo e(route('admin.sub_category.create')); ?>" class="btn btn-primary">Add New Sub-Category</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Sub-Categories</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Category</th>
                                        <th>Created By</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($subCategory->name); ?></td>
                                        <td><?php echo e($subCategory->slug); ?></td>
                                        <td><?php echo e($subCategory->status ? 'Active' : 'Inactive'); ?></td>
                                        <td><?php echo e($subCategory->category->name); ?></td>
                                        <td><?php echo e($subCategory->creator->name ?? 'N/A'); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.sub_category.edit', $subCategory->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                                            <form action="<?php echo e(route('admin.sub_category.destroy', $subCategory->id)); ?>" method="POST" style="display:inline-block;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <?php echo e($subCategories->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.ad_layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Echo_merch\resources\views/admin/sub_category/index.blade.php ENDPATH**/ ?>