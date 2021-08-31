<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Listing Destinations Area Start ***** -->
    <section class="urbianx-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <!-- ***** Category ***** -->
                        <h4>Featured <?php echo e($Category->name); ?></h4>
                        <!-- ***** Category ***** -->
                    </div>
                </div>
            </div>
            <div class="row">
            <!-- Listes Content ================================================== -->
            <?php $__currentLoopData = $Listes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Liste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $images = json_decode($Liste->Images,true); ?>
            <?php $images[0]; ?> 
            <div class="col-12 col-sm-6">
                <div class="single-features-area mb-50">
                    <!-- Listes Content ================================================== -->
                    <img src="<?php echo e(asset(Voyager::image($images[0]))); ?>" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <?php if(isset($Liste->Cite->name)): ?> 
                        <!-- Listes Content ================================================== -->
                        <p><?php echo e($Liste->Cite->name); ?> | <?php if($Liste->active == 0): ?> Closed Now! <?php else: ?> Open Now! <?php endif; ?></p> 
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                    <!-- Listes Content ================================================== -->
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <!-- Listes Content ================================================== -->
                            <h4><a href="<?php echo e(url('Listes')); ?>/<?php echo e($Liste->slug); ?>"><?php echo e($Liste->List_name); ?></a></h4>
                            <!-- Listes Content ================================================== -->
                            <?php if(isset($Liste->User->name)): ?> 
                            <!-- Listes Content ================================================== -->
                            <h5><?php echo e($Liste->User->name); ?>  | <?php echo e($Liste->Price_Range); ?> | <?php echo e($Liste->Category->name); ?></h5> 
                            <?php else: ?>
                            <?php endif; ?>
                            <!-- Listes Content ================================================== -->
                            <p><?php echo substr($Liste->description, 0, 90); ?></p>
                        </div>
                         <!--   ================  Favourites Doctor   ================  -->
                        <?php echo e(Form::open(['route' => ['Favourites.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

                        <?php echo e(csrf_field()); ?>

                        <?php echo e(Form::hidden('Liste_id', $Liste->id)); ?>

                        <!--   ================  Favourites  ================  -->
                        <div class="feature-favourite">
                           <button type="submit"><i class=" icon-line-awesome-heart" aria-hidden="true"></i></button> 
                        </div>
                        <?php echo e(Form::close()); ?>

                        <!--   ================  review   ================  -->
                    </div>
                </div>
            </div>
            <!-- Single Features Area -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('english.layout.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zams\urbainx-32\codecanyon-23430909-urbainx-modern-directory-listing-script-theme\Urbainx\resources\views/english/Categores/show.blade.php ENDPATH**/ ?>