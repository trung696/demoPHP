
<?php $__env->startSection('title', 'Sửa danh mục'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="cate_name" value="<?php echo e($cate->cate_name); ?>" class="form-control">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input"
                    <?php if($cate->show_menu == 1): ?>
                    checked
                    <?php endif; ?>
                    value="1" name="show_menu" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị ở menu</label>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="desc" class="form-control" rows="10"><?php echo e($cate->desc); ?></textarea>
                </div>
                <div class="text-right">
                    <a href="<?php echo e(BASE_URL . 'danh-muc'); ?>" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APP\XAMPP\htdocs\PHP2\lesson6\app\views/admin/category/edit-form.blade.php ENDPATH**/ ?>