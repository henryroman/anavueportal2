<?php if (isset($component)) { $__componentOriginald8bdefe537b868c30952851c478827a760077823 = $component; } ?>
<?php $component = App\View\Components\Layouts\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layouts\Base::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php
        $routeName = request()->route()->getName();
    ?>

    <?php if(in_array($routeName, [
        'dashboard', 'profile', 'profile-example', 'single-message', 'user-management', 'new-user', 'edit-user', 
        'new-role', 'edit-role', 'category-management', 'new-category', 'edit-category', 'tag-management', 'new-tag', 
        'edit-tag', 'item-management', 'new-item', 'edit-item', 'bootstrap-tables', 'transactions', 'buttons', 'forms', 
        'modals', 'notifications', 'typography', 'traffic-sources', 'app-analysis', 'tasks', 'calendar', 'map', 
        'datatables', 'bootstrap-tables', 'pricing', 'billing', 'invoice', 'widgets', 'security',])): ?>
        
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="content">
            
            <?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e($slot); ?>

            
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </main>
    <?php elseif(in_array($routeName, ['role-management'])): ?>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="content">
            <?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo e($slot); ?>

        </main>
    <?php elseif(in_array($routeName, ['404', '500', 'lock'])): ?>
        <?php echo e($slot); ?>

    <?php elseif(in_array($routeName, [
        'sign-up', 'sign-in', 'forgot-password', 'reset-password', 'reset-password-example', 'sign-in-example', 
        'sign-up-example', 'forgot-password-example', 'reset-password-example'])): ?>
        <?php echo e($slot); ?>

        
        <?php echo $__env->make('layouts.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <p>Route not handled: <?php echo e($routeName); ?></p>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8bdefe537b868c30952851c478827a760077823)): ?>
<?php $component = $__componentOriginald8bdefe537b868c30952851c478827a760077823; ?>
<?php unset($__componentOriginald8bdefe537b868c30952851c478827a760077823); ?>
<?php endif; ?>
<?php /**PATH C:\Users\augus\Documents\Anavue frontend\anavuePortal\dashboard\resources\views/layouts/app.blade.php ENDPATH**/ ?>