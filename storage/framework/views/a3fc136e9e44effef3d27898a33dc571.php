<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'size'          => config('bladewind.bell.size', 'small'),
    'show_dot'      => config('bladewind.bell.show_dot', true),
    'showDot'       => config('bladewind.bell.show_dot', true),
    'animate_dot'   => config('bladewind.bell.animate_dot', false),
    'animateDot'    => config('bladewind.bell.animate_dot', false),
    'invert'        => false,
    'color'         => config('bladewind.bell.color', 'primary'),
    'sizing' => [
        'small' => [
            'bell' => 'size-6',
            'dot' => 'size-[9px]'
        ],
        'big' => [
            'bell' => '!size-10',
            'dot' => '!size-4'
        ],
    ],
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
    'size'          => config('bladewind.bell.size', 'small'),
    'show_dot'      => config('bladewind.bell.show_dot', true),
    'showDot'       => config('bladewind.bell.show_dot', true),
    'animate_dot'   => config('bladewind.bell.animate_dot', false),
    'animateDot'    => config('bladewind.bell.animate_dot', false),
    'invert'        => false,
    'color'         => config('bladewind.bell.color', 'primary'),
    'sizing' => [
        'small' => [
            'bell' => 'size-6',
            'dot' => 'size-[9px]'
        ],
        'big' => [
            'bell' => '!size-10',
            'dot' => '!size-4'
        ],
    ],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
    // reset variables for Laravel 8 support
    $show_dot = filter_var($show_dot, FILTER_VALIDATE_BOOLEAN);
    $showDot = filter_var($showDot, FILTER_VALIDATE_BOOLEAN);
    $animate_dot = filter_var($animate_dot, FILTER_VALIDATE_BOOLEAN);
    $animateDot = filter_var($animateDot, FILTER_VALIDATE_BOOLEAN);
    $invert = filter_var($invert, FILTER_VALIDATE_BOOLEAN);
    $invert_css = ($invert) ? '!text-white' : '';
    if( !$showDot ) $show_dot = $showDot;
    if( $animateDot ) $animate_dot = $animateDot;
    if(! in_array($size, ['small','big'])) {
        $size = 'small';
    }
    if(! in_array($color, ['primary','blue','red','yellow','green','orange','purple','cyan','pink', 'black', 'violet', 'indigo', 'fuchsia'])) {
        $color = 'primary';
    }
?>

<div <?php echo e($attributes->merge(['class' => "bw-bell relative inline-block"])); ?>>
    <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'bell','class' => ''.e($sizing[$size]['bell']).' cursor-pointer '.e($invert_css).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'bell','class' => ''.e($sizing[$size]['bell']).' cursor-pointer '.e($invert_css).'']); ?>
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
    <?php if($show_dot): ?>
        <div class="<?php echo e($sizing[$size]['dot']); ?> rounded-full bg-<?php echo e($color); ?>-500 absolute top-0 ltr:right-[2.5px] rtl:left-[2.5px] <?php if($animate_dot): ?> animate-ping <?php endif; ?>"></div>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/bell.blade.php ENDPATH**/ ?>