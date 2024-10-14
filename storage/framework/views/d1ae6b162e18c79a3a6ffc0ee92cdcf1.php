<?php if (isset($component)) { $__componentOriginala0d286332d7c052588567c9c0851b512 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0d286332d7c052588567c9c0851b512 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.dropmenu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::dropmenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('trigger', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginalb0ea2143cc3fb05f3a225189451ce926 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb0ea2143cc3fb05f3a225189451ce926 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.bell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::bell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb0ea2143cc3fb05f3a225189451ce926)): ?>
<?php $attributes = $__attributesOriginalb0ea2143cc3fb05f3a225189451ce926; ?>
<?php unset($__attributesOriginalb0ea2143cc3fb05f3a225189451ce926); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb0ea2143cc3fb05f3a225189451ce926)): ?>
<?php $component = $__componentOriginalb0ea2143cc3fb05f3a225189451ce926; ?>
<?php unset($__componentOriginalb0ea2143cc3fb05f3a225189451ce926); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
    <?php if (isset($component)) { $__componentOriginalb1f3b4b5c6291b7a6c73e0a2532236fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1f3b4b5c6291b7a6c73e0a2532236fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.dropmenu-item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::dropmenu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginal52e9ac57da4d5b885edbde6e81bcb2e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52e9ac57da4d5b885edbde6e81bcb2e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.list-view','data' => ['transparent' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::list-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['transparent' => 'true']); ?>

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
                <?php if (isset($component)) { $__componentOriginal0ad07d55369c3f142811e8f2e87d048d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ad07d55369c3f142811e8f2e87d048d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.avatar','data' => ['size' => 'small','image' => ''.e(asset('assets/photos/avatar.jpg')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'small','image' => ''.e(asset('assets/photos/avatar.jpg')).'']); ?>
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
                <div class="mx-1 pt-1">
                    <div class="text-sm">
                        <span class="font-medium text-slate-900">
                            Michael
                        </span>
                        assigned <a href="#">a task</a> to you
                        <div class="text-xs">3 hours ago</div>
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
<?php if (isset($__attributesOriginalb1f3b4b5c6291b7a6c73e0a2532236fd)): ?>
<?php $attributes = $__attributesOriginalb1f3b4b5c6291b7a6c73e0a2532236fd; ?>
<?php unset($__attributesOriginalb1f3b4b5c6291b7a6c73e0a2532236fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1f3b4b5c6291b7a6c73e0a2532236fd)): ?>
<?php $component = $__componentOriginalb1f3b4b5c6291b7a6c73e0a2532236fd; ?>
<?php unset($__componentOriginalb1f3b4b5c6291b7a6c73e0a2532236fd); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0d286332d7c052588567c9c0851b512)): ?>
<?php $attributes = $__attributesOriginala0d286332d7c052588567c9c0851b512; ?>
<?php unset($__attributesOriginala0d286332d7c052588567c9c0851b512); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0d286332d7c052588567c9c0851b512)): ?>
<?php $component = $__componentOriginala0d286332d7c052588567c9c0851b512; ?>
<?php unset($__componentOriginala0d286332d7c052588567c9c0851b512); ?>
<?php endif; ?><?php /**PATH /var/www/html/Assignment2/resources/views/shared/notification.blade.php ENDPATH**/ ?>