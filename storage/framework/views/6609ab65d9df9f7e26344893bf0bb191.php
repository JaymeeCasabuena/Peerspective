<button class="d-flex" type="button" data-bs-toggle="modal"
    data-bs-target="#importModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0z"/>
                </svg>
                Import
</button>

<div class="modal fade" data-bs-backdrop="static" id="importModal" tabindex="-1"
    aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="header fw-semibold text-uppercase" id="addAssessmentModalLabel">
                    Import Course Data
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo e(route('import')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <p class="text-list">Choose csv file</p>
                    <?php if (isset($component)) { $__componentOriginal040edb5af60f55e81db33bcd15518a2f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal040edb5af60f55e81db33bcd15518a2f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.filepicker','data' => ['name' => 'import_csv','placeholder' => 'Upload csv file','maxFileSize' => '1','acceptedFileTypes' => '.csv']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::filepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'import_csv','placeholder' => 'Upload csv file','max_file_size' => '1','accepted_file_types' => '.csv']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal040edb5af60f55e81db33bcd15518a2f)): ?>
<?php $attributes = $__attributesOriginal040edb5af60f55e81db33bcd15518a2f; ?>
<?php unset($__attributesOriginal040edb5af60f55e81db33bcd15518a2f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal040edb5af60f55e81db33bcd15518a2f)): ?>
<?php $component = $__componentOriginal040edb5af60f55e81db33bcd15518a2f; ?>
<?php unset($__componentOriginal040edb5af60f55e81db33bcd15518a2f); ?>
<?php endif; ?>
                    <?php $__errorArgs = ['import'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <button type="submit" class="btn btn-warning subtext rounded-5 w-full mt-4">
                        Import CSV
                </button>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/Assignment2/resources/views/shared/import-modal.blade.php ENDPATH**/ ?>