<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'value' => 'value',
    'label' => 'label',
    'selected' => 'false',
    'flag' => '',
    'image' => '',
    'filter_by' => '',
    'selectable' => 'true',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'value' => 'value',
    'label' => 'label',
    'selected' => 'false',
    'flag' => '',
    'image' => '',
    'filter_by' => '',
    'selectable' => 'true',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php foreach (([ 'onselect' => '', ]) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php
    $selected = filter_var($selected, FILTER_VALIDATE_BOOLEAN);
    $selectable = filter_var($selectable, FILTER_VALIDATE_BOOLEAN);
    $label = html_entity_decode($label);
?>
<div
        class="py-3 pl-4 pr-3 flex items-center text-base cursor-pointer bw-select-item <?php if($selectable): ?> hover:bg-slate-100/90 dark:hover:bg-dark-800/50 dark:hover:text-dark-200 <?php else: ?> text-blue-900/40 <?php endif; ?>"
        data-label="<?php echo $label; ?>" data-value="<?php echo e($value); ?>"
        <?php if(!$selectable): ?> data-unselectable <?php endif; ?>
        <?php if(!empty($filter_by)): ?> data-filter-value="<?php echo e($filter_by); ?>" <?php endif; ?>
        <?php if($selected): ?> data-selected="true" <?php endif; ?>
        <?php if($onselect !== ''): ?> data-user-function="<?php echo e($onselect); ?>"<?php endif; ?>>
    <?php if($flag !== '' && $image == ''): ?>
        <i class="<?php echo e($flag); ?> flag"></i>
    <?php endif; ?>
    <?php if($image !== ''): ?>
        <?php if (isset($component)) { $__componentOriginal0ad07d55369c3f142811e8f2e87d048d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ad07d55369c3f142811e8f2e87d048d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.avatar','data' => ['size' => 'small','class' => '!mt-0 !mr-4','image' => ''.e($image).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'small','class' => '!mt-0 !mr-4','image' => ''.e($image).'']); ?>
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
    <?php endif; ?>
    <span class="grow text-left"><?php echo $label; ?></span>
    <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'check-circle','class' => 'text-slate-400 size-5 hidden svg-'.e($value).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'check-circle','class' => 'text-slate-400 size-5 hidden svg-'.e($value).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386)): ?>
<?php $attributes = $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386; ?>
<?php unset($__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9f835f724769f9dbaf9518fdb1e6386)): ?>
<?php $component = $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386; ?>
<?php unset($__componentOriginalf9f835f724769f9dbaf9518fdb1e6386); ?>
<?php endif; ?>
</div>
<?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/select-item.blade.php ENDPATH**/ ?>