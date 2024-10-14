<?php $__env->startSection('title'); ?>
Auth
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row align-items-center justify-content-between bg-body-tertiary">
        <!-- Small Banner Section -->
        <div class="d-md-none col-sm-12">
            <img src="<?php echo e(asset('assets/photos/small_banner.png')); ?>" alt="Banner Image">
        </div>

        <!-- Form Section -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-column align-items-start">
                <h1 class="auth-header fw-bold mx-md-5 px-md-5 mb-4 mt-4 mt-md-0">Sign up</h1>

                <form method="POST" action="<?php echo e(route('register')); ?>" class="signup-form ms-md-5 px-md-5">
                    <?php echo csrf_field(); ?>

                    <!-- Full Name -->
                    <div class="mb-1">
                        <?php if (isset($component)) { $__componentOriginal399ab5ed63addab89395df8c37031002 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ab5ed63addab89395df8c37031002 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.input','data' => ['name' => 'name','required' => 'true','placeholder' => 'John T. Doe','prefix' => 'user','prefixIsIcon' => 'true','value' => old('name'),'autofocus' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name','required' => 'true','placeholder' => 'John T. Doe','prefix' => 'user','prefix_is_icon' => 'true','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('name')),'autofocus' => true]); ?>
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
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <!-- Email Address -->
                    <div class="mb-1">
                        <?php if (isset($component)) { $__componentOriginal399ab5ed63addab89395df8c37031002 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ab5ed63addab89395df8c37031002 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.input','data' => ['name' => 'email','required' => 'true','placeholder' => 'johndoe@griffithuni.edu.au','prefix' => 'envelope','prefixIsIcon' => 'true','value' => old('email')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email','required' => 'true','placeholder' => 'johndoe@griffithuni.edu.au','prefix' => 'envelope','prefix_is_icon' => 'true','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email'))]); ?>
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
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <!-- sNumber and Password Inputs in a Row -->
                    <div class="d-flex gap-3">
                        <!-- sNumber Input -->
                        <?php if (isset($component)) { $__componentOriginal399ab5ed63addab89395df8c37031002 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ab5ed63addab89395df8c37031002 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.input','data' => ['name' => 'sNumber','required' => 'true','placeholder' => 'sNumber','value' => old('sNumber'),'autofocus' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'sNumber','required' => 'true','placeholder' => 'sNumber','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('sNumber')),'autofocus' => true]); ?>
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

                        <!-- Password Input -->
                        <?php if (isset($component)) { $__componentOriginal399ab5ed63addab89395df8c37031002 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ab5ed63addab89395df8c37031002 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.input','data' => ['name' => 'password','required' => 'true','type' => 'password','placeholder' => 'Password','prefix' => 'key','prefixIsIcon' => 'true','prefixIconCss' => 'text-orange-500','viewable' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'password','required' => 'true','type' => 'password','placeholder' => 'Password','prefix' => 'key','prefix_is_icon' => 'true','prefix_icon_css' => 'text-orange-500','viewable' => 'true']); ?>
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
                    <div class="d-flex gap-3">
                        <?php $__errorArgs = ['sNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger mb-4"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger mb-4"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <?php if (isset($component)) { $__componentOriginal399ab5ed63addab89395df8c37031002 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal399ab5ed63addab89395df8c37031002 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.input','data' => ['name' => 'password_confirmation','required' => 'true','type' => 'password','placeholder' => 'Confirm Password','prefix' => 'key','prefixIsIcon' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'password_confirmation','required' => 'true','type' => 'password','placeholder' => 'Confirm Password','prefix' => 'key','prefix_is_icon' => 'true']); ?>
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
                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Sign Up Button -->
                    <div class="mb-3 mt-5">
                        <button type="submit" value="Submit" class="btn w-100 text-uppercase">Sign up</button>
                    </div>

                    <!-- Already Registered Link -->
                    <div class="d-flex gap-3 mt-5 flex-row justify-content-start">
                        <p class="text-muted mt-5">Already have an account?</p>
                        <a href="<?php echo e(route('login')); ?>" class="mt-5 text-primary-emphasis text-decoration-none">Login</a>
                    </div>

                </form>
            </div>
        </div>

        <!-- Big Banner Section -->
        <div class="col-lg-6 col-md-6 d-none d-md-block p-0">
            <img src="<?php echo e(asset('assets/photos/banner2.png')); ?>" alt="Banner Image">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaymee\Documents\Peerspective\resources\views/auth/register.blade.php ENDPATH**/ ?>