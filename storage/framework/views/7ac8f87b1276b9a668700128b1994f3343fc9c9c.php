<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>
                    <?php echo $__env->yieldContent('posts'); ?>
                    <?php echo $__env->yieldContent('post'); ?>
                    <?php echo $__env->yieldContent('add'); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>