<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    // determines types of icon to display. Available options: info, success, error, warning, empty
    // only the empty type has no icon. useful if you want your modal to contain a form
    'type' => 'info',
    'class' => '',
    'icon' => '',
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
    // determines types of icon to display. Available options: info, success, error, warning, empty
    // only the empty type has no icon. useful if you want your modal to contain a form
    'type' => 'info',
    'class' => '',
    'icon' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
    $class = sprintf( 'modal-icon %s %s', $class, $type);
    $default_icons = [
        'success'   => 'check-circle',
        'error'     => 'hand-raised',
        'warning'   => 'exclamation-triangle',
        'info'      => 'information-circle'
    ];
?>
<?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => ''.e($icon ?: ($default_icons[$type]) ?? '').'','class' => ''.e($class).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e($icon ?: ($default_icons[$type]) ?? '').'','class' => ''.e($class).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386)): ?>
<?php $attributes = $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386; ?>
<?php unset($__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9f835f724769f9dbaf9518fdb1e6386)): ?>
<?php $component = $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386; ?>
<?php unset($__componentOriginalf9f835f724769f9dbaf9518fdb1e6386); ?>
<?php endif; ?><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/modal-icon.blade.php ENDPATH**/ ?>