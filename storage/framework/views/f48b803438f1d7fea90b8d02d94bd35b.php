<?php
    /*
    |----------------------------------------------------------------------------
    | AVATAR COMPONENT (https://bladewindui.com/component/avatar
    |----------------------------------------------------------------------------
    |
    | Display either a single avatar or a group of stacked avatars with the
    | option to display +xxx. Avatars can be displayed in different sizes and
    | have dot indicators that can be placed in two positions.
    |
     * */
?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'image' => null,
    'alt' => 'image',
    'class' => 'ltr:mr-2 rtl:ml-2 mt-2',
    'dot_position' => config('bladewind.avatar.dot_position', 'bottom'),
    'dot_color' => config('bladewind.avatar.dot_color', 'primary'),
    'dotted' => config('bladewind.avatar.dotted', false),
    'label' => null,
    'plus_action' => null,
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
    'image' => null,
    'alt' => 'image',
    'class' => 'ltr:mr-2 rtl:ml-2 mt-2',
    'dot_position' => config('bladewind.avatar.dot_position', 'bottom'),
    'dot_color' => config('bladewind.avatar.dot_color', 'primary'),
    'dotted' => config('bladewind.avatar.dotted', false),
    'label' => null,
    'plus_action' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php foreach (([
    // these attributes could be passed from the x-bladewind::avatars component also
    'dotted' => $dotted ?? false,
    'size' => config('bladewind.avatar.size', 'regular'),
    'stacked' => false,
    'show_ring' => true,
    'dot_position' => $dot_position ?? 'bottom',
    'dot_color' => $dot_color ?? 'green',
    'plus' => '',
]) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php
    $sizes = [
        'tiny' => [ 'size_css' => 'size-6', 'dot_css' => 'left-5', 'plus_text_size' => 'text-xs' ],
        'small' => [ 'size_css' => 'size-8', 'dot_css' => 'left-6', 'plus_text_size' => 'text-sm' ],
        'medium' => [ 'size_css' => 'size-10', 'dot_css' => 'left-8', 'plus_text_size' => 'text-base' ],
        'regular' => [ 'size_css' => 'size-12', 'dot_css' => 'left-[31px] rtl:right-[31px]', 'plus_text_size' => 'text-lg' ],
        'big' => [ 'size_css' => 'size-16', 'dot_css' => 'left-[46px] rtl:right-[46px]', 'plus_text_size' => 'text-xl tracking-tighter' ],
        'huge' => [ 'size_css' => 'size-20', 'dot_css' => 'left-[58px] rtl:right-[58px]', 'plus_text_size' => 'text-2xl' ],
        'omg' => [ 'size_css' => 'size-28', 'dot_css' => 'left-[79px] rtl:right-[79px]', 'plus_text_size' => 'text-3xl' ]
    ];

    $dotted = filter_var($dotted, FILTER_VALIDATE_BOOLEAN);
    $stacked = filter_var($stacked, FILTER_VALIDATE_BOOLEAN);
    $show_ring = filter_var($show_ring, FILTER_VALIDATE_BOOLEAN);
    $dot_position = (in_array($dot_position, ['top','bottom'])) ? $dot_position : 'bottom';
    $avatar = $image ?: asset('vendor/bladewind/images/avatar.png');
    $show_plus = (substr($avatar, 0, 1) == '+');
    $image_size = $sizes[$size]['size_css'];
    $plus_text_size = $sizes[$size]['plus_text_size'];
    $dot_position_css = $sizes[$size]['dot_css'];
    $stacked = (is_numeric($plus) && $plus > 0) ? true : $stacked;
    $stacked_css = ($stacked) ? 'mb-3 !-mr-3' : '';
    $label = (!empty($label)) ? substr($label, 0, 2) : $label;

    if(! in_array($dot_color, ['primary','blue','red','yellow','green','orange','purple','cyan','pink', 'black', 'violet', 'indigo', 'fuchsia'])) {
        $dot_color = 'primary';
    }

    if(!function_exists("urlExists")){
        function urlExists($url): bool
        {
            $headers = @get_headers($url);
            if(!$headers || $headers[0] == 'HTTP/1.1 404 Not Found') {
                return false;
            }
            return true;
        }
    }

    $use_label = (!urlExists($avatar) && $label);
    if($use_label) $avatar = $label;
?>

<div class="relative inline-block rounded-full bw-avatar <?php echo e($image_size); ?> <?php echo e($stacked_css); ?> <?php echo e($class); ?> <?php if($show_ring): ?> ring-2 ring-offset-2 ring-offset-white ring-gray-200/50 dark:ring-0 dark:ring-offset-dark-700/50  <?php endif; ?>">
    <?php if($show_plus || $use_label): ?>
        <div class="<?php echo e($image_size); ?> <?php echo e($plus_text_size); ?> absolute rounded-full flex items-center justify-center font-semibold bg-white dark:bg-dark-600 dark:text-dark-300 <?php if($show_plus && !empty($plus_action)): ?> plus-more cursor-pointer <?php endif; ?>"
             <?php if($show_plus && !empty($plus_action)): ?> onclick="<?php echo $plus_action; ?>" <?php endif; ?>>
            <?php echo e($avatar); ?>

        </div>
    <?php else: ?>
        <img class="<?php echo e($image_size); ?> absolute object-cover object-center rounded-full" src="<?php echo e($avatar); ?>"
             alt="<?php echo e($avatar); ?>"/>
    <?php endif; ?>
    <?php if($dotted && !$show_plus): ?>
        <span class="-<?php echo e($dot_position); ?>-1 <?php echo e($dot_position_css); ?> z-20 absolute w-3 h-3 bg-<?php echo e($dot_color); ?>-500 border-2 border-white dark:border-dark-800 rounded-full"></span>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Jaymee\Documents\Peerspective\vendor\mkocansey\bladewind\src/../resources/views/components/avatar.blade.php ENDPATH**/ ?>