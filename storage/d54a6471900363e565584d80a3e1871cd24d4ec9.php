
<?php $__env->startSection('title', 'Trang chủ'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Danh sách sản phẩm</h2>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="border: 1px solid #ccc; display: inline-block;">
            <h3>Sản phẩm: <?php echo e($pro->name); ?></h3>
            <p>Giá: <?php echo e($pro->price); ?></p>
            <p>Danh mục: <?php echo e($pro->category->cate_name); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APP\XAMPP\htdocs\lesson6\app\views/clients/homepage.blade.php ENDPATH**/ ?>