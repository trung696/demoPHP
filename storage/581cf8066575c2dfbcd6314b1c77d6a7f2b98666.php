
<?php $__env->startSection('title', 'Sửa danh mục'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group"><label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e($pro->name); ?>">
                    
                </div>
                <div class="form-group"><label for="">Ảnh sản phẩm</label>
                    <img src="<?php echo e(BASE_URL.'/'.$pro->image); ?>" alt="" width="200px">
                    
                    <label for="">Chọn Ảnh</label>
                     <input type="file" class="form-control" multiple name="image">
                
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="cate_id" id="" class="form-control">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php if($item->id == $pro->cate_id): ?>
                            selected
                        <?php endif; ?>><?php echo e($item->cate_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group"><label for="">Giá</label><input type="text" name="price" class="form-control"></div>
                <div class="form-group"><label for="">Mô tả ngắn</label><input type="text" name="short_desc" class="form-control"></div>
                <div class="form-group"><label for="">Thông tin</label><input type="text" name="detail" class="form-control"></div>
                <label for="">Đánh giá</label>
                    <div class="form-check">
                        <input class="form-check-input" value="1" type="radio" name="star" id="1sao">
                         <label class="form-check-label" for="1sao"> 1 sao  </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="2" type="radio" name="star" id="2sao" checked>
                        <label class="form-check-label" for="2sao">2 sao</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="3" type="radio" name="star" id="3sao" checked>
                        <label class="form-check-label" for="3sao">3 sao</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="star" id="4sao" checked>
                        <label class="form-check-label" for="4sao">4 sao</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="star" id="5sao" checked>
                        <label class="form-check-label" for="5sao">5 sao</label>
                    </div> 
                    <div class="text-right">
                    <a href="<?php echo e(BASE_URL . 'san-pham'); ?>" class="btn btn-sm btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
                
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APP\XAMPP\htdocs\PHP2\lesson6\app\views/admin/products/edit-form.blade.php ENDPATH**/ ?>