<form method="post" action="<?php echo e(route('participation.store', ['courseCode' => $course->course_code])); ?>" class="w-100">
    <?php echo csrf_field(); ?>
    <div class="mt-4 px-4 w-100">
        <p class="subtext mt-3">Select a student to enroll</p>
        <?php if (isset($component)) { $__componentOriginal42bbb750bf00f5b943d8fe92e0fb6d32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42bbb750bf00f5b943d8fe92e0fb6d32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.select','data' => ['name' => 'userId','searchable' => 'true','labelKey' => 'label','valueKey' => 'value','label' => 'Select a student to enroll','data' => $studentsArray]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'userId','searchable' => 'true','label_key' => 'label','value_key' => 'value','label' => 'Select a student to enroll','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($studentsArray)]); ?>
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
    </div>
    <div class="mt-4 px-4 w-100">
        <p class="subtext mt-3">Schedule</p>
        <?php if (isset($component)) { $__componentOriginal42bbb750bf00f5b943d8fe92e0fb6d32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42bbb750bf00f5b943d8fe92e0fb6d32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.select','data' => ['name' => 'course_schedule_id','searchable' => 'true','labelKey' => 'label','valueKey' => 'value','label' => 'Schedule','data' => $schedulesArray]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'course_schedule_id','searchable' => 'true','label_key' => 'label','value_key' => 'value','label' => 'Schedule','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($schedulesArray)]); ?>
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
    </div>
    <button type="submit" class="btn btn-warning subtext rounded-5 px-4 ms-4 mb-4">
        Add
    </button>
</form><?php /**PATH /var/www/html/Assignment2/resources/views/course-details/add-student-form.blade.php ENDPATH**/ ?>