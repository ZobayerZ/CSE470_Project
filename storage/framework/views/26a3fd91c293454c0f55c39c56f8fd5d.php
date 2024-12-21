<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(url('admin/dashboard')); ?>" class="brand-link">
        <img src="<?php echo e(asset('assets/dist/img/alopecia cactus18373_rectangle.jpg')); ?>" 
             alt="AdminLTE Logo" 
             class="brand-image img-circle elevation-3" 
             style="opacity: .8">
        <span class="brand-text font-weight-light">EchoMerch</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('assets/dist/img/Go!5270_rectangle.jpg')); ?>" 
                     class="img-circle elevation-2" 
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Echo Friendly</a>
            </div>
        </div>

        <!-- Sidebar Search Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" 
                       type="search" 
                       placeholder="Search" 
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" 
                data-widget="treeview" 
                role="menu" 
                data-accordion="false">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a href="<?php echo e(url('admin/dashboard')); ?>" class="nav-link <?php if(Request::segment(2) =='dashboard'): ?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Admin Link -->
                <li class="nav-item">
                    <a href="<?php echo e(url('admin/admin/list')); ?>" class="nav-link <?php if(Request::segment(2) =='admin'): ?> active <?php endif; ?>"active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Admin</p>
                    </a>
                </li>

                <!-- Product Section -->
                <li class="nav-item">
                    <a href="<?php echo e(url('product/list')); ?>" class="nav-link <?php if(Request::segment(2) =='product'): ?> active <?php endif; ?>"active">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Category Subsection -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Category
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!-- Clothing Category -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>
                                            Clothing
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Brands</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Electronics Category -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>
                                            Electronics
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Brands</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Accessories Category -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>
                                            Accessories
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Brands</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- Logout Link -->
                <li class="nav-item">
                    <a href="<?php echo e(url('/')); ?>" class="nav-link <?php if(Request::segment(2) =='logout'): ?> active <?php endif; ?>"active">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\demo-p\resources\views/admin/ad_layouts/header.blade.php ENDPATH**/ ?>