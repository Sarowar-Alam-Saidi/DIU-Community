<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo e(url('/backend/deshboard')); ?>">Dashboard</a></li>
</ol>
<div class="col-md-12">     
    <h1 style="text-align: center;">Welcome to DIU Community</h1>
</div><!--col-md-12 end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DIU_Community\resources\views/admin/index.blade.php ENDPATH**/ ?>