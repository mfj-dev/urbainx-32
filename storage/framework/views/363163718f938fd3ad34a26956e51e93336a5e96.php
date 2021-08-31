<?php $__env->startSection('content'); ?>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                    <form method="POST" action="<?php echo e(route('register')); ?>" class="login100-form validate-form">
                    <?php echo csrf_field(); ?>
                    <span class="login100-form-title p-b-43">
                        <?php echo e(__('Register')); ?>

                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email">
                        <input id="name" type="text" class="input100<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Name</span>
                        <?php if($errors->has('name')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email">
                        <input id="email" type="email" class="input100<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
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
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100"><?php echo e(__('Confirm Password')); ?></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            <?php echo e(__('Register')); ?>

                        </button>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('<?php echo e(asset(Voyager::image(setting('login.background-regster')))); ?>');">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zams\urbainx-32\urbinx\Urbainx\resources\views/auth/register.blade.php ENDPATH**/ ?>