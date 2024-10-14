<?php if(session()->has('success')): ?>
<div class="mt-3 w-100" >
    <?php if (isset($component)) { $__componentOriginal17dd0d299daadc2b1ecd1ba218cbefb0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17dd0d299daadc2b1ecd1ba218cbefb0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.alert','data' => ['type' => 'success','shade' => 'dark']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success','shade' => 'dark']); ?>
        <?php echo e(session('success')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17dd0d299daadc2b1ecd1ba218cbefb0)): ?>
<?php $attributes = $__attributesOriginal17dd0d299daadc2b1ecd1ba218cbefb0; ?>
<?php unset($__attributesOriginal17dd0d299daadc2b1ecd1ba218cbefb0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17dd0d299daadc2b1ecd1ba218cbefb0)): ?>
<?php $component = $__componentOriginal17dd0d299daadc2b1ecd1ba218cbefb0; ?>
<?php unset($__componentOriginal17dd0d299daadc2b1ecd1ba218cbefb0); ?>
<?php endif; ?>
</div>
<?php endif; ?><?php /**PATH /var/www/html/Assignment2/resources/views/shared/success-alert.blade.php ENDPATH**/ ?>