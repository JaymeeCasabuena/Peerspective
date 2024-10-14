<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => 'rating',
    'rating' => 0,
    'size' => config('bladewind.rating.size', 'small'),
    'color' => 'orange',
    'onclick' => 'javascript:void(0)',
    'type' => config('bladewind.rating.type', 'star'),
    'clickable' => config('bladewind.rating.clickable', true),
    'sizing' => [
        'small' => 6,
        'medium' => 10,
        'big' => 14,
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
    'name' => 'rating',
    'rating' => 0,
    'size' => config('bladewind.rating.size', 'small'),
    'color' => 'orange',
    'onclick' => 'javascript:void(0)',
    'type' => config('bladewind.rating.type', 'star'),
    'clickable' => config('bladewind.rating.clickable', true),
    'sizing' => [
        'small' => 6,
        'medium' => 10,
        'big' => 14,
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
    $name = str_replace(' ', '-', $name); 
    $size_adjustment = ($size == 'big') ? 2 : 1;
    $clickable = filter_var($clickable, FILTER_VALIDATE_BOOLEAN);
?>
<?php if($clickable): ?>
    <?php if (isset($component)) { $__componentOriginal399ab5ed63addab89395df8c37031002 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ab5ed63addab89395df8c37031002 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.input','data' => ['type' => 'hidden','class' => 'rating-value-'.e($name).'','selectedValue' => ''.e($rating).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'hidden','class' => 'rating-value-'.e($name).'','selected_value' => ''.e($rating).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal399ab5ed63addab89395df8c37031002)): ?>
<?php $attributes = $__attributesOriginal399ab5ed63addab89395df8c37031002; ?>
<?php unset($__attributesOriginal399ab5ed63addab89395df8c37031002); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal399ab5ed63addab89395df8c37031002)): ?>
<?php $component = $__componentOriginal399ab5ed63addab89395df8c37031002; ?>
<?php unset($__componentOriginal399ab5ed63addab89395df8c37031002); ?>
<?php endif; ?>
<?php endif; ?>
<div class="h-<?php echo e($sizing[$size]+$size_adjustment); ?> overflow-hidden inline-block">
    <?php for($x = 1; $x < 6; $x++): ?>
        <div data-rating="<?php echo e($x); ?>"
             class="inline bw-rating-<?php echo e($x); ?> <?php echo e($name); ?><?php if($rating!= 0 && $x <= $rating*1): ?> rated <?php endif; ?>"
             <?php if($clickable): ?> onmouseover="flipStars('<?php echo e($name); ?>', <?php echo e($rating); ?>, <?php echo e($x); ?>, 'on')"
             onmouseout="flipStars('<?php echo e($name); ?>', <?php echo e($rating); ?>, <?php echo e($x); ?>, 'off')"
             onclick="setRating('<?php echo e($name); ?>', <?php echo e($x); ?>);<?php echo $onclick; ?>" <?php endif; ?>>
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-<?php echo e($sizing[$size]+$size_adjustment); ?> w-<?php echo e($sizing[$size]+$size_adjustment); ?> filled <?php if($rating==0 || $x > $rating*1): ?> hidden <?php endif; ?> inline text-<?php echo e($color); ?>-600 <?php if($clickable): ?> cursor-pointer <?php else: ?> cursor-default <?php endif; ?> <?php if($size=='big'): ?> mx-[-3px] <?php else: ?> mr-[-2px] <?php endif; ?> mt-[-1px]"
                 viewBox="0 0 20 20" fill="currentColor">
                <?php if($type == 'heart'): ?>
                    <path fill-rule="evenodd"
                          d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                          clip-rule="evenodd"/>
                <?php elseif($type=='thumbsup'): ?>
                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                <?php else: ?>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                <?php endif; ?>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-<?php echo e($sizing[$size]); ?> w-<?php echo e($sizing[$size]); ?> empty <?php if($x <= $rating*1): ?> hidden <?php endif; ?> inline text-<?php echo e($color); ?>-600 <?php if($clickable): ?> cursor-pointer <?php else: ?> cursor-default <?php endif; ?> !ml-[2px]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <?php if($type == 'heart'): ?>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                <?php elseif($type == 'thumbsup'): ?>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                <?php else: ?>
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                <?php endif; ?>
            </svg>
        </div>
    <?php endfor; ?>
</div>
<script>
    flipStars = function (name, rating, current, mode) {
        for (y = rating; y <= current; y++) {
            if (dom_el(`.bw-rating-${y}.${name}`)) {
                if (!dom_el(`.bw-rating-${y}.${name}`).classList.contains('rated')) {
                    if (mode == 'on') {
                        hide(`.bw-rating-${y}.${name} .empty`);
                        unhide(`.bw-rating-${y}.${name} .filled`);
                    } else {
                        unhide(`.bw-rating-${y}.${name} .empty`);
                        hide(`.bw-rating-${y}.${name} .filled`);
                    }
                }
            }
        }
    }

    setRating = function (name, rate) {
        changeCssForDomArray(`.${name}.rated`, 'rated', 'remove');
        if (rate < 5) {
            for (x = rate; x <= 6; x++) {
                unhide(`.bw-rating-${x}.${name} .empty`);
                hide(`.bw-rating-${x}.${name} .filled`);
            }
        }
        for (x = 1; x <= rate; x++) {
            unhide(`.bw-rating-${x}.${name} .filled`);
            hide(`.bw-rating-${x}.${name} .empty`);
            changeCss(`.bw-rating-${x}.${name}`, 'rated');
        }
        dom_el('.rating-value-<?php echo e($name); ?>').value = rate;
    }
</script><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/rating.blade.php ENDPATH**/ ?>