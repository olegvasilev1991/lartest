<?php $__env->startSection('posts'); ?>
          <div class="card-body">
            <ul>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li> <a href="pages/<?php echo e($post->id); ?>"> <?php echo e($post->title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('posts.layoutposts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>