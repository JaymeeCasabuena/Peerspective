<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'transparent' => false,
    'compact' => config('bladewind.list_view.compact', false),
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
    'transparent' => false,
    'compact' => config('bladewind.list_view.compact', false),
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
    $transparent = filter_var($transparent, FILTER_VALIDATE_BOOLEAN);
    $compact = filter_var($compact, FILTER_VALIDATE_BOOLEAN);
?>
<ul role="list"
    class="<?php if(!$transparent): ?>bg-white dark:bg-transparent <?php endif; ?> divide-y divide-slate-100 dark:divide-dark-600/50 rounded-tl-lg rounded-tr-lg rounded-br-lg rounded-bl-lg <?php echo e($class); ?>">
    <?php echo e($slot); ?>

</ul><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/list-view.blade.php ENDPATH**/ ?>