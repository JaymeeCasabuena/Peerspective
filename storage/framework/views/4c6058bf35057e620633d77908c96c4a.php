<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    // name of the input field for use in passing form submission data
    // this is prefixed with bw- when used as a class name
    'name' => 'bw-filepicker',
    // the default text to display in the file picker
    'placeholder' => 'Select a file',
    // by default all file audo, video, image and pdf file types can be selected
    // either restrict or allow more file types by modifying this value
    'accepted_file_types' => config('bladewind.filepicker.accepted_file_types', 'audio/*,video/*,image/*, .pdf'),
    'acceptedFileTypes' => config('bladewind.filepicker.accepted_file_types', 'audio/*,video/*,image/*, .pdf'),
    // should the user be forced to select a file. used in conjunction with validation scripts
    // default is false.
    'required' => false,
    // maximum allowed filezie in MB
    'max_file_size' => config('bladewind.filepicker.max_file_size', 5),
    'maxFileSize'   => config('bladewind.filepicker.max_file_size', 5),
    // adds margin after the input box
    'add_clearing' => config('bladewind.filepicker.max_file_size', true),
    'addClearing' => config('bladewind.filepicker.max_file_size', true),
    // display a selected value by default
    'selected_value' => '',
    'selectedValue' => '',
    // the css to apply to the selected value
    'selected_value_class' => config('bladewind.filepicker.selected_value_class', 'h-52'),
    'selectedValueClass' => config('bladewind.filepicker.selected_value_class', 'h-52'),
    // file to display in edit mode
    'url' => '',
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
    // name of the input field for use in passing form submission data
    // this is prefixed with bw- when used as a class name
    'name' => 'bw-filepicker',
    // the default text to display in the file picker
    'placeholder' => 'Select a file',
    // by default all file audo, video, image and pdf file types can be selected
    // either restrict or allow more file types by modifying this value
    'accepted_file_types' => config('bladewind.filepicker.accepted_file_types', 'audio/*,video/*,image/*, .pdf'),
    'acceptedFileTypes' => config('bladewind.filepicker.accepted_file_types', 'audio/*,video/*,image/*, .pdf'),
    // should the user be forced to select a file. used in conjunction with validation scripts
    // default is false.
    'required' => false,
    // maximum allowed filezie in MB
    'max_file_size' => config('bladewind.filepicker.max_file_size', 5),
    'maxFileSize'   => config('bladewind.filepicker.max_file_size', 5),
    // adds margin after the input box
    'add_clearing' => config('bladewind.filepicker.max_file_size', true),
    'addClearing' => config('bladewind.filepicker.max_file_size', true),
    // display a selected value by default
    'selected_value' => '',
    'selectedValue' => '',
    // the css to apply to the selected value
    'selected_value_class' => config('bladewind.filepicker.selected_value_class', 'h-52'),
    'selectedValueClass' => config('bladewind.filepicker.selected_value_class', 'h-52'),
    // file to display in edit mode
    'url' => '',
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
    $required = filter_var($required, FILTER_VALIDATE_BOOLEAN);
    $add_clearing = filter_var($add_clearing, FILTER_VALIDATE_BOOLEAN);
    $addClearing = filter_var($addClearing, FILTER_VALIDATE_BOOLEAN);
    if (!$addClearing) $add_clearing = $addClearing;
    if ($acceptedFileTypes !== $accepted_file_types) $accepted_file_types = $acceptedFileTypes;
    if ($selectedValue !== $selected_value) $selected_value = $selectedValue;
    if ($selectedValueClass !== $selected_value_class) $selected_value_class = $selectedValueClass;
    if ($maxFileSize !== $max_file_size) $max_file_size = $maxFileSize;
    if (! is_numeric($max_file_size)) $max_file_size = 5;
    $image_file_types = [ "png", "jpg", "jpeg", "gif", "svg" ];
?>
<div class="border-gray-500"></div>
<div class="relative px-2 py-3 border-2 border-dotted border-gray-300 hover:border-gray-400 dark:text-dark-300 dark:border-dark-600
    dark:bg-transparent hover:dark:border-dark-500 text-center cursor-pointer rounded-md bw-fp-<?php echo e($name); ?> <?php if($add_clearing): ?> mb-3 <?php endif; ?>">
    <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'document-text','class' => 'h-6 w-6 absolute z-20 left-4 rtl:!right-4 rtl:!left-[unset] text-gray-300 dark:text-dark-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'document-text','class' => 'h-6 w-6 absolute z-20 left-4 rtl:!right-4 rtl:!left-[unset] text-gray-300 dark:text-dark-500']); ?>
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
    <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'x-circle','class' => 'absolute right-3 rtl:!left-3 rtl:!right-[unset] h-8 w-8 text-gray-600 hover:text-gray-700 clear cursor-pointer hidden','type' => 'solid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'x-circle','class' => 'absolute right-3 rtl:!left-3 rtl:!right-[unset] h-8 w-8 text-gray-600 hover:text-gray-700 clear cursor-pointer hidden','type' => 'solid']); ?>
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
    <span class="text-gray-400/80 px-6 pl-10 zoom-out inline-block selection">
        <?php echo e($placeholder); ?>

        <?php if($required): ?>
            <span class="text-red-300">*</span>
        <?php endif; ?>
    </span>
    <div class="w-0 h-0 overflow-hidden">
        <input
                type="file"
                name="<?php echo e($name); ?>"
                class="bw-<?php echo e($name); ?> <?php if($required): ?> required <?php endif; ?>"
                id="bw_<?php echo e($name); ?>"
                accept="<?php echo e($accepted_file_types); ?>"/>
        <textarea class="b64-<?php echo e($name); ?><?php if($required): ?> required <?php endif; ?>" name="b64_<?php echo e($name); ?>"></textarea>
        <?php if(!empty($selected_value)): ?>
            <input type="hidden" class="selected_<?php echo e($name); ?>" name="selected_<?php echo e($name); ?>" value="<?php echo e($selected_value); ?>"/>
        <?php endif; ?>
    </div>
</div>

<script>
    dom_el('.bw-fp-<?php echo e($name); ?>').addEventListener('drop', function (evt) {
        changeCss('.bw-fp-<?php echo e($name); ?>', 'border-gray-500', 'remove');
        changeCss('.bw-fp-<?php echo e($name); ?>', 'border-gray-300');
        evt.preventDefault();
        dom_el('.bw-<?php echo e($name); ?>').click();
    });

    dom_el('.bw-fp-<?php echo e($name); ?>').addEventListener('click', function () {
        dom_el('.bw-<?php echo e($name); ?>').click();
    });

    dom_el('.bw-<?php echo e($name); ?>').addEventListener('change', function () {
        let selection = this.value;
        if (selection !== '') {
            const [file] = this.files

            if (file) {
                if (allowedFileSize(file.size, <?php echo e($max_file_size); ?>)) {
                    dom_el('.bw-fp-<?php echo e($name); ?> .selection').innerHTML =
                        (file.type.indexOf('image') !== -1) ? '<img src="' + URL.createObjectURL(file) + '" class="rounded-md" />' : file.name;
                    convertToBase64(file, '.b64-<?php echo e($name); ?>');
                } else {
                    dom_el('.bw-fp-<?php echo e($name); ?> .selection').innerHTML = '<span class="text-red-500">File must be <?php echo e($max_file_size); ?>mb or below</span>';
                }
            }
            changeCss('.bw-fp-<?php echo e($name); ?> .clear', 'hidden', 'remove');
        }
    });

    dom_el('.bw-fp-<?php echo e($name); ?> .clear').addEventListener('click', function (e) {
        dom_el('.bw-fp-<?php echo e($name); ?> .selection').innerHTML = '<?php echo e($placeholder); ?>';
        dom_el('.bw-<?php echo e($name); ?>').value = dom_el('.b64-<?php echo e($name); ?>').value = '';
        changeCss('.bw-fp-<?php echo e($name); ?> .clear', 'hidden');
        e.stopImmediatePropagation();
    });

    <?php if(!empty($url)): ?>
            <?php if(in_array(pathinfo($url, PATHINFO_EXTENSION), $image_file_types)): ?>
        file = '<img src="<?php echo e($url); ?>" alt="<?php echo e($url); ?>" class="rounded-md <?php echo e($selected_value_class); ?>" />';
    <?php else: ?>
        file = '<?php echo e(($selected_value != '') ? $selected_value : $url); ?>';
    <?php endif; ?>
    dom_el('.bw-fp-<?php echo e($name); ?> .selection').innerHTML = file;
    changeCss('.bw-fp-<?php echo e($name); ?> .clear', 'hidden', 'remove');
    <?php endif; ?>

</script><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/filepicker.blade.php ENDPATH**/ ?>