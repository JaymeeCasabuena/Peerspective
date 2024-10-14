<div class="top-banner d-flex flex-column align-items-start justify-content-center w-100 h-100 mt-3">
    <div class="mt-5 ms-5 w-100">
        <?php $__currentLoopData = $topReviewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reviewer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex flex-row align-items-center justify-content-center w-75 ms-5">
                <!-- Name and Average Rating -->
                <p class="subtext mt-2 mb-0"><?php echo e($reviewer->name); ?> - <?php echo e(round($reviewer->average_rating, 1)); ?></p>

                <!-- Star Rating -->
                <div class="ms-2 mb-1 d-none d-md-block">
                    <?php echo $__env->make('shared.star-rating', ['name' => $reviewer->name, 'rating' => round($reviewer->average_rating, 0), 'isStatic' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH /var/www/html/Assignment2/resources/views/shared/top-reviewer-banner.blade.php ENDPATH**/ ?>