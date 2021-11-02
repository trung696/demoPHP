;
<?php $__env->startSection('title','Thêm ảnh phụ'); ?>

<?php $__env->startSection('content'); ?>
<form action="" method="post" enctype="multipart/form-data" id="pro_form">
    <div class="row">
        <div class="col-6">
            
            <div class="form-group">
                <label for="">Sản phẩm</label>
                <select name="product_id" id="" class="form-control">
                    <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Chọn ảnh</label>
                <input type="file" multiple name="image[]" class="form-control" id="">
            </div>
            <div class="form-group">
                <a href="<?php echo e(BASE_URL . 'san-pham'); ?>" class="btn btn-sm btn-danger">Hủy</a>
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
            </div>
        </div>
    </form>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#pro_form').validate({
                rules: {
                    
                    image: {
                        required: true
                    }
                },
                messages: {
                    
                    image: {
                        required: "Hãy nhập ảnh"
                    }
                }
            });
        });
    </script>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APP\XAMPP\htdocs\PHP2\lesson6\app\views/admin/gallery/add-form.blade.php ENDPATH**/ ?>