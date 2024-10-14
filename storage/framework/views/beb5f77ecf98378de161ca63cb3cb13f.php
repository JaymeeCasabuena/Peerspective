<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    // determines which icon to display. Name must match the exact name defined on 
    // https://heroicons.com
    'name' => '',
    // available values are solid and outline. Determines the weight of the icon
    'type' => config('bladewind.icon.type', 'outline'),
    // css classes to append to the svg file
    'class' => '',
    // specify directory to load icons from
    'dir' => config('bladewind.icon.dir', ''),
    // javascript to execute on click
    // this was introduced to allow show/hide password feature in the Input component
    'action' => null,
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
    // determines which icon to display. Name must match the exact name defined on 
    // https://heroicons.com
    'name' => '',
    // available values are solid and outline. Determines the weight of the icon
    'type' => config('bladewind.icon.type', 'outline'),
    // css classes to append to the svg file
    'class' => '',
    // specify directory to load icons from
    'dir' => config('bladewind.icon.dir', ''),
    // javascript to execute on click
    // this was introduced to allow show/hide password feature in the Input component
    'action' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
    $path = 'vendor/bladewind/icons';
    $icons_dir = ($dir !== '') ? $dir : ((! in_array($type, [ 'outline', 'solid' ])) ? "$path/outline" : "$path/$type");
    $svg_file = file_exists(realpath("$icons_dir/$name.svg")) ? realpath("$icons_dir/$name.svg") : null;
?>
<?php if(!empty($name)): ?>
    <?php if(!empty($action)): ?>
        <a onclick="<?php echo $action; ?>" class="cursor-pointer"> <?php endif; ?>
            <?php if(substr($name, 0,4) === '<svg'): ?>
                
                <?php echo $name; ?>

            <?php elseif($svg_file): ?>
                <?php echo str_replace('<svg', '<svg class="size-6 inline-block '.$class.'"', file_get_contents($svg_file)); ?>

            <?php endif; ?>
            <?php if(!empty($action)): ?> </a>
    <?php endif; ?>
<?php endif; ?><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/icon.blade.php ENDPATH**/ ?>