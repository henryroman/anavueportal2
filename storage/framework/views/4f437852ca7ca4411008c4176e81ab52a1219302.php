
    <!-- Section -->
    
                            
                        
                            <!-- Form fields -->
                            
                        
                        
                    




<main>
    <title>AnaVue Portal - Sign In page</title>
        <div class="masthead9 pb-5" style=" background-color: #fce5cd;">
            <div class="d-flex justify-content-center align-items-center">
                <section class="card mt-5 pt-3" style="width: 25rem;">
                    <img src="../assets/img/brand/anavuelogo.png" class="card-img-top " alt="logo">
                    <div class="card-body">
                        <h3 style="display:grid; justify-content:center" class="card-title mt-3">Welcome back</h3>
                        <form wire:submit.prevent="login">
                                <?php echo csrf_field(); ?>
                                <!-- Form fields -->
                                <div class="form-group mb-4 mt-4">
                                    <label for="email"><?php echo e(__('Your Email')); ?></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                            </svg>
                                        </span>
                                        <input wire:model.lazy="email" type="email" class="form-control <?php echo e($failed == 'true' ? 'is-invalid' : ''); ?>" placeholder="example@company.com" id="email" autofocus required>
                                    </div>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div wire:key="form" class="invalid-feedback"> <?php echo e($message); ?> </div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            
                                <div class="form-group mb-4">
                                    <label for="password"><?php echo e(__('Your Password')); ?></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input wire:model="password" type="password" placeholder="Password" class="form-control <?php echo e($failed == 'true' ? 'is-invalid' : ''); ?>" id="password" required>
                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"> <?php echo e($message); ?> </div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            
                                <div class="d-flex justify-content-between align-items-top mb-4 mt-5">
                                    <div class="form-check">
                                        <input wire:model="remember_me" class="form-check-input" type="checkbox" value="" id="remember">
                                        <label class="form-check-label mb-0" for="remember">
                                            <?php echo e(__('Remember me')); ?>

                                        </label>
                                    </div>
                                    <div><a href="<?php echo e(route('forgot-password')); ?>" class="small text-right"><?php echo e(__('Lost password?')); ?></a></div>
                                </div>
                            
                                <div class="d-grid mb-2">
                                    <button type="submit" class="btn btn-gray-800"><?php echo e(__('login')); ?></button>
                                </div>
                            </form>
        
            </div>
                </section>
        </div>
</main>


<style>
    #masthead9 {
        min-height: 100vh !important; 
        position: relative !important; 
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2) !important; 
        background-size: cover;
    }
</style><?php /**PATH C:\Users\augus\Documents\Anavue frontend\anavuePortal\dashboard\resources\views/livewire/auth/sign-in.blade.php ENDPATH**/ ?>