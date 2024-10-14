<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    // name of the input field for use in forms
    'name' => 'textarea-'.uniqid(),
    'rows' => config('bladewind.textarea.rows', 3),
    'label' => '',
    'required' => false,
    'add_clearing' => config('bladewind.textarea.add_clearing', true),
    'addClearing' => config('bladewind.textarea.add_clearing', true),
    'placeholder' => '', // placeholder text
    'selected_value' => '', // selected value
    'selectedValue' => '',
     // message to display when validation fails for this field
    // this is just attached to the input field as a data attribute
    'error_message' => '',
    'errorMessage' => '',
    // this is an easy way to pass a translatable heading to the notification component
    // since it is triggered from Javascript, it is hard to translate any text from within js
    'error_heading' => config('bladewind.textarea.error_heading', 'Error'),
    'errorHeading' => config('bladewind.textarea.error_heading', 'Error'),
    // how should error messages be displayed for this input
    // by default error messages are displayed in the Bladewind notification component
    // the component should exist on the page
    'show_error_inline' => config('bladewind.textarea.show_error_inline', false),
    'showErrorInline' => config('bladewind.textarea.show_error_inline', false),

    'toolbar' => config('bladewind.textarea.toolbar', false),
    'except' => '',
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
    // name of the input field for use in forms
    'name' => 'textarea-'.uniqid(),
    'rows' => config('bladewind.textarea.rows', 3),
    'label' => '',
    'required' => false,
    'add_clearing' => config('bladewind.textarea.add_clearing', true),
    'addClearing' => config('bladewind.textarea.add_clearing', true),
    'placeholder' => '', // placeholder text
    'selected_value' => '', // selected value
    'selectedValue' => '',
     // message to display when validation fails for this field
    // this is just attached to the input field as a data attribute
    'error_message' => '',
    'errorMessage' => '',
    // this is an easy way to pass a translatable heading to the notification component
    // since it is triggered from Javascript, it is hard to translate any text from within js
    'error_heading' => config('bladewind.textarea.error_heading', 'Error'),
    'errorHeading' => config('bladewind.textarea.error_heading', 'Error'),
    // how should error messages be displayed for this input
    // by default error messages are displayed in the Bladewind notification component
    // the component should exist on the page
    'show_error_inline' => config('bladewind.textarea.show_error_inline', false),
    'showErrorInline' => config('bladewind.textarea.show_error_inline', false),

    'toolbar' => config('bladewind.textarea.toolbar', false),
    'except' => '',
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
    $add_clearing = filter_var($add_clearing, FILTER_VALIDATE_BOOLEAN);
    $addClearing = filter_var($addClearing, FILTER_VALIDATE_BOOLEAN);
    $show_error_inline = filter_var($show_error_inline, FILTER_VALIDATE_BOOLEAN);
    $showErrorInline = filter_var($showErrorInline, FILTER_VALIDATE_BOOLEAN);
    $required = filter_var($required, FILTER_VALIDATE_BOOLEAN);

    if (!$addClearing) $add_clearing = $addClearing;
    if($showErrorInline) $show_error_inline = $showErrorInline;
    if ($selectedValue !== $selected_value) $selected_value = $selectedValue;
    if ($errorMessage !== $error_message) $error_message = $errorMessage;
    if ($errorHeading !== $error_heading) $error_heading = $errorHeading;
    //----------------------------------------------------
    
    $name = preg_replace('/[\s-]/', '_', $name);
    $required_symbol = ($label == '' && $required) ? ' *' : '';
    $is_required = ($required) ? 'required' : '';
    $placeholder_color = ($label !== '') ? 'placeholder-transparent dark:placeholder-transparent' : '';
?>
<div class="relative w-full <?php if($add_clearing): ?> mb-3 <?php endif; ?>">
    <?php if($toolbar): ?>
        <div id="<?php echo e($name); ?>"><?php echo e($selected_value); ?></div>
        <textarea hidden name="<?php echo e($name); ?>" id="<?php echo e($name); ?>-hidden" class="size-0"></textarea>
    <?php else: ?>
        <textarea <?php echo e($attributes->merge(['class' => "bw-input peer $is_required $name $placeholder_color"])); ?>

                  id="<?php echo e($name); ?>"
                  name="<?php echo e($name); ?>"
                  rows="<?php echo e($rows); ?>"
                  <?php if($error_message !== ''): ?>
                      data-error-message="<?php echo e($error_message); ?>"
                  data-error-inline="<?php echo e($show_error_inline); ?>"
                  data-error-heading="<?php echo e($error_heading); ?>"
                  <?php endif; ?>
                  placeholder="<?php echo e(($label !== '') ? $label : $placeholder); ?><?php echo e($required_symbol); ?>"><?php echo e($selected_value); ?></textarea>
    <?php endif; ?>
    <?php if($error_message !== ''): ?>
        <div class="text-red-500 text-xs pt-2 px-1 <?php echo e($name); ?>-inline-error hidden"><?php echo e($error_message); ?></div>
    <?php endif; ?>
    <?php if($label !== ''): ?>
        <label for="<?php echo e($name); ?>" class="form-label dark:peer-focus:pt-1"
               onclick="dom_el('.<?php echo e($name); ?>').focus()"><?php echo e($label); ?>

            <?php if($required == 'true'): ?>
                <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'star','class' => '!text-red-400 !w-2 !h-2 mt-[-2px]','type' => 'solid']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'star','class' => '!text-red-400 !w-2 !h-2 mt-[-2px]','type' => 'solid']); ?>
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
            <?php endif; ?>
        </label>
    <?php endif; ?>
</div>
<?php if($toolbar): ?>
    <?php if (! $__env->hasRenderedOnce('6e0e8ad6-c848-4c41-b03f-761cec199fed')): $__env->markAsRenderedOnce('6e0e8ad6-c848-4c41-b03f-761cec199fed'); ?>
        
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet"/>
        <script>
            const toolbarOptions = ['bold', 'italic', 'underline',
                {'align': []},
                {'indent': '-1'}, {'indent': '+1'}, 'link',
                {'color': []}, {'background': []},
                {'list': 'ordered'}, {'list': 'bullet'},
                {'list': 'check'}, 'image', 'blockquote', 'code-block', 'clean'
            ];

            const modifyToolbarOptions = (toolbarOptions, except) => {
                except = except.replaceAll(' ', '');
                const exceptArray = except.split(',').map(item => item.trim());
                return toolbarOptions.filter(option => {
                    if (typeof option === 'string') {
                        return !exceptArray.includes(option);
                    } else if (typeof option === 'object') {
                        const key = Object.keys(option)[0];
                        return !exceptArray.includes(key);
                    }
                    return true;
                });
            }

            const quillOptions = {
                theme: 'snow',
                placeholder: '<?php echo e(($label !== '') ? $label : $placeholder); ?>',
                modules: {
                    toolbar: '',
                },
            };
        </script>
    <?php endif; ?>
    <script>
        if (typeof Quill === 'undefined') {
            console.log('Unable to load assets from https://quilljs.com');
        } else {
            quillOptions.modules.toolbar = modifyToolbarOptions(toolbarOptions, '<?php echo e($except); ?>');
            var quill_<?php echo e($name); ?> = new Quill('#<?php echo e($name); ?>', quillOptions);

            // Update the hidden input field whenever the textarea content changes
            quill_<?php echo e($name); ?>.on('text-change', function(delta, oldDelta, source) {
                var value = quill_<?php echo e($name); ?>.root.innerHTML;
                document.getElementById('<?php echo e($name); ?>-hidden').value = value;
            });
        }
    </script>
<?php endif; ?><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/textarea.blade.php ENDPATH**/ ?>