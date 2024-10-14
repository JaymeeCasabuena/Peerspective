<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => uniqid('bw-dropmenu-'),
    'trigger' => config('bladewind.dropmenu.trigger', 'ellipsis-horizontal-icon'),
    'trigger_css' => '',
    'trigger_on' => config('bladewind.dropmenu.trigger_on', 'click'),
    'divided' => config('bladewind.dropmenu.divided', false),
    'scrollable' => false,
    'height' => 200,
    'hide_after_click' => true,
    'position' => 'right',
    'class' => '',
    'modular' => false, // append type="module" to script tags
    'pickerColour' => 'pink',
    'icon_right' => config('bladewind.dropmenu.icon_right', false),
    'padded' => config('bladewind.dropmenu.padded', true),
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
    'name' => uniqid('bw-dropmenu-'),
    'trigger' => config('bladewind.dropmenu.trigger', 'ellipsis-horizontal-icon'),
    'trigger_css' => '',
    'trigger_on' => config('bladewind.dropmenu.trigger_on', 'click'),
    'divided' => config('bladewind.dropmenu.divided', false),
    'scrollable' => false,
    'height' => 200,
    'hide_after_click' => true,
    'position' => 'right',
    'class' => '',
    'modular' => false, // append type="module" to script tags
    'pickerColour' => 'pink',
    'icon_right' => config('bladewind.dropmenu.icon_right', false),
    'padded' => config('bladewind.dropmenu.padded', true),
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
    $height = !is_numeric($height) ? 200 : $height;
    $trigger_on = (!in_array($trigger_on, ['click', 'mouseover'])) ? 'click' : $trigger_on;
    $divided = filter_var($divided, FILTER_VALIDATE_BOOLEAN);
    $padded = filter_var($padded, FILTER_VALIDATE_BOOLEAN);
    $scrollable = filter_var($scrollable, FILTER_VALIDATE_BOOLEAN);
    $hide_after_click = filter_var($hide_after_click, FILTER_VALIDATE_BOOLEAN);
    $icon_right = filter_var($icon_right, FILTER_VALIDATE_BOOLEAN);

    // TODO: Remove in 3.0.0 when Php < 8 support is dropped
    if (!function_exists('str_ends_with')) {
      function str_ends_with($str, $end): bool {
        return (@substr_compare($str, $end, -strlen($end))==0);
      }
    }
?>
<div class="relative inline-block text-left bw-dropmenu !z-20 <?php echo e($name); ?>" tabindex="0">
    <div class="bw-trigger cursor-pointer inline-block">
        <?php if(str_ends_with($trigger, '-icon')): ?>
            <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => ''.e(trim(str_replace('-icon','', $trigger))).'','class' => 'h-6 w-6 text-gray-500 transition duration-150 ease-in-out z-10 '.e($trigger_css).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e(trim(str_replace('-icon','', $trigger))).'','class' => 'h-6 w-6 text-gray-500 transition duration-150 ease-in-out z-10 '.e($trigger_css).'']); ?>
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
        <?php else: ?>
            <?php echo $trigger; ?>

        <?php endif; ?>
    </div>
    <div class="opacity-0 hidden bw-dropmenu-items !z-20 animate__animated animate__fadeIn animate__faster"
         data-open="0">
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'absolute bg-white dark:bg-dark-700 mt-1 rounded-md',
                'border border-transparent dark:border-dark-800/20 bw-items-list ring-1 ring-slate-800 ring-opacity-5',
                'shadow-sm shadow-slate-200/50 dark:shadow-dark-800/70 whitespace-nowrap',
                '-right-1' => ($position=='right'),
                'p-2' => $padded,
                'p-0' => !$padded,
                'divide-y divide-slate-100 dark:divide-dark-600/90' => $divided,
                "$class"
                ]); ?>"
             <?php if($scrollable): ?>style="height: <?php echo e($height); ?>px;overflow-y: scroll"<?php endif; ?>>
            <?php echo e($slot); ?>

        </div>
    </div>
</div>

<script>
    <?php include_once(public_path('vendor/bladewind/js/dropmenu.js')); ?>
</script>
<script <?php if($modular): ?> type="module" <?php endif; ?>>
    const <?php echo e($name); ?> = new BladewindDropmenu('<?php echo e($name); ?>', {
        triggerOn: '<?php echo e($trigger_on); ?>',
        hideAfterClick: '<?php echo e($hide_after_click); ?>'
    });
</script>
<?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/dropmenu.blade.php ENDPATH**/ ?>