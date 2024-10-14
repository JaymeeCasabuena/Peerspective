<?php use Illuminate\Support\Str; ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'transparent' => false,
    'percentage' => 0,
    'color' => 'primary',
    'show_percentage_label' => config('bladewind.progress_bar.show_percentage_label', false),
    'showPercentageLabel' => config('bladewind.progress_bar.show_percentage_label', false),
    'show_percentage_label_inline' => config('bladewind.progress_bar.show_percentage_label_inline', true),
    'showPercentageLabelInline' => config('bladewind.progress_bar.show_percentage_label_inline', true),
    'percentage_label_position' => 'top-left',
    'percentageLabelPosition' => 'top-left',
    'shade' => config('bladewind.progress_bar.shade', 'faint'),
    'text_color_weight' => [
        'faint' => 600,
        'dark' => 50,
    ],
    'percentage_prefix' => '',
    'percentagePrefix' => '',
    'percentage_suffix' => '',
    'percentageSuffix' => '',
    'class' => '',
    'css_override' => '',
    'bar_class' => '',
    'barClass' => '',
    'cssOverride' => '',
    'percentage_label_opacity' => config('bladewind.progress_bar.percentage_label_opacity', 100),
    'percentageLabelOpacity' => config('bladewind.progress_bar.percentage_label_opacity', 100),
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
    'transparent' => false,
    'percentage' => 0,
    'color' => 'primary',
    'show_percentage_label' => config('bladewind.progress_bar.show_percentage_label', false),
    'showPercentageLabel' => config('bladewind.progress_bar.show_percentage_label', false),
    'show_percentage_label_inline' => config('bladewind.progress_bar.show_percentage_label_inline', true),
    'showPercentageLabelInline' => config('bladewind.progress_bar.show_percentage_label_inline', true),
    'percentage_label_position' => 'top-left',
    'percentageLabelPosition' => 'top-left',
    'shade' => config('bladewind.progress_bar.shade', 'faint'),
    'text_color_weight' => [
        'faint' => 600,
        'dark' => 50,
    ],
    'percentage_prefix' => '',
    'percentagePrefix' => '',
    'percentage_suffix' => '',
    'percentageSuffix' => '',
    'class' => '',
    'css_override' => '',
    'bar_class' => '',
    'barClass' => '',
    'cssOverride' => '',
    'percentage_label_opacity' => config('bladewind.progress_bar.percentage_label_opacity', 100),
    'percentageLabelOpacity' => config('bladewind.progress_bar.percentage_label_opacity', 100),
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
    $show_percentage_label = filter_var($show_percentage_label, FILTER_VALIDATE_BOOLEAN);
    $showPercentageLabel = filter_var($showPercentageLabel, FILTER_VALIDATE_BOOLEAN);
    $show_percentage_label_inline = filter_var($show_percentage_label_inline, FILTER_VALIDATE_BOOLEAN);
    $showPercentageLabelInline = filter_var($showPercentageLabelInline, FILTER_VALIDATE_BOOLEAN);
    $transparent = filter_var($transparent, FILTER_VALIDATE_BOOLEAN);
    if ($showPercentageLabel) $show_percentage_label = $showPercentageLabel;
    if (!$showPercentageLabelInline) $show_percentage_label_inline = $showPercentageLabelInline;
    if ($percentageLabelPosition !== $percentage_label_position) $percentage_label_position = $percentageLabelPosition;
    if ($percentageLabelOpacity !== $percentage_label_opacity) $percentage_label_opacity = $percentageLabelOpacity;
    if ($percentagePrefix !== $percentage_prefix) $percentage_prefix = $percentagePrefix;
    if ($percentageSuffix !== $percentage_suffix) $percentage_suffix = $percentageSuffix;
    if ($cssOverride !== $css_override) $css_override = $cssOverride;
    if ($barClass !== $bar_class) $bar_class = $barClass;
    $bar_color = ($shade == 'dark') ? "bg-$color-500" : "bg-$color-300";
    //-----------------------------------------------------------------------

    if(! is_numeric($percentage_label_opacity*1)) $percentage_label_opacity = '100';
    $color = (!in_array($color, ['primary', 'red', 'yellow', 'green', 'blue', 'pink', 'cyan', 'gray', 'purple', 'orange', 'violet', 'fuchsia', 'indigo'])) ? 'primary' : $color;
    $percentage_label_position = str_replace(' ', '_', $percentage_label_position);
?>

<div class="bw-progress-bar <?php echo e($class); ?>">
    <?php if($show_percentage_label &&
        !$show_percentage_label_inline &&
        Str::contains($percentage_label_position, 'top')): ?>
        <div class="text-xs tracking-wider <?php echo e(str_replace('top-','text-', $percentage_label_position)); ?>">
            <?php echo e($percentage_prefix); ?> <span
                    class="opacity-<?php echo e($percentage_label_opacity); ?>"><?php echo e($percentage); ?>%</span> <?php echo e($percentage_suffix); ?>

        </div>
    <?php endif; ?>
    <div class="<?php if(!$transparent): ?> bg-slate-200/70 dark:bg-dark-800/70 w-full <?php endif; ?> mt-1 my-2 rounded-full">
        <div style="width: <?php echo e($percentage); ?>%"
             class="text-center py-1 <?php echo e($bar_color); ?> <?php echo e($css_override); ?> rounded-full bar-width animate__animated animate__fadeIn <?php echo e($bar_class); ?>">
            <?php if($show_percentage_label && $show_percentage_label_inline): ?>
                <span class="text-<?php echo e($color); ?>-<?php echo e($text_color_weight[$shade]); ?> dark:text-dark-600 px-2 text-xs">
            <?php echo e($percentage_prefix); ?> <span class="opacity-<?php echo e($percentage_label_opacity); ?>"><?php echo e($percentage); ?>%</span> <?php echo e($percentage_suffix); ?>

            </span>
            <?php endif; ?>
        </div>
    </div>
    <?php if($show_percentage_label &&
        !$show_percentage_label_inline &&
        Str::contains($percentage_label_position, 'bottom')): ?>
        <div class="text-xs tracking-wider <?php echo e(str_replace('bottom-','text-', $percentage_label_position)); ?>">
            <?php echo e($percentage_prefix); ?> <span
                    class="opacity-<?php echo e($percentage_label_opacity); ?>"><?php echo e($percentage); ?>%</span> <?php echo e($percentage_suffix); ?>

        </div>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/progress-bar.blade.php ENDPATH**/ ?>