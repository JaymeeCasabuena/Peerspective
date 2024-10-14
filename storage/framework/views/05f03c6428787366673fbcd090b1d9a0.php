<div class="px-5">
<?php if (isset($component)) { $__componentOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25f1fcadeccc75098fc7111d3ba6ebfe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.card','data' => ['title' => 'Nothing here']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Nothing here']); ?>
        <br />
        <?php if (isset($component)) { $__componentOriginalf281e3dc0c95fa53b3a01b5aa409f51b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf281e3dc0c95fa53b3a01b5aa409f51b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.empty-state','data' => ['image' => ''.e(asset('assets/photos/no_activity.svg')).'','message' => 'Your courses and todo list will take shape as
                        <br/> soon as you finalize your enrolment']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => ''.e(asset('assets/photos/no_activity.svg')).'','message' => 'Your courses and todo list will take shape as
                        <br/> soon as you finalize your enrolment']); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf281e3dc0c95fa53b3a01b5aa409f51b)): ?>
<?php $attributes = $__attributesOriginalf281e3dc0c95fa53b3a01b5aa409f51b; ?>
<?php unset($__attributesOriginalf281e3dc0c95fa53b3a01b5aa409f51b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf281e3dc0c95fa53b3a01b5aa409f51b)): ?>
<?php $component = $__componentOriginalf281e3dc0c95fa53b3a01b5aa409f51b; ?>
<?php unset($__componentOriginalf281e3dc0c95fa53b3a01b5aa409f51b); ?>
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
</div><?php /**PATH /var/www/html/Assignment2/resources/views/shared/empty.blade.php ENDPATH**/ ?>