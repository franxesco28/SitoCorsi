<div >
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
        <button type="button" class="btn btn-outline-light"
                style="margin-right:1rem; margin-top: 1rem; font-size: 1.5rem;">
            <?php echo e($course->name); ?>

        </button>
            </div
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                <button type="button" class="btn btn-outline-light"
                        style="margin-right:1rem; margin-top: 1rem; font-size: 1.5rem;">
            <?php echo e($lecture->room); ?>

                </button>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\code\laravel\example\resources\views/components/template-corsi.blade.php ENDPATH**/ ?>