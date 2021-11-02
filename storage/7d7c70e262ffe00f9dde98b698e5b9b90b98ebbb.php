
<?php $__env->startSection('title', 'Danh sách Sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table class="table table-stripped">
                    <thead>
                        <th>ID</th>
                        <th>Tên Sản phẩm</th>
                        <th>Ảnh Sản phẩm</th>
                        <th>Tên danh mục</th>
                        <th>Giá Sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Chi tiết</th>
                        <th>Đánh giá</th>
                        <th>
                            <a href="<?php echo e(BASE_URL . 'san-pham/add'); ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        
                        <?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td class=""><img src="<?php echo e($item->image); ?>" width="100px" alt=""></td>
                                
                                <td value="<?php echo e($item->cate_id); ?>"><?php echo e($item->Category->cate_name); ?></td>
                    
                                <td><?php echo e($item->price); ?></td>
                                <td><?php echo e($item->short_desc); ?></td>
                                <td><?php echo e($item->detail); ?></td>
                                <td><?php echo e($item->star); ?></td>
                                <td>
                                    <a href="<?php echo e(BASE_URL . 'san-pham/edit/' . $item->id); ?>" class="btn btn-sm btn-primary">Sửa</a>
                                    <a href="<?php echo e(BASE_URL . 'san-pham/delete/' . $item->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APP\XAMPP\htdocs\lesson6\app\views/admin/products/index.blade.php ENDPATH**/ ?>