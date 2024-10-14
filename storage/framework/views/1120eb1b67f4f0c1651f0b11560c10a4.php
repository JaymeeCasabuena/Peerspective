<button type="button" class="btn btn-warning subtext rounded-5 px-4 ms-3" data-bs-toggle="modal"
    data-bs-target="#addAssessmentModal">
    <?php if(isset($assessment)): ?> Edit Assessment <?php else: ?> Add New Assessment <?php endif; ?>
</button>

<div class="modal fade" data-bs-backdrop="static" id="addAssessmentModal" tabindex="-1"
    aria-labelledby="addAssessmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="header fw-semibold text-uppercase" id="addAssessmentModalLabel">
                    <?php if(isset($assessment)): ?> Edit Assessment <?php else: ?> Add New Assessment <?php endif; ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post"
                    action="<?php echo e(isset($assessment) ? route('assessment.update', ['courseCode' => $assessment->course_code, 'assessmentId' => $assessment->id]) : route('assessment.store', ['courseCode' => $courseCode])); ?>"
                    x-data="{ assessmentType: '<?php echo e(old('type', $assessment->type ?? '')); ?>' }">
                    <?php echo csrf_field(); ?>
                    <p class="text-list">Assessment Title</p>
                    <input name="title" placeholder="Write title here"
                        value="<?php echo e(old('title', $assessment->title ?? '')); ?>"
                        class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600 mb-3" />
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <p class="text-list">Assessment Instruction</p>
                    <textarea class="form-control mb-3" name="instructions"><?php echo e(old('instructions', $assessment->instructions ?? '')); ?>

                    </textarea>
                    <?php $__errorArgs = ['instructions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <p class="text-list">Assessment Type</p>
                    <select name="type" x-model="assessmentType"
                        class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600 mb-3">
                        <option value="" disabled>Select type</option>
                        <option value="student-select" <?php echo e(old('type', $assessment->type ?? '') == 'student-select' ? 'selected' : ''); ?>>Student Select</option>
                        <option value="teacher-assign" <?php echo e(old('type', $assessment->type ?? '') == 'teacher-assign' ? 'selected' : ''); ?>>Teacher Assign</option>
                    </select>
                    <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div x-show="assessmentType === 'student-select'" class="mt-3 mb-3">
                        <p class="text-list">Number of Required Reviews</p>
                        <input numeric="true" placeholder="Required Reviews" name="required_reviews"
                            value="<?php echo e(old('required_reviews', $assessment->required_reviews ?? '')); ?>"
                            class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600" />
                    </div>
                    <?php $__errorArgs = ['required_reviews'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <p class="text-list mt-3">Maximum Score</p>
                    <input numeric="true" placeholder="Max Score" name="maxscore"
                        value="<?php echo e(old('maxscore', $assessment->maxscore ?? '')); ?>"
                        class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600 mb-3" />
                    <?php $__errorArgs = ['maxscore'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <p class="text-list">Due Date</p>
                    <input type="datetime-local" name="due_date"
                        value="<?php echo e(old('due_date', isset($assessment) ? date('Y-m-d\TH:i', strtotime($assessment->due_date)) : '')); ?>"
                        class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600 mt-3">
                    <?php $__errorArgs = ['due_date'];
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
                        <?php if(isset($assessment)): ?> Update Assessment <?php else: ?> Add Assessment <?php endif; ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/Assignment2/resources/views/course-details/add-assessment-form.blade.php ENDPATH**/ ?>