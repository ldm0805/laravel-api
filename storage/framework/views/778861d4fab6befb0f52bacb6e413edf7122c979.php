
<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        <?php echo e(__('Dashboard')); ?>

    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header"><?php echo e(__('User Dashboard')); ?></div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\laravel\laravel_vite\laravel-api\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>