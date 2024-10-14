<div class="d-flex flex-row justify-content-end align-items-center mt-3">
    <div class="avatar d-flex flex-row align-items-center justify-content-start">
        <?php if (isset($component)) { $__componentOriginal0ad07d55369c3f142811e8f2e87d048d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ad07d55369c3f142811e8f2e87d048d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'bladewind::components.avatar','data' => ['dotted' => 'true','dotPosition' => 'top','dotColor' => 'green','image' => ''.e(asset('assets/photos/avatar.jpg')).'','size' => 'big']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bladewind::avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dotted' => 'true','dot_position' => 'top','dot_color' => 'green','image' => ''.e(asset('assets/photos/avatar.jpg')).'','size' => 'big']); ?>
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

        <div class="profile d-flex flex-column align-items-start justify-content-center m-2 me-5">
            <p class="fw-bold mb-0"><?php echo e(Auth::user()->name); ?></p>
            <p class="text-secondary mb-0"><?php echo e(Auth::user()->isInstructor ? 'Instructor' : 'Student'); ?></p>
        </div>
        <div><?php echo $__env->make('shared.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
    <div class="notification"></div>
</div>


<nav class="navbar d-md-none bg-body-tertiary fixed-top">
  <div class="container-fluid">
  <div class="logo fw-semibold text-uppercase p-3 mt-2">Peerspective</div>
    <button class="navbar-toggler me-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
      <div class="logo fw-semibold text-uppercase p-3 mt-2">Peerspective</div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <ul class="nav flex-column rounded-5 mt-3">
        <!-- Dashboard -->
        <li class="nav-item mb-2">
            <a href="<?php echo e(route('dashboard')); ?>"
                class="nav-link d-flex align-items-center p-4 <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-grid-fill" viewBox="0 0 16 16">
                    <path
                        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                </svg>
                Dashboard
            </a>
        </li>

        <!-- Courses -->
        <li class="nav-item mb-2">
            <a href="" class="nav-link d-flex align-items-center p-4 <?php echo e(request()->is('courses') ? 'active' : ''); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-stickies-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5" />
                    <path
                        d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177z" />
                </svg>
                Courses
            </a>
        </li>

        <?php if(Auth::user()->isInstructor): ?>
        <!-- import -->
        <li class="nav-item mb-2">
            <div class="nav-link d-flex align-items-center p-4">
                <?php echo $__env->make('shared.import-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </li>
        <?php endif; ?>
        
        <!-- Calendar -->
        <li class="nav-item mb-2">
            <a href="" class="nav-link d-flex align-items-center p-4 <?php echo e(request()->is('calendar') ? 'active' : ''); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5" />
                </svg>
                Calendar
            </a>
        </li>

        <!-- Inbox -->
        <li class="nav-item mb-2">
            <a href="" class="nav-link d-flex align-items-center p-4 <?php echo e(request()->is('inbox') ? 'active' : ''); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                    <path
                        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                </svg>
                Inbox
            </a>
        </li>

        <!-- Help -->
        <li class="nav-item mb-2">
            <a href="<?php echo e(route('help')); ?>" class="nav-link d-flex align-items-center p-4 <?php echo e(request()->is('help') ? 'active' : ''); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                </svg>
                Help
            </a>
        </li>

        <!-- Logout -->
        <li class="nav-item mb-2">
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="nav-link d-flex align-items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-door-open-fill" viewBox="0 0 16 16">
                        <path
                            d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15zM11 2h.5a.5.5 0 0 1 .5.5V15h-1zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                    </svg>
                    Logout
                </button>
            </form>
        </li>
    </ul>
      </div>
    </div>
  </div>
</nav><?php /**PATH C:\Users\Jaymee\Documents\Peerspective\resources\views/shared/nav.blade.php ENDPATH**/ ?>