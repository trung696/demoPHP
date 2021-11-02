
<?php $__env->startSection('title','Gallery'); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <table class="table table-stripped">
        <thead>
            <th>Id</th>
            <th>Sản phẩm</th>
            <th>Ảnh</th>
            <th>
                <a href="<?php echo e(BASE_URL); ?>./product-gallery/addGal" class="btn btn-sm btn-success">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td value="<?php echo e($item->product_id); ?>" ><?php echo e($item->Product->name); ?></td>
                <td><img src="<?php echo e($item->image); ?>" alt="" class="" width="100px"></td>
                <td>
                    <a href="<?php echo e(BASE_URL.'gallery/edit/'.$item->id); ?>" class="btn btn-sm btn-primary">Sửa</a>
                    <a href="<?php echo e(BASE_URL.'gallery/delete/'.$item->id); ?>" onclick="return confirm('Bạn có muốn xóa?')" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APP\XAMPP\htdocs\lesson6\app\views/admin/gallery/Gallery.blade.php ENDPATH**/ ?>