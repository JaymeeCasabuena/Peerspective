<?php $__env->startSection('title'); ?>
Course Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Banner -->

<?php echo $__env->make('shared.banner', [
    'header' => $course->name,
    'subtext' => $course->course_code,
    'class' => 'course-banner'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('shared.success-alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('shared.error-alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row justify-content-between align-items-start mt-5 w-100">

        <div class="col-sm-12 col-md-11 col-lg-6 mt-4 mt-lg-0 ">

            <?php if(count($assessments) > 0): ?>
        <h5 class="header mt-5 fw-semibold">Assessments</h5>
            <?php if (isset($component)) { $__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.card','data' => ['title' => 'Assessments','compact' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Assessments','compact' => 'true']); ?>
                <?php if (isset($component)) { $__componentOriginal52e9ac57da4d5b885edbde6e81bcb2e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52e9ac57da4d5b885edbde6e81bcb2e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.list-view','data' => ['class' => 'p-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::list-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-0']); ?>
                    <?php $__currentLoopData = $assessments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assessment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between w-100">
                            <span class="me-5 w-100">
                                <?php if(Auth::user()->isInstructor): ?>
                                    <a class="text-decoration-none text-list" href="<?php echo e(route('assessment.admin-view', $assessment->id)); ?>"> <?php echo e($assessment->title); ?>

                                        </a>
                                <?php else: ?>
                                    <a class="text-decoration-none text-list" href="<?php echo e(route('assessment.student-view', $assessment->id)); ?>"> <?php echo e($assessment->title); ?>

                                        </a>
                                <?php endif; ?>
                            </span>
                            <span class="text-list w-75 mt-3 mt-md-0 ms-md-5"><strong>Date:</strong>
                                    <?php echo e($assessment->formatted_due_date); ?>

                            </span>
                            </div>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                <?php if(Auth::user()->isInstructor): ?>
                <?php echo $__env->make('course-details.add-assessment-form', ['courseCode' => $course->course_code, 'assessment' => null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php else: ?>
        <?php echo $__env->make('shared.empty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

        <div class="col-sm-12 col-md-11 col-lg-6 mt-lg-0">
            <h5 class="header mt-5 fw-semibold">Instructors</h5>
            <div class="card d-flex flex-row align-items-center justify-content-start">
                <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex flex-column align-items-center justify-content-center text-white m-3">
                        <?php if (isset($component)) { $__componentOriginal0ad07d55369c3f142811e8f2e87d048d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ad07d55369c3f142811e8f2e87d048d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.avatar','data' => ['image' => ''.e(asset('assets/photos/avatar.jpg')).'','size' => 'big']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => ''.e(asset('assets/photos/avatar.jpg')).'','size' => 'big']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ad07d55369c3f142811e8f2e87d048d)): ?>
<?php $attributes = $__attributesOriginal0ad07d55369c3f142811e8f2e87d048d; ?>
<?php unset($__attributesOriginal0ad07d55369c3f142811e8f2e87d048d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ad07d55369c3f142811e8f2e87d048d)): ?>
<?php $component = $__componentOriginal0ad07d55369c3f142811e8f2e87d048d; ?>
<?php unset($__componentOriginal0ad07d55369c3f142811e8f2e87d048d); ?>
<?php endif; ?>
                        <span class="mt-2"><?php echo e($instructor->instructor); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if(!Auth::user()->isInstructor && count($topReviewers) > 0): ?>
                <?php echo $__env->make('shared.top-reviewer-banner', ['topReviewers' => $topReviewers], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <?php if(Auth::user()->isInstructor): ?>
            <h5 class="header fw-semibold mt-4">Add a Student</h5>
            <div class="card d-flex flex-column align-items-start justify-content-start">
                <?php echo $__env->make('course-details.add-student-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Assignment2/resources/views/course-details/course-details.blade.php ENDPATH**/ ?>