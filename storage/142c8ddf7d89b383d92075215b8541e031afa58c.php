<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo e(BASE_URL . '/public/adminlte/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <?php if(isset($_SESSION['AUTH'])): ?>
                    <a href="<?php echo e(BASE_URL); ?>./admin" class="mr-3 hover:text-teal-400"><?php echo e($_SESSION['AUTH']['name']); ?></a><span class="mr-2"></span>
                    
                    
                    <?php else: ?>
                    <a href="<?php echo e(BASE_URL); ?>./login" class="mr-3 hover:text-teal-400">Sign in</a><span class="mr-2"></span>
                    
                    <?php endif; ?>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="<?php echo e(BASE_URL); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Danh mục
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'danh-muc'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'danh-muc/add'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fab fa-product-hunt"></i>
            <p>
              Sản phẩm
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>  
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'san-pham'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'san-pham/add'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Ảnh phụ
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'gallery'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(BASE_URL . 'gallery/add'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['AUTH'])): ?>
                  <a href="<?php echo e(BASE_URL); ?>./logout" class="hover:text-teal-400 nav-link"><i class=" nav-icon fas fa-sign-out-alt"></i><p>Sign Out</p></a>
                    <?php else: ?>
                    <a href="<?php echo e(BASE_URL); ?>./login" class="mr-3 hover:text-teal-400 nav-link"><i class="nav-icon fas fa-sign-in-alt"></i><p>Sign In</p></a>
                    <?php endif; ?>
        </li>
        
        
            
          
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div><?php /**PATH D:\APP\XAMPP\htdocs\PHP2\lesson6\app\views/layouts/sidebar.blade.php ENDPATH**/ ?>