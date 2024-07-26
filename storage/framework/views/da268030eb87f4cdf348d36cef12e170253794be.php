<div>
    <title>Volt Laravel Dashboard - New Category</title>
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#"><?php echo e(__('Volt')); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Add category')); ?></li>
                    </ol>
                </nav>
                <h2 class="h4"><?php echo e(__('Add category')); ?></h2>
                <p class="mb-0"><?php echo e(__('Your category creation template.')); ?></p>
            </div>
        </div>
        <div class="col-12 col-xl-8">
            <div class="card card-body shadow-sm mb-4">
                <h2 class="h5 mb-4"><?php echo e(__('Category information')); ?></h2>
                <form wire:submit.prevent="add" action="#" method="POST">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="name"><?php echo e(__('Name')); ?></label>
                            <input wire:model="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name"
                                type="text" placeholder="Name" required>
                        </div>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="description"><?php echo e(__('Description')); ?></label>
                            <textarea wire:model="description"
                                class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description" type="text"
                                placeholder="Description" required>
                                    </textarea>
                        </div>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Save All</button>
                    </div>
                </form>
                <?php if($showDemoNotification): ?>
                <div class="alert alert-info mt-2" role="alert">
                    <?php echo e(__('You cannot do that in the demo version.')); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\augus\Documents\Anavue frontend\anavuePortal\dashboard\resources\views/livewire/new-category.blade.php ENDPATH**/ ?>