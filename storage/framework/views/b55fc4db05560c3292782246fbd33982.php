<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'class' => '',
    'icon' => '',
    'dir' => config('bladewind.dropmenu.item.dir', ''),
    'icon_css' => '',
    'divider' => false,
    'header' => false,
    'hover' => config('bladewind.dropmenu.item.hover', true),
    'divided' => config('bladewind.dropmenu.item.divided', false),
    'padded' => config('bladewind.dropmenu.item.padded', true),
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
    'class' => '',
    'icon' => '',
    'dir' => config('bladewind.dropmenu.item.dir', ''),
    'icon_css' => '',
    'divider' => false,
    'header' => false,
    'hover' => config('bladewind.dropmenu.item.hover', true),
    'divided' => config('bladewind.dropmenu.item.divided', false),
    'padded' => config('bladewind.dropmenu.item.padded', true),
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php foreach (([
    'iconRight' => config('bladewind.dropmenu.item.icon_right', false),
]) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php
    $divider = filter_var($divider, FILTER_VALIDATE_BOOLEAN);
    $divided = filter_var($divided, FILTER_VALIDATE_BOOLEAN);
    $header = filter_var($header, FILTER_VALIDATE_BOOLEAN);
    $hover = filter_var($hover, FILTER_VALIDATE_BOOLEAN);
    $padded = filter_var($padded, FILTER_VALIDATE_BOOLEAN);
    $iconRight = filter_var($iconRight, FILTER_VALIDATE_BOOLEAN);
    $icon_css .= ($iconRight) ? ' !ml-2 !-mr-1' : ' !mr-2 -ml-0.5 ';
?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'flex align-middle text-gray-600 cursor-pointer dark:text-dark-300 w-full text-sm !text-left bw-item '.$class,
        '!border-0' => ($divided && $header),
        'border-y border-t-slate-200/75 border-b-white dark:!border-t-gray-800/40 dark:border-b-gray-100/10 my-1' => ($divider && !$header && !$divided),
        'hidden' => ($divider && !$header && $divided),
        'py-2 px-2.5' => (!$divider && $padded),
        'p-0' => (!$divider && !$padded),
        'flex-row-reverse justify-between' => ($iconRight && !empty($icon)),
        'hover:rounded-md hover:dark:text-dark-100 hover:bg-slate-200/75 hover:dark:!bg-dark-800' => (!$header && $hover),
        '!cursor-default border-b border-b-slate-200/75  dark:!border-b-gray-100/10 mb-1' => $header,
]); ?>" <?php echo e($attributes->merge(['data-item' => "true"])); ?>>
    <?php if(!empty($icon) && !$header): ?>
        <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => ''.$icon.'','dir' => $dir,'class' => '!size-4 !mt-0.5 !text-gray-400 dark:!text-dark-500  '.e($icon_css).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.$icon.'','dir' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($dir),'class' => '!size-4 !mt-0.5 !text-gray-400 dark:!text-dark-500  '.e($icon_css).'']); ?>
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
    <?php endif; ?>
    <?php echo $slot; ?>

</div><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/dropmenu-item.blade.php ENDPATH**/ ?>