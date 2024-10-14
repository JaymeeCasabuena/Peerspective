<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'image' => config('bladewind.empty_state.image', '/vendor/bladewind/images/empty-state.svg'),
    'heading' => '',
    'button_label' => '', // button will not be displayed if no text is passed
    'buttonLabel' => '',
    'message' => '',   // message to display
    // true or false. set to false if you want to fully control the content
    'show_image' => config('bladewind.empty_state.show_image', true),
    'showImage' => config('bladewind.empty_state.show_image', true),
    'onclick' => '',
    'class' => '',
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
    'image' => config('bladewind.empty_state.image', '/vendor/bladewind/images/empty-state.svg'),
    'heading' => '',
    'button_label' => '', // button will not be displayed if no text is passed
    'buttonLabel' => '',
    'message' => '',   // message to display
    // true or false. set to false if you want to fully control the content
    'show_image' => config('bladewind.empty_state.show_image', true),
    'showImage' => config('bladewind.empty_state.show_image', true),
    'onclick' => '',
    'class' => '',
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
    $show_image = filter_var($show_image, FILTER_VALIDATE_BOOLEAN);
    $showImage = filter_var($showImage, FILTER_VALIDATE_BOOLEAN);
    if ($buttonLabel !== $button_label) $button_label = $buttonLabel;
    if (! $showImage) $show_image = $showImage;
?>
<div class="text-center px-4 pb-10 bw-empty-state <?php echo e($class); ?>">
    <?php if($show_image == 'true'): ?>
        <img src="<?php echo e($image); ?>" class="h-52 mx-auto mb-6"/>
    <?php endif; ?>
    <?php if($heading != ''): ?>
        <div class="text-slate-700 dark:text-dark-400 text-2xl pt-4 pb-3 px-4 font-light"><?php echo $heading; ?></div>
    <?php endif; ?>
    <?php if($message != ''): ?>
        <div class="text-slate-600/70 dark:text-dark-500 px-6"><?php echo $message; ?></div>
    <?php endif; ?>
    <div class="pt-2 dark:text-dark-400"><?php echo $slot; ?></div>
    <?php if($button_label != ''): ?>
        <?php if (isset($component)) { $__componentOriginal3608e16198bf00bb6a87433895e7f5e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3608e16198bf00bb6a87433895e7f5e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.button.index','data' => ['onclick' => ''.$onclick.'','class' => 'block mx-auto my-4','size' => 'small']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => ''.$onclick.'','class' => 'block mx-auto my-4','size' => 'small']); ?><?php echo e($button_label); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3608e16198bf00bb6a87433895e7f5e9)): ?>
<?php $attributes = $__attributesOriginal3608e16198bf00bb6a87433895e7f5e9; ?>
<?php unset($__attributesOriginal3608e16198bf00bb6a87433895e7f5e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3608e16198bf00bb6a87433895e7f5e9)): ?>
<?php $component = $__componentOriginal3608e16198bf00bb6a87433895e7f5e9; ?>
<?php unset($__componentOriginal3608e16198bf00bb6a87433895e7f5e9); ?>
<?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/empty-state.blade.php ENDPATH**/ ?>