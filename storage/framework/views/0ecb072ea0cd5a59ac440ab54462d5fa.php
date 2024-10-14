<?php
    /*
   |----------------------------------------------------------------------------
   | ALERT COMPONENT (https://bladewindui.com/component/alert
   |----------------------------------------------------------------------------
   |
   | Display inline alerts in four prebuilt colours and additional colours.
   | You can dismiss the alerts and display icons or avatars in the alert.
   |
    * */
?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
   // error, warning, success, info
   'type' => 'info',
   // shades of the alert faint, dark
   'shade' => config('bladewind.alert.shade', 'faint'),
   // should the alert type icon be shown
   'show_icon' => config('bladewind.alert.show_icon', true),
   // for backward compatibility with laravel 8
   'showIcon'  => config('bladewind.alert.show_icon', true),
   // should the close icon be shown?
   'show_close_icon' => true,
   // for backward compatibility with laravel 8
   'showCloseIcon' => true,
   // additional css classes to add
   'class' => '',
   // additional colors to display
   'color' => config('bladewind.alert.color', null),
   // any Heroicons icon to use
   'icon' => '',
   // additional css to apply to $icon
   'icon_avatar_css' => '',
   // use avatar in place of an icon
   'avatar' => '',
   // size of the avatar
   // available sizes are: tiny | small | medium | regular | big | huge | omg
   'size' => config('bladewind.alert.size', 'tiny'),
   // display a ring around the avatar
   'show_ring' => config('bladewind.alert.show_ring', false),
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
   // error, warning, success, info
   'type' => 'info',
   // shades of the alert faint, dark
   'shade' => config('bladewind.alert.shade', 'faint'),
   // should the alert type icon be shown
   'show_icon' => config('bladewind.alert.show_icon', true),
   // for backward compatibility with laravel 8
   'showIcon'  => config('bladewind.alert.show_icon', true),
   // should the close icon be shown?
   'show_close_icon' => true,
   // for backward compatibility with laravel 8
   'showCloseIcon' => true,
   // additional css classes to add
   'class' => '',
   // additional colors to display
   'color' => config('bladewind.alert.color', null),
   // any Heroicons icon to use
   'icon' => '',
   // additional css to apply to $icon
   'icon_avatar_css' => '',
   // use avatar in place of an icon
   'avatar' => '',
   // size of the avatar
   // available sizes are: tiny | small | medium | regular | big | huge | omg
   'size' => config('bladewind.alert.size', 'tiny'),
   // display a ring around the avatar
   'show_ring' => config('bladewind.alert.show_ring', false),
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
    $show_icon = filter_var($show_icon, FILTER_VALIDATE_BOOLEAN);
    $showIcon = filter_var($showIcon, FILTER_VALIDATE_BOOLEAN);
    $show_close_icon = filter_var($show_close_icon, FILTER_VALIDATE_BOOLEAN);
    $showCloseIcon = filter_var($showCloseIcon, FILTER_VALIDATE_BOOLEAN);

    if(!$showIcon) $show_icon = $showIcon;
    if(!$showCloseIcon) $show_close_icon = $showCloseIcon;
    $close_icon_css =  ($shade == 'dark') ?
        (($color =='transparent') ? 'text-slate-400 hover:text-slate-700 dark:text-slate-200' :
        'text-slate-100 hover:text-slate-500')  : 'text-slate-500 dark:text-slate-200';
    $type = (!empty($color)) ? $color : $type;

    // get colours that match the various types
   $alternate_colour = function() use ($type, $shade) {
      switch ($type){
          case 'warning': return "yellow"; break;
          case 'error': return "red"; break;
          case 'success': return "green"; break;
          case 'info': return "blue"; break;
      }
    };
    $alternate_colour = $alternate_colour();
    $presets = (in_array($type, ['error','warning', 'info', 'success'])) ? [
        'faint' => " bg-$alternate_colour-200/80 text-$alternate_colour-600",
        'dark' => "bg-$alternate_colour-500 text-white",
        'icon' => [ 'faint' => "text-$alternate_colour-600", 'dark' => "!text-$alternate_colour-50" ]
    ] : [   // not error, warning, info, success
        'faint' => "bg-$type-200/80 text-$type-600",
        'dark' => "bg-$type-500 text-$type-50",
        'icon' => [ 'faint' => "text-$type-600", 'dark' => "!text-$type-50" ]
    ];
    $colours = [
        'faint' => ($type=='transparent') ?
            "bg-transparent border border-slate-300/80 dark:border-slate-600 text-slate-600 dark:text-dark-400" :
            $presets['faint'],
        'dark' => ($type=='transparent') ?
            "bg-transparent border border-slate-400 dark:border-slate-500 text-slate-600 dark:text-dark-400" :
            $presets['dark'],
        'icon' => [
            'faint' => ($type=='transparent') ? "text-slate-400" : $presets['icon']['faint'],
            'dark' => ($type=='transparent') ? "text-slate-400" : $presets['icon']['dark'],
        ]
    ];
?>

<div class="w-full bw-alert animate__animated animate__fadeIn rounded-md flex p-3  <?php echo e($colours[$shade]); ?> <?php echo e($class); ?>">
    <?php if($show_icon): ?>
        <div class="pt-[1px]">
            <?php if($icon !== ''): ?>
                <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => $icon,'class' => '-mt-1 '.e($icon_avatar_css).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => '-mt-1 '.e($icon_avatar_css).'']); ?>
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
            <?php elseif($avatar !== ''): ?>
                <?php if (isset($component)) { $__componentOriginal0ad07d55369c3f142811e8f2e87d048d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ad07d55369c3f142811e8f2e87d048d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.avatar','data' => ['image' => $avatar,'showRing' => $show_ring,'size' => $size,'class' => ''.e($icon_avatar_css).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($avatar),'show_ring' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($show_ring),'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($size),'class' => ''.e($icon_avatar_css).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ad07d55369c3f142811e8f2e87d048d)): ?>
<?php $attributes = $__attributesOriginal0ad07d55369c3f142811e8f2e87d048d; ?>
<?php unset($__attributesOriginal0ad07d55369c3f142811e8f2e87d048d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ad07d55369c3f142811e8f2e87d048d)): ?>
<?php $component = $__componentOriginal0ad07d55369c3f142811e8f2e87d048d; ?>
<?php unset($__componentOriginal0ad07d55369c3f142811e8f2e87d048d); ?>
<?php endif; ?>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginaldd9042d600e0aeb384f3deebb44f611b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd9042d600e0aeb384f3deebb44f611b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.modal-icon','data' => ['type' => ''.e($type).'','class' => '-mt-1 '.e($colours['icon'][$shade] ??'').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::modal-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => ''.e($type).'','class' => '-mt-1 '.e($colours['icon'][$shade] ??'').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd9042d600e0aeb384f3deebb44f611b)): ?>
<?php $attributes = $__attributesOriginaldd9042d600e0aeb384f3deebb44f611b; ?>
<?php unset($__attributesOriginaldd9042d600e0aeb384f3deebb44f611b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd9042d600e0aeb384f3deebb44f611b)): ?>
<?php $component = $__componentOriginaldd9042d600e0aeb384f3deebb44f611b; ?>
<?php unset($__componentOriginaldd9042d600e0aeb384f3deebb44f611b); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="grow pl-2 pr-5"><?php echo e($slot); ?></div>
    <?php if($show_close_icon): ?>
        <div class="text-right" onclick="this.parentElement.style.display='none'">
            <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'x-mark','class' => 'size-[18px] p-[3px] stroke-2 cursor-pointer '.e($close_icon_css).' bg-white/20 hover:bg-white/60 rounded-full hover:text-slate-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'x-mark','class' => 'size-[18px] p-[3px] stroke-2 cursor-pointer '.e($close_icon_css).' bg-white/20 hover:bg-white/60 rounded-full hover:text-slate-600']); ?>
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
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/alert.blade.php ENDPATH**/ ?>