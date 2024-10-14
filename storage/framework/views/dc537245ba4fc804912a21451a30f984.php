<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Banner -->

<?php echo $__env->make('shared.banner', [
    'header' => 'Welcome back, ' . Auth::user()->name . '!',
    'subtext' => Auth::user()->isInstructor ? 'Ready to lead your students through meaningful assessments and feedback?' :
        'Ready to give and receive valuable feedback?',
    'class' => 'banner'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(!Auth::user()->isInstructor): ?>
            <?php echo $__env->make('shared.help-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

<!-- Enrolled Courses -->

<div class="row justify-content-between align-items-start mt-5 w-100">
    <?php if($courses->isEmpty()): ?>
        <?php echo $__env->make('shared.empty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php else: ?>
    <div class="col-sm-12 col-md-11 col-lg-6 ">
        <div class="d-flex flex-column justify-content-start">
            <h5 class="header fw-semibold mt-5 mb-3">
                <?php echo e(Auth::user()->isInstructor ? "Courses You're Teaching" : 'Enrolled Courses'); ?>

            </h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <div class="card rounded-4 h-100">
                                <div class="card-body h-75">
                                    <h6 class="card-title text-white"><?php echo e($course->course_name); ?> - <?php echo e($course->course_code); ?></h6>
                                    <?php if(Auth::user()->isInstructor): ?>
                                    <?php else: ?>
                                    <p class="card-title text-white subtext"><?php echo e($course->instructor); ?></p>
                                    <?php endif; ?>
                                    <p class="card-title text-white subtext"><?php echo e($course->day); ?>

                                        <?php echo e($course->time); ?> <?php echo e($course->mode); ?>

                                    </p>
                                    </div>
                                    <div class="w-50 h-25 ms-3 mb-2">
                                    <a href="<?php echo e(route('courses.show', $course->course_code)); ?>"
                                        class="btn rounded-5 px-4 subtext">View</a>
                                    </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

        <div class="col-sm-12 col-md-11 col-lg-6 pt-5 mt-5 mt-lg-0">
        <?php if($assessments->isEmpty()): ?>
    <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.card','data' => ['title' => 'To Do','compact' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'To Do','compact' => 'true']); ?>
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
                            <?php if (isset($component)) { $__componentOriginal701009bc86ef91af6041f0e4d6588e8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal701009bc86ef91af6041f0e4d6588e8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.checkbox','data' => ['color' => 'green']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'green']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal701009bc86ef91af6041f0e4d6588e8f)): ?>
<?php $attributes = $__attributesOriginal701009bc86ef91af6041f0e4d6588e8f; ?>
<?php unset($__attributesOriginal701009bc86ef91af6041f0e4d6588e8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal701009bc86ef91af6041f0e4d6588e8f)): ?>
<?php $component = $__componentOriginal701009bc86ef91af6041f0e4d6588e8f; ?>
<?php unset($__componentOriginal701009bc86ef91af6041f0e4d6588e8f); ?>
<?php endif; ?>
                            <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between w-100">
                                <div class="text-list d-flex flex-column me-5 w-100">
                                    <strong><?php echo e($assessment->course_name); ?></strong>
                                    <span><?php echo e($assessment->title); ?></span>
                                </div>
                                <div class="text-list w-75 mt-3 mt-md-0 ms-md-5">
                                    <strong>Date:</strong>
                                    <?php echo e($assessment->formatted_due_date); ?>

                                </div>
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
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaymee\Documents\Peerspective\resources\views/dashboard/home-page.blade.php ENDPATH**/ ?>