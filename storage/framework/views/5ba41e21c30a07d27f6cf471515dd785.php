<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    // name to uniquely identity a select
    'name' => 'bw-select',

    // the default text to display when the select shows
    'placeholder' => config('bladewind.select.placeholder', 'Select One'),
    'empty_placeholder' => config('bladewind.select.empty_placeholder', 'No options to select from'),
    'label' => config('bladewind.select.label', null),

    /**
     * Optional function to execute when a select item is selected.
     * By default, the value of a select item is written to an input field with the name dd_name.
     * Where name is the name you provided for the select. If you named your select <countries> for example,
     * whatever country is selected can be found in the <input type="hidden" clas="input-countries" name="dd_countries" />
     */
    'onselect' => '',

    /**
    * Data to pass to the select.
    * Your data must be a json string (not object) with the keys <value> and <label>
    * <value> is whatever value will be passed to your code when an item is selected
    * <label> is what will be displayed to the user
    * If you want to display icons for each item your json can contain the optional 'icon' key.
    * Where icons are required, they must be in the semantic UI icon format
    * [{"label":"Burkina Faso","icon":"bf flag","value":"+226"},{"label":"Ghana","icon":"gh flag","value":"+233"},{"label":"Ivory Coast","icon":"ivc flag","value":"+228"}]
 * */
    'data' => [],

    /**
     * What key in your data array should be used to populate 'value' of the select when an item is selected
     * By default, a key of 'value' is used. If your data is something like
     *  [ {"id": 1,"name": "Burkina Faso"} ], your value_key will be 'id'
    */
    'value_key' => 'value',
    'valueKey' => 'value',

    /**
     * What key in your data array should be used to display the labels the user will see as select items
     * The default key used for labels is 'label'. If your data is something like
     * [ {"id": 1,"name": "Burkina Faso"} ] your label_key will be 'name'
    */
    'label_key' => 'label',
    'labelKey' => 'label',

    /**
     * What key in your data array should be used to display flag icons next to the labels
     * [ {"id": 1, "name": "Burkina Faso", "flag": "/assets/images/bf-flag.png"} ] your flag_key will be 'flag'
     */
    'flag_key' => null,
    'flagKey' => null,

    /**
     * What key in your data array should be used to display images next to the labels
     * The default key used for images is '', meaning images will be ignored. If your data is something like
     * [ {"id":"1","name":"Burkina Faso", "image":"/assets/images/bf-flag.png"}] your image_key will be 'image'
    */
    'image_key' => null,
    'imageKey' => null,

    /**
     * There are instances when you want the name passed during form submission to be
     * different from the name you gave the component. Example. you may name the select as country but
     * want the data to be submitted as country_id.
    */
    'data_serialize_as' => '',
    'dataSerializeAs' => '',

    // enforces validation if set to true
    'required' => 'false',

    'disabled' => 'false',

    'readonly' => 'false',

    'multiple' => 'false',

    // adds margin after the input box
    'add_clearing' => config('bladewind.select.add_clearing', true),
    'addClearing' => config('bladewind.select.add_clearing', true),

    /**
     * Determines if a value passed in the data array should automatically be selected
     * Helpful when using the component in edit mode or as part of filter options
     * The value you specify should exist in your value_key. If your value_key is 'id', you
     * cannot set a selected_value of 'Burkina Faso'
    */
    'selected_value' => '',
    'selectedValue' => '',

    // setting this to true adds a search box above the select items
    // this can be used to filter the contents of the select items
    'searchable' => false,

    // specify the maximum number of items that can be selected
    'max_selectable' => -1,
    'maxSelectable' => -1,

    // error message to display when max_selectable is exceeded
    'max_error_message' => config('bladewind.select.max_error_message', 'Please select only %s items'),
    'maxErrorMessage' => config('bladewind.select.max_error_message', 'Please select only %s items'),

    'filter' => '',

    'filter_by' => '',

    // append type="module" to script tags
    'modular' => config('bladewind.select.modular', false),

    'size' => config('bladewind.select.size', 'medium'),

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
    // name to uniquely identity a select
    'name' => 'bw-select',

    // the default text to display when the select shows
    'placeholder' => config('bladewind.select.placeholder', 'Select One'),
    'empty_placeholder' => config('bladewind.select.empty_placeholder', 'No options to select from'),
    'label' => config('bladewind.select.label', null),

    /**
     * Optional function to execute when a select item is selected.
     * By default, the value of a select item is written to an input field with the name dd_name.
     * Where name is the name you provided for the select. If you named your select <countries> for example,
     * whatever country is selected can be found in the <input type="hidden" clas="input-countries" name="dd_countries" />
     */
    'onselect' => '',

    /**
    * Data to pass to the select.
    * Your data must be a json string (not object) with the keys <value> and <label>
    * <value> is whatever value will be passed to your code when an item is selected
    * <label> is what will be displayed to the user
    * If you want to display icons for each item your json can contain the optional 'icon' key.
    * Where icons are required, they must be in the semantic UI icon format
    * [{"label":"Burkina Faso","icon":"bf flag","value":"+226"},{"label":"Ghana","icon":"gh flag","value":"+233"},{"label":"Ivory Coast","icon":"ivc flag","value":"+228"}]
 * */
    'data' => [],

    /**
     * What key in your data array should be used to populate 'value' of the select when an item is selected
     * By default, a key of 'value' is used. If your data is something like
     *  [ {"id": 1,"name": "Burkina Faso"} ], your value_key will be 'id'
    */
    'value_key' => 'value',
    'valueKey' => 'value',

    /**
     * What key in your data array should be used to display the labels the user will see as select items
     * The default key used for labels is 'label'. If your data is something like
     * [ {"id": 1,"name": "Burkina Faso"} ] your label_key will be 'name'
    */
    'label_key' => 'label',
    'labelKey' => 'label',

    /**
     * What key in your data array should be used to display flag icons next to the labels
     * [ {"id": 1, "name": "Burkina Faso", "flag": "/assets/images/bf-flag.png"} ] your flag_key will be 'flag'
     */
    'flag_key' => null,
    'flagKey' => null,

    /**
     * What key in your data array should be used to display images next to the labels
     * The default key used for images is '', meaning images will be ignored. If your data is something like
     * [ {"id":"1","name":"Burkina Faso", "image":"/assets/images/bf-flag.png"}] your image_key will be 'image'
    */
    'image_key' => null,
    'imageKey' => null,

    /**
     * There are instances when you want the name passed during form submission to be
     * different from the name you gave the component. Example. you may name the select as country but
     * want the data to be submitted as country_id.
    */
    'data_serialize_as' => '',
    'dataSerializeAs' => '',

    // enforces validation if set to true
    'required' => 'false',

    'disabled' => 'false',

    'readonly' => 'false',

    'multiple' => 'false',

    // adds margin after the input box
    'add_clearing' => config('bladewind.select.add_clearing', true),
    'addClearing' => config('bladewind.select.add_clearing', true),

    /**
     * Determines if a value passed in the data array should automatically be selected
     * Helpful when using the component in edit mode or as part of filter options
     * The value you specify should exist in your value_key. If your value_key is 'id', you
     * cannot set a selected_value of 'Burkina Faso'
    */
    'selected_value' => '',
    'selectedValue' => '',

    // setting this to true adds a search box above the select items
    // this can be used to filter the contents of the select items
    'searchable' => false,

    // specify the maximum number of items that can be selected
    'max_selectable' => -1,
    'maxSelectable' => -1,

    // error message to display when max_selectable is exceeded
    'max_error_message' => config('bladewind.select.max_error_message', 'Please select only %s items'),
    'maxErrorMessage' => config('bladewind.select.max_error_message', 'Please select only %s items'),

    'filter' => '',

    'filter_by' => '',

    // append type="module" to script tags
    'modular' => config('bladewind.select.modular', false),

    'size' => config('bladewind.select.size', 'medium'),

]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
    $add_clearing = filter_var($add_clearing, FILTER_VALIDATE_BOOLEAN);
    $addClearing = filter_var($addClearing, FILTER_VALIDATE_BOOLEAN);
    $searchable = filter_var($searchable, FILTER_VALIDATE_BOOLEAN);
    $required = filter_var($required, FILTER_VALIDATE_BOOLEAN);
    $readonly = filter_var($readonly, FILTER_VALIDATE_BOOLEAN);
    $disabled = filter_var($disabled, FILTER_VALIDATE_BOOLEAN);
    $max_selectable = (int) $max_selectable;
    $maxSelectable = (int) $maxSelectable;

    if ($dataSerializeAs !== $data_serialize_as) $data_serialize_as = $dataSerializeAs;
    if ($selectedValue !== $selected_value) $selected_value = $selectedValue;
    if ($valueKey !== $value_key) $value_key = $valueKey;
    if ($labelKey !== $label_key) $label_key = $labelKey;
    if ($flagKey !== $flag_key) $flag_key = $flagKey;
    if ($imageKey !== $image_key) $image_key = $imageKey;
    if (!$add_clearing) $add_clearing = $addClearing;
    if ($maxSelectable !== $max_selectable) $max_selectable = $maxSelectable;
    $max_error_message = ($maxErrorMessage != $max_error_message) ? addslashes($maxErrorMessage) : addslashes($max_error_message);
    if($max_error_message == '') $max_error_message = 'Please select only %s items';

    $input_name = preg_replace('/[\s-]/', '_', $name);
    $filter = preg_replace('/[\s-]/', '_', $filter);
    $selected_value = ($selected_value != '') ? explode(',', str_replace(', ', ',', $selected_value)) : [];

    if ($data !== 'manual') {
        $data = (!is_array($data)) ? json_decode(str_replace('&quot;', '"', $data), true) : $data;
    }

    $size = (!in_array($size, ['small','medium', 'regular', 'big'])) ? 'medium' : $size;
    $sizes = [ 'small' => 'py-[6px]', 'medium' => 'py-[10px]', 'regular' => 'py-[6.5px]', 'big' => 'py-[18.5px]' ];
?>
<style xmlns:x-bladewind="http://www.w3.org/1999/html">
    .display-area::-webkit-scrollbar {
        display: none;
        width: 0 !important;
    }

    .display-area {
        scrollbar-width: none;
        -ms-overflow-style: none;
        scroll-behavior: smooth;
    }
</style>
<div class="relative bw-select bw-select-<?php echo e($input_name); ?> <?php if($add_clearing): ?> mb-3 <?php endif; ?>"
     role="combobox"
     data-multiple="<?php echo e($multiple); ?>" data-required="<?php echo e($required?'true':'false'); ?>"
     data-type="<?php echo e($data !== 'manual' ? 'dynamic' : 'manual'); ?>"
     <?php if(!empty($filter)): ?> data-filter="<?php echo e($filter); ?>" <?php endif; ?>
     <?php if($data == 'manual' && $selected_value != ''): ?> data-selected-value="<?php echo e(implode(',',$selected_value)); ?>" <?php endif; ?>>
    <div tabindex="0"
         class="flex justify-between text-sm items-center rounded-md bg-white text-slate-600 border-2 border-slate-300/50
         dark:text-dark-300 dark:border-dark-600 dark:bg-transparent <?php echo e($sizes[$size]); ?> pl-4 pr-2 clickable
         <?php if($disabled): ?> disabled <?php elseif($readonly): ?> readonly <?php else: ?> enabled <?php endif; ?>">
        <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'chevron-left','class' => '!-ml-3 hidden scroll-left']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'chevron-left','class' => '!-ml-3 hidden scroll-left']); ?>
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
        <div class="text-left placeholder grow-0 text-blue-900/40 dark:text-slate-500">
            <?php if(!empty($label)): ?>
                <span class="form-label !top-4"><?php echo e($label); ?>

                    <?php if($required): ?>
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
                    <?php endif; ?></span>
            <?php else: ?>
                <?php echo e($placeholder); ?>

                <?php if($required): ?>
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
            <?php endif; ?>
        </div>
        <div class="text-left grow display-area hidden whitespace-nowrap overflow-x-scroll p-0 m-0"></div>
        <div class="whitespace-nowrap inline-flex">
            <?php if (isset($component)) { $__componentOriginalf9f835f724769f9dbaf9518fdb1e6386 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9f835f724769f9dbaf9518fdb1e6386 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'chevron-right','class' => 'scroll-right !-mr-2 !mt-0.5 !w-5 !h-5 hidden']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'chevron-right','class' => 'scroll-right !-mr-2 !mt-0.5 !w-5 !h-5 hidden']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'x-circle','type' => 'solid','class' => 'hidden reset size-6 text-white fill-gray-400/70 hover:fill-gray-400 dark:fill-white/40 dark:hover:fill-white/60']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'x-circle','type' => 'solid','class' => 'hidden reset size-6 text-white fill-gray-400/70 hover:fill-gray-400 dark:fill-white/40 dark:hover:fill-white/60']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.icon','data' => ['name' => 'chevron-up-down','class' => 'opacity-40 !ml-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'chevron-up-down','class' => 'opacity-40 !ml-2']); ?>
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
    </div>
    <div class="w-full absolute z-30 rounded-br-lg rounded-bl-lg bg-white shadow-sm shadow-slate-400 dark:shadow-none border-2
        border-blue-400 dark:text-slate-300 dark:border-dark-600 dark:bg-dark-700 border-t-0 -mt-1.5
        hidden bw-select-items-container overflow-scroll max-h-64 animate__animated animate__fadeIn animate__faster">
        <div class="sticky top-0 min-w-full bg-slate-100 dark:bg-transparent py-1 pr-0 -pl-1 <?php if(!$searchable): ?> hidden <?php endif; ?>">
            <?php if (isset($component)) { $__componentOriginal399ab5ed63addab89395df8c37031002 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ab5ed63addab89395df8c37031002 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.input','data' => ['class' => '!border-0 !border-b !rounded-none focus:!border-slate-300 dark:focus:!border-slate-600 !w-full !text-sm bw_search','addClearing' => 'false','placeholder' => 'Type here...','suffix' => 'magnifying-glass','suffixIsIcon' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!border-0 !border-b !rounded-none focus:!border-slate-300 dark:focus:!border-slate-600 !w-full !text-sm bw_search','add_clearing' => 'false','placeholder' => 'Type here...','suffix' => 'magnifying-glass','suffix_is_icon' => 'true']); ?>
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
        </div>
        <div class="divide-y divide-slate-100 dark:divide-slate-600/70 bw-select-items mt-0">
            <?php if($data !== 'manual'): ?>
                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginal28cc348b856c96e6572e29d7222a4392 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28cc348b856c96e6572e29d7222a4392 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.select-item','data' => ['label' => ''.e($item[$label_key]).'','value' => ''.e($item[$value_key]).'','filterBy' => ''.e(($filter_by != '') ? $item[$filter_by] : '').'','onselect' => ''.e($onselect).'','flag' => ''.e($item[$flag_key] ?? '').'','image' => ''.e($item[$image_key] ?? '').'','selected' => ''.e((in_array($item[$value_key], $selected_value)) ? 'true' : 'false').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e($item[$label_key]).'','value' => ''.e($item[$value_key]).'','filter_by' => ''.e(($filter_by != '') ? $item[$filter_by] : '').'','onselect' => ''.e($onselect).'','flag' => ''.e($item[$flag_key] ?? '').'','image' => ''.e($item[$image_key] ?? '').'','selected' => ''.e((in_array($item[$value_key], $selected_value)) ? 'true' : 'false').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28cc348b856c96e6572e29d7222a4392)): ?>
<?php $attributes = $__attributesOriginal28cc348b856c96e6572e29d7222a4392; ?>
<?php unset($__attributesOriginal28cc348b856c96e6572e29d7222a4392); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28cc348b856c96e6572e29d7222a4392)): ?>
<?php $component = $__componentOriginal28cc348b856c96e6572e29d7222a4392; ?>
<?php unset($__componentOriginal28cc348b856c96e6572e29d7222a4392); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php if (isset($component)) { $__componentOriginal28cc348b856c96e6572e29d7222a4392 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28cc348b856c96e6572e29d7222a4392 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.select-item','data' => ['selectable' => false,'label' => $empty_placeholder]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['selectable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($empty_placeholder)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28cc348b856c96e6572e29d7222a4392)): ?>
<?php $attributes = $__attributesOriginal28cc348b856c96e6572e29d7222a4392; ?>
<?php unset($__attributesOriginal28cc348b856c96e6572e29d7222a4392); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28cc348b856c96e6572e29d7222a4392)): ?>
<?php $component = $__componentOriginal28cc348b856c96e6572e29d7222a4392; ?>
<?php unset($__componentOriginal28cc348b856c96e6572e29d7222a4392); ?>
<?php endif; ?>
                <?php endif; ?>
            <?php else: ?>
                <?php echo $slot; ?>

            <?php endif; ?>
        </div>
    </div>
    <input type="hidden" name="<?php echo e(($data_serialize_as !== '') ? $data_serialize_as : $input_name); ?>"
           class="bw-<?php echo e($input_name); ?> <?php if($required): ?> required <?php endif; ?>"
           <?php if($required): ?> data-parent="bw-select-<?php echo e($input_name); ?>" <?php endif; ?> />
</div>

<script>
    <?php include_once(public_path('vendor/bladewind/js/select.js')); ?>
</script>
<script <?php if($modular): ?> type="module" <?php endif; ?>>
    const bw_<?php echo e($input_name); ?> = new BladewindSelect('<?php echo e($input_name); ?>', '<?php echo e($placeholder); ?>');
    bw_<?php echo e($input_name); ?>.activate({disabled: '<?php echo e($disabled); ?>', readonly: '<?php echo e($readonly); ?>'});
    <?php if(!$disabled && !$readonly): ?>
    bw_<?php echo e($input_name); ?>.maxSelectable(<?php echo e($max_selectable); ?>, '<?php echo e(sprintf($max_error_message, $max_selectable)); ?>');
    <?php endif; ?>
    <?php if(!empty($filter)): ?> bw_<?php echo e($input_name); ?>.filter('<?php echo e($filter); ?>');
    <?php endif; ?> <?php if(!$required && $multiple == 'false'): ?> bw_<?php echo e($input_name); ?>.clearable();<?php endif; ?>
</script><?php /**PATH /var/www/html/Assignment2/vendor/mkocansey/bladewind/src/../resources/views/components/select.blade.php ENDPATH**/ ?>