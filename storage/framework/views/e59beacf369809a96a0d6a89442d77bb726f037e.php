<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <!-- Cities Content ================================================== -->
                        <h4>Happening Cities</h4>
                        <p>Cities you must explore this summer</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12 mb-15"> 
                <!-- Cities Content ads ================================================== --> 
                <?php $__currentLoopData = $Ads_four; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Advertisement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <a href="<?php echo e($Advertisement->Adv_link); ?>"><img src="<?php echo e(asset(Voyager::image($Advertisement->Adv_image))); ?>" width="100%"></a> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Cities Content ads ================================================== -->
            </div>
            </div>
            <div class="row">
                <!-- Cities Content ================================================== -->
                <?php $__currentLoopData = $Cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $City): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hover06 col-12 col-lg-4">
                    <!-- Cities Content ================================================== -->
                    <div class="single-features-area" style="background: transparent;">
                        <!-- Cities Content ================================================== -->
                            <a href="<?php echo e(url('Cities')); ?>/<?php echo e($City->slug); ?>"><img src="<?php echo e(asset(Voyager::image($City->City_image))); ?>" alt=""></a>
                            <!-- Price -->
                            <div class="price-start">
                                <!-- Cities Content ================================================== -->
                                <p><?php echo e($City->name); ?></p>
                            </div>
                        </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Cities Content ================================================== -->
            </div>
            <div class="row">
            <div class="col-12">  
                <!-- Cities Content ads ================================================== -->
                <?php $__currentLoopData = $Ads_five; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Advertisement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <a href="<?php echo e($Advertisement->Adv_link); ?>"><img src="<?php echo e(asset(Voyager::image($Advertisement->Adv_image))); ?>" width="100%"></a> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Cities Content ads ================================================== -->
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('english.layout.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zams\urbainx-32\codecanyon-23430909-urbainx-modern-directory-listing-script-theme\Urbainx\resources\views/english/Cities/index.blade.php ENDPATH**/ ?>