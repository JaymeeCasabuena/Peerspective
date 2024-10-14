<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => 'checkbox',
    'value' => null,
    'label' => null,
    'checked' => false,
    'disabled' => false,
    'type' => 'checkbox',
    'class' => 'rounded-md',
    'label_css' => 'mr-6',
    'labelCss' => '',
    'color' => config('bladewind.checkbox.color', 'primary'),
    'add_clearing' => config('bladewind.checkbox.add_clearing', true),
    'addClearing' => config('bladewind.checkbox.add_clearing', true),
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
    'name' => 'checkbox',
    'value' => null,
    'label' => null,
    'checked' => false,
    'disabled' => false,
    'type' => 'checkbox',
    'class' => 'rounded-md',
    'label_css' => 'mr-6',
    'labelCss' => '',
    'color' => config('bladewind.checkbox.color', 'primary'),
    'add_clearing' => config('bladewind.checkbox.add_clearing', true),
    'addClearing' => config('bladewind.checkbox.add_clearing', true),
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
    $name = preg_replace('/[\s-]/', '_', $name);
    $checked = filter_var($checked, FILTER_VALIDATE_BOOLEAN);
    $disabled = filter_var($disabled, FILTER_VALIDATE_BOOLEAN);
    $label_css = (!empty($labelCss)) ? $labelCss : $label_css;
    if(! in_array($color, ['primary','blue','red','yellow','green','orange','purple','cyan','pink', 'black', 'violet', 'indigo', 'fuchsia'])) {
        $color = 'primary';
    }
    $text_colour = ($color == 'black') ? 'text-black' : "text-{$color}-500 dark:bg-dark-800";
    $ring_colour = ($color == 'black') ? 'ring-black' : "ring-{$color}-500";
    $border_colour = ($color == 'black') ? 'border-slate-500/50' : "border-{$color}-500/50";
    $add_clearing = filter_var($add_clearing, FILTER_VALIDATE_BOOLEAN);
    $addClearing = filter_var($addClearing, FILTER_VALIDATE_BOOLEAN);
    if (!$addClearing) $add_clearing = $addClearing;
?>

<label class="inline-flex items-center cursor-pointer text-sm <?php if($disabled): ?> opacity-60 <?php endif; ?> <?php if($add_clearing): ?> mb-3 <?php endif; ?> <?php echo e($label_css); ?>">
    <input
            type="<?php echo e($type); ?>"
            name="<?php echo e($name); ?>"
            class="<?php echo e($text_colour); ?> size-6 mr-2 rtl:ml-2 disabled:opacity-50 focus:<?php echo e($ring_colour); ?> border-2 <?php echo e($border_colour); ?> focus:ring-opacity-25 bw-checkbox <?php echo e($class); ?>"
            <?php if($disabled): ?> disabled <?php endif; ?>
            <?php if($checked): ?> checked <?php endif; ?>
            value="<?php echo e($value); ?>"
    />
    <?php echo $label; ?>

</label>
<?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/checkbox.blade.php ENDPATH**/ ?>