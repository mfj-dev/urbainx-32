<?php $__env->startSection('content'); ?>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                    <form method="POST" action="<?php echo e(route('login')); ?>" class="login100-form validate-form">
                        <?php echo csrf_field(); ?>
                    <span class="login100-form-title p-b-43">
                        <?php echo e(__('Login')); ?>

                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email">
                        <input  id="email" type="email" class="input100<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus >
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>

                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input id="password" type="password" class="input100<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div >
                           
                        
                        </div>
                        <div>
                            <?php if(Route::has('password.request')): ?>
                                <a class="txt1" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            <?php echo e(__('Login')); ?>

                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('<?php echo e(asset(Voyager::image(setting('login.background-login')))); ?>');">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zams\urbainx-32\codecanyon-23430909-urbainx-modern-directory-listing-script-theme\Urbainx\resources\views/auth/login.blade.php ENDPATH**/ ?>