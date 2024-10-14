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

<div class="row justify-content-between align-items-start mt-5 w-100">

    <!-- assesment details -->

    <div class="col-sm-12 col-md-11 col-lg-12 ps-3">
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
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start mx-3">
                <p class="text-list"><strong>Due:</strong> <?php echo e($formattedDueDate); ?></p>
                <p class="text-list"><strong><?php echo e($assessment->maxscore); ?> Points Possible</strong></p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start mx-3">
                <p class="text-list"><strong>Assessment type:</strong> <?php echo e($assessment->type); ?></p>
                <p class="text-list"><strong>Required Review:</strong> <?php echo e($assessment->required_reviews); ?></p>
            </div>
            <p class="text-list ms-3"><strong>Instructions:</strong></p>
            <p class="text-list ms-3 mb-4"><?php echo e($assessment->instructions); ?></p>
            <?php if(!$hasReviews): ?>
            <?php echo $__env->make('course-details.add-assessment-form', ['assessment' => $assessment], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    </div>

    <!-- student list -->

    <div class="col-sm-12 col-md-11 col-lg-4 mt-4">
        <h6 class="header fw-semibold mb-3">All Students</h6>
        <div class="card d-flex flex-column align-items-center justify-content-start p-3">
            <?php if (isset($component)) { $__componentOriginal52e9ac57da4d5b885edbde6e81bcb2e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52e9ac57da4d5b885edbde6e81bcb2e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.list-view','data' => ['class' => 'w-100 p-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::list-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-100 p-0']); ?>
                <?php $__empty_1 = true; $__currentLoopData = $studentsEnrolled; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginal737c823632bf2c76432c6a15bfcf7ad4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal737c823632bf2c76432c6a15bfcf7ad4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.list-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::list-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <a class="text-decoration-none text-list"
                            href="<?php echo e(route('assessment.admin-view', ['id' => $assessment->id, 'userId' => $student->id])); ?>">
                            <?php echo e($student->student); ?>

                        </a>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal737c823632bf2c76432c6a15bfcf7ad4)): ?>
<?php $attributes = $__attributesOriginal737c823632bf2c76432c6a15bfcf7ad4; ?>
<?php unset($__attributesOriginal737c823632bf2c76432c6a15bfcf7ad4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal737c823632bf2c76432c6a15bfcf7ad4)): ?>
<?php $component = $__componentOriginal737c823632bf2c76432c6a15bfcf7ad4; ?>
<?php unset($__componentOriginal737c823632bf2c76432c6a15bfcf7ad4); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-white">No students enrolled in this course</p>
                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52e9ac57da4d5b885edbde6e81bcb2e3)): ?>
<?php $attributes = $__attributesOriginal52e9ac57da4d5b885edbde6e81bcb2e3; ?>
<?php unset($__attributesOriginal52e9ac57da4d5b885edbde6e81bcb2e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52e9ac57da4d5b885edbde6e81bcb2e3)): ?>
<?php $component = $__componentOriginal52e9ac57da4d5b885edbde6e81bcb2e3; ?>
<?php unset($__componentOriginal52e9ac57da4d5b885edbde6e81bcb2e3); ?>
<?php endif; ?>
            <div class="">
            <?php echo e($studentsEnrolled->links()); ?>

            </div>
        </div>
    </div>

    <!-- Conditionally display the reviews tab when a student is selected -->

    <?php if(!empty($reviewsSubmitted) || !empty($reviewsReceived)): ?>
        <div class="col-sm-12 col-md-11 col-lg-8 mt-5">
            <div class="card d-flex flex-column align-items-center justify-content-start mt-3 p-3">

    <!-- submit score form -->

                <?php if($selectedStudent): ?>
                    <div class="w-100">
                        <?php if($markReceived): ?>
                        <p class="text-white fw-semibold fs-5 mt-3">Submitted Marks for <?php echo e($selectedStudent->name); ?>: <?php echo e($markReceived->score); ?></p>
                        <?php else: ?>
                        <p class="text-white fw-semibold fs-5 mt-3">Submit Marks for <?php echo e($selectedStudent->name); ?></p>
                        <form method="post"
                            action="<?php echo e(route('mark.store', ['assessmentId' => $assessment->id, 'userId' => $selectedStudent->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="d-flex flex-row align-items-start justify-content-evenly w-100 mt-4">
                                <?php if (isset($component)) { $__componentOriginal399ab5ed63addab89395df8c37031002 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ab5ed63addab89395df8c37031002 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.input','data' => ['numeric' => 'true','placeholder' => 'score','name' => 'score','class' => 'w-1/4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['numeric' => 'true','placeholder' => 'score','name' => 'score','class' => 'w-1/4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal399ab5ed63addab89395df8c37031002)): ?>
<?php $attributes = $__attributesOriginal399ab5ed63addab89395df8c37031002; ?>
<?php unset($__attributesOriginal399ab5ed63addab89395df8c37031002); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal399ab5ed63addab89395df8c37031002)): ?>
<?php $component = $__componentOriginal399ab5ed63addab89395df8c37031002; ?>
<?php unset($__componentOriginal399ab5ed63addab89395df8c37031002); ?>
<?php endif; ?>
                                <button type="submit" class="submit-mark mt-2 btn btn-warning subtext rounded-5 w-full">Submit</button>
                            </div>
                            <?php $__errorArgs = ['score'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </form>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

    <!-- Reviews Submitted by the Student -->

                <div class="w-100">

                <?php if($reviewsSubmittedCount > 0): ?>
                    <p class="subtext mt-3">Submitted Reviews <?php echo e($reviewsSubmittedCount); ?> out of
                        <?php echo e($assessment->required_reviews); ?></p>
                    <?php if (isset($component)) { $__componentOriginal3e816710529890da4c2a689d494dc5dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e816710529890da4c2a689d494dc5dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.progress-bar','data' => ['percentage' => ''.e($reviewsSubmittedProgress).'','color' => 'green','striped' => 'true','animated' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::progress-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['percentage' => ''.e($reviewsSubmittedProgress).'','color' => 'green','striped' => 'true','animated' => 'true']); ?>
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
                    <?php endif; ?>

                </div>
                <?php $__empty_1 = true; $__currentLoopData = $reviewsSubmitted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                        <p class="text-list"><strong>Reviewee:</strong> <?php echo e($review->reviewee); ?></p>
                        <p class="text-list"><?php echo e($review->review_text); ?></p>
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
                    <div class="mt-4 w-100">
                        <p class="text-white">No review submitted yet</p>
                    </div>
                <?php endif; ?>

    <!-- Reviews Received by the Student -->

                <div class="mt-4 w-100">

                <?php if($reviewsReceivedCount > 0): ?>
                    <p class="subtext mt-3">Reviews Received <?php echo e($reviewsReceivedCount); ?> out of
                        <?php echo e($assessment->required_reviews); ?></p>
                    <?php if (isset($component)) { $__componentOriginal3e816710529890da4c2a689d494dc5dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e816710529890da4c2a689d494dc5dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.progress-bar','data' => ['percentage' => ''.e($reviewsReceivedProgress).'','color' => 'green','striped' => 'true','animated' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::progress-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['percentage' => ''.e($reviewsReceivedProgress).'','color' => 'green','striped' => 'true','animated' => 'true']); ?>
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
                    <?php endif; ?>

                </div>
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
                    <div class="mt-4 w-100">
                        <p class="text-white">No review received yet</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>

    <!-- Display a message or placeholder if no student is selected -->
        <div class="col-sm-12 col-md-11 col-lg-8 p-5 mt-4">
            <h6 class="header fw-semibold p-5 ms-5 mt-5">Please select a student to view their reviews.</h6>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Assignment2/resources/views/assessment/assessment-details-admin.blade.php ENDPATH**/ ?>