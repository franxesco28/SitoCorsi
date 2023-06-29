
<?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <div class="car mb-4" style="width: 100%">
        <div class="car-body">
            <p class="lecturer_timeslot"><?php echo e($item->day); ?> | <?php echo e($item->time); ?> |
            <span class="badge bg-secondary"><?php echo e($item->room); ?> </span></p>
            <h4 class="card-title lecturer_name"><?php echo e($item->course); ?></h4>
            <h5 class="card-title lectuerer_course"> <?php echo e($item->course); ?></h5>
            <a href="/lecturers/<?php echo e($item->slug); ?>" class="mb-2 d-block days-a">
                <span class="badge bg-primary">Calendar</span>
            </a>
            <p class="card-text">
                <?php if(!is_null($item->info) ): ?>
                    <?php $__currentLoopData = $item->info->teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($teacher->name); ?> |
                        <a href="mailto:<?php echo e($teacher->email); ?>" target="_blank"><?php echo e($teacher->email); ?></a>
                        <br>
                        <?php if(isset($teacher->profile)): ?>
                            <small><a href="<?php echo e($teacher->profile); ?>"
                                        target="_blank"><?php echo e($teacher->profile); ?></a></small>
                            <br>
                        <?php endif; ?>

                        <?php if($loop->remaining > 0): ?>
                            <br>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </p>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="d-flex justify-content-center bg-primary ali-content-center opacity-25" style="width: 100% ">
        <h4>NO CORSI</h4>
    </div>
<?php endif; ?>
<?php /**PATH C:\code\laravel\example\resources\views/lecturers/engineering/timetable.blade.php ENDPATH**/ ?>