
<?php $__env->startSection('title','Thêm sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data" id="pro_form">
                     <div class="form-group">
                    <label for="">Chọn Ảnh</label>
                     <input type="file" class="form-control" multiple name="image[]">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APP\XAMPP\htdocs\PHP2\lesson6\app\views/admin/products/upload-form.blade.php ENDPATH**/ ?>