<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    // title of the card
    'title' => null,
    // should the card be displayed with a shadow
    'has_shadow' => config('bladewind.card.has_shadow', true),
    // for backward compatibility with Laravel 8
    'hasShadow' => config('bladewind.card.has_shadow', true),
    // display a border around the card. useful on white backgrounds
    'has_border' => config('bladewind.card.has_border', true),
    // display a thicker shadow on hover
    'hover_effect' => config('bladewind.card.hover_effect', false),
    // reduce padding within the card
    'compact' => config('bladewind.card.compact', false),
    // TODO: deprecate this
    'reduce_padding' => config('bladewind.card.reduce_padding', false),
    // for backward compatibility with Laravel 8
    'reducePadding' => config('bladewind.card.reduce_padding', false),
    // content to display as card header
    'header' => null,
    // content to display as card footer
    'footer' => null,
    // additional css
    'class' => null,
    // the contact card uses this card component but needs to have a different class name
    'is_contact_card' => false,
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
    // title of the card
    'title' => null,
    // should the card be displayed with a shadow
    'has_shadow' => config('bladewind.card.has_shadow', true),
    // for backward compatibility with Laravel 8
    'hasShadow' => config('bladewind.card.has_shadow', true),
    // display a border around the card. useful on white backgrounds
    'has_border' => config('bladewind.card.has_border', true),
    // display a thicker shadow on hover
    'hover_effect' => config('bladewind.card.hover_effect', false),
    // reduce padding within the card
    'compact' => config('bladewind.card.compact', false),
    // TODO: deprecate this
    'reduce_padding' => config('bladewind.card.reduce_padding', false),
    // for backward compatibility with Laravel 8
    'reducePadding' => config('bladewind.card.reduce_padding', false),
    // content to display as card header
    'header' => null,
    // content to display as card footer
    'footer' => null,
    // additional css
    'class' => null,
    // the contact card uses this card component but needs to have a different class name
    'is_contact_card' => false,
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
    $compact = filter_var($compact, FILTER_VALIDATE_BOOLEAN);
    $has_shadow = filter_var($has_shadow, FILTER_VALIDATE_BOOLEAN);
    $hasShadow = filter_var($hasShadow, FILTER_VALIDATE_BOOLEAN);
    $reduce_padding = filter_var($reduce_padding, FILTER_VALIDATE_BOOLEAN);
    $reducePadding = filter_var($reducePadding, FILTER_VALIDATE_BOOLEAN);
    $hover_effect = filter_var($hover_effect, FILTER_VALIDATE_BOOLEAN);
    $has_border = filter_var($has_border, FILTER_VALIDATE_BOOLEAN);
    $is_contact_card = filter_var($is_contact_card, FILTER_VALIDATE_BOOLEAN);
    if ( !$hasShadow ) $has_shadow = $hasShadow;
    if ( $reducePadding ) {
        $reduce_padding = $reducePadding;
        $compact = $reduce_padding;
    }
    $class = "bg-white dark:bg-dark-800/30 rounded-lg $class";
    $contact_card_css =   ($is_contact_card) ? 'bw-contact-card' : 'bw-card';
    $has_border_css =   ($has_border) ? 'border border-slate-200 dark:border-dark-600/60 focus:outline-none' : '';
    $header_compact_css =   (!$header && ! $compact) ? 'p-8' : (($compact) ? 'p-4' : '');
    $shadow_css =   ($has_shadow) ? 'shadow-sm shadow-slate-200/50 dark:shadow-dark-800/70' : '';
    $hover_css =  ($hover_effect) ? 'hover:shadow-slate-400 hover:dark:shadow-dark-900 cursor-pointer' : '';
?>
<div <?php echo e($attributes->merge([ 'class' => "$class $contact_card_css $has_border_css $header_compact_css $shadow_css $hover_css"])); ?>>
    <?php if($header): ?>
        <div class="border-b border-gray-100/30 dark:border-dark-600/60">
            <?php echo e($header); ?>

        </div>
    <?php endif; ?>
    <?php if($title && ! $header): ?>
        <div class="uppercase tracking-wide text-xs text-gray-500/90 mb-2"><?php echo e($title); ?></div>
    <?php endif; ?>
    <div <?php if($title && ! $header): ?> class="mt-6" <?php endif; ?>>
        <?php echo e($slot); ?>

    </div>
    <?php if($footer): ?>
        <div class="border-t border-gray-100/30 dark:border-dark-600/60">
            <?php echo e($footer); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/card.blade.php ENDPATH**/ ?>