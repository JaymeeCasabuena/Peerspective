<?php $__env->startSection('title'); ?>
    Course Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Banner -->
<?php echo $__env->make('shared.banner', [
    'header' => $assessment->title,
    'subtext' => $assessment->course_code,
    'class' => 'assessment-banner'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('shared.success-alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('shared.error-alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row justify-content-between align-items-start mt-3 w-100">
<?php echo $__env->make('shared.help-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-sm-12 col-md-11 col-lg-12 ps-3 mt-5">
        <h5 class="header fw-semibold mb-3">Assessment Details</h5>
        <?php if (isset($component)) { $__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.card','data' => ['compact' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['compact' => 'true']); ?>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                <p class="text-list"><strong>Due:</strong> <?php echo e($formattedDueDate); ?></p>
                <p class="text-list"><strong><?php echo e($assessment->maxscore); ?> Points Possible</strong></p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                <p class="text-list"><strong>Assessment type:</strong> <?php echo e($assessment->type); ?></p>
                <p class="text-list"><strong>Required Review:</strong> <?php echo e($assessment->required_reviews); ?></p>
            </div>
            <p class="text-list"><strong>Instructions:</strong></p>
            <p class="text-list"><?php echo e($assessment->instructions); ?></p>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe)): ?>
<?php $attributes = $__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe; ?>
<?php unset($__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe)): ?>
<?php $component = $__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe; ?>
<?php unset($__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe); ?>
<?php endif; ?>
    </div>

    <div class="col-sm-12 col-md-11 col-lg-6 mt-4">
        <h6 class="header fw-semibold ms-5 mt-4 mb-3">Reviews received</h6>
        <div class="card d-flex flex-column align-items-center justify-content-start ms-0 ms-lg-5 p-3">
            <?php $__empty_1 = true; $__currentLoopData = $reviewsReceived; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if (isset($component)) { $__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.card','data' => ['compact' => 'true','class' => 'w-100 mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['compact' => 'true','class' => 'w-100 mt-2']); ?>
                    <p class="text-list"><strong>Reviewer:</strong> <?php echo e($review->reviewer); ?></p>
                    <p class="text-list"><?php echo e($review->review_text); ?></p>
                    <?php if($review->rating): ?>
                    <p class="text-list mb-0"><strong>You rated this review:</strong></p>
                    <?php echo $__env->make('shared.star-rating', ['name' => $review->id, 'rating' => $review->rating, 'isStatic' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                    <p class="text-list mb-0"><strong>Rate this review:</strong></p>
                    <form method="post" action="<?php echo e(route('rating.store', ['userId' => $review->reviewer_id, 'courseCode' => $assessment->course_code, 'assessmentId' => $assessment->id, 'reviewId' => $review->id])); ?>" class="w-100">
                        <?php echo csrf_field(); ?>
                        <div class="d-flex flex-row align-items-center justify-content-between w-100">
                            <div class="p-0">
                                <?php echo $__env->make('shared.star-rating', ['name' => $review->id, 'rating' => $review->rating, 'isStatic' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <button type="submit" class="btn btn-warning subtext rounded-5 mt-3 px-4">
                                Submit
                            </button>
                        </div>
                    </form>
                    <?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe)): ?>
<?php $attributes = $__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe; ?>
<?php unset($__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe)): ?>
<?php $component = $__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe; ?>
<?php unset($__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-white">No reviews received yet</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-sm-12 col-md-11 col-lg-6 mt-4">
        <h6 class="header fw-semibold mt-4 mb-3">Submit Peer Review</h6>
        <div class="card d-flex flex-column align-items-start justify-content-center me-0 me-lg-5">
            <?php if($showWarning): ?>
            <p class="subtext text-warning ms-4 mt-3"><strong>Important:</strong> Your peer feedback rating is low – Please refer to the help page for some tips</p>
            <?php endif; ?>
            <div class="mt-4 px-4 w-100">
                <p class="subtext mt-3">Submitted Reviews <?php echo e($submittedReviewsCount); ?> out of <?php echo e($assessment->required_reviews); ?></p>
                <?php if (isset($component)) { $__componentOriginal3e816710529890da4c2a689d494dc5dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e816710529890da4c2a689d494dc5dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.progress-bar','data' => ['percentage' => ''.e($assessmentProgress).'','color' => 'green','striped' => 'true','animated' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::progress-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['percentage' => ''.e($assessmentProgress).'','color' => 'green','striped' => 'true','animated' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3e816710529890da4c2a689d494dc5dd)): ?>
<?php $attributes = $__attributesOriginal3e816710529890da4c2a689d494dc5dd; ?>
<?php unset($__attributesOriginal3e816710529890da4c2a689d494dc5dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e816710529890da4c2a689d494dc5dd)): ?>
<?php $component = $__componentOriginal3e816710529890da4c2a689d494dc5dd; ?>
<?php unset($__componentOriginal3e816710529890da4c2a689d494dc5dd); ?>
<?php endif; ?>
            </div>
            <form method="post" action="<?php echo e(route('review.store', ['assessmentId' => $assessment->id])); ?>" class="w-100">
                <?php echo csrf_field(); ?>
                <div class="mt-4 px-4 w-100">
                    <p class="subtext mt-3">Select a student to give feedback to</p>
                    <?php if (isset($component)) { $__componentOriginal42bbb750bf00f5b943d8fe92e0fb6d32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42bbb750bf00f5b943d8fe92e0fb6d32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.select','data' => ['name' => 'reviewee_id','searchable' => 'true','labelKey' => 'label','valueKey' => 'value','label' => 'Select a student to review','data' => $studentsArray]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'reviewee_id','searchable' => 'true','label_key' => 'label','value_key' => 'value','label' => 'Select a student to review','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($studentsArray)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42bbb750bf00f5b943d8fe92e0fb6d32)): ?>
<?php $attributes = $__attributesOriginal42bbb750bf00f5b943d8fe92e0fb6d32; ?>
<?php unset($__attributesOriginal42bbb750bf00f5b943d8fe92e0fb6d32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42bbb750bf00f5b943d8fe92e0fb6d32)): ?>
<?php $component = $__componentOriginal42bbb750bf00f5b943d8fe92e0fb6d32; ?>
<?php unset($__componentOriginal42bbb750bf00f5b943d8fe92e0fb6d32); ?>
<?php endif; ?>
                    <p class="subtext mt-3">Write feedback here</p>
                    <?php if (isset($component)) { $__componentOriginalccf271f2412aa24d7188779f4df7f40c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalccf271f2412aa24d7188779f4df7f40c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.textarea','data' => ['name' => 'review_text','label' => 'Review']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'review_text','label' => 'Review']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalccf271f2412aa24d7188779f4df7f40c)): ?>
<?php $attributes = $__attributesOriginalccf271f2412aa24d7188779f4df7f40c; ?>
<?php unset($__attributesOriginalccf271f2412aa24d7188779f4df7f40c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalccf271f2412aa24d7188779f4df7f40c)): ?>
<?php $component = $__componentOriginalccf271f2412aa24d7188779f4df7f40c; ?>
<?php unset($__componentOriginalccf271f2412aa24d7188779f4df7f40c); ?>
<?php endif; ?>
                </div>
                <?php if($assessmentProgress == 100): ?>
                    <p class="subtext fw-semibold ms-4 mt-3">Well done! You submitted required amount of reviews!</p>
                <?php else: ?>
                    <button type="submit" class="btn btn-warning subtext rounded-5 px-4 ms-4 mb-4">
                        Add
                    </button>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Assignment2/resources/views/assessment/assessment-details.blade.php ENDPATH**/ ?>