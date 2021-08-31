

<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Listing Destinations Area Start ***** -->
<section class="dorne-listing-destinations-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <!-- ====================== search NULL =========== -->
            <?php if(isset($search) == '' ||  count($Listes) == 0): ?> 
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Search</h4>
                    <p>0 Result</p>
                </div>
            </div>
            <?php else: ?>
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Search</h4>
                    <p>We Found Result</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Features Area -->
            
            <!-- Listes Content ================================================== -->
            <?php $__currentLoopData = $Listes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Liste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $images = json_decode($Liste->Images,true); ?>
            <?php $images[0]; ?> 
            <div class="col-lg-4">
                <div class="single-features-area">
                    <img src="<?php echo e(asset(Voyager::image($images[0]))); ?>" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <?php if(isset($Liste->Cite->name)): ?> 
                        <p><?php echo e($Liste->Cite->name); ?> | <?php if($Liste->active == 0): ?> Closed Now! <?php else: ?> Open Now! <?php endif; ?></p>
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <a href="<?php echo e(url('Listes')); ?>/<?php echo e($Liste->slug); ?>"><div class="feature-title">
                         <h5><a href="<?php echo e(url('Listes')); ?>/<?php echo e($Liste->slug); ?>"><?php echo e($Liste->List_name); ?></a>
                            <span class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class=" icon-line-awesome-check"></i></span></h5>
                               <?php if(isset($Liste->User->name)): ?> 
                               <p><?php echo e($Liste->User->name); ?> | <?php echo e($Liste->Price_Range); ?> | <?php echo e($Liste->Category->name); ?></p>
                               <?php else: ?>
                               <?php endif; ?>
                           </div>
                       </a>
                       <!--   ================  Favourites Doctor   ================  -->
                       <?php echo e(Form::open(['route' => ['Favourites.store'], 'method' => 'POST'])); ?>

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
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <!-- Listes Content ================================================== -->
     </div>
     <?php endif; ?>
 </div>
</section>
<!-- ***** Listing Destinations Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>











<?php echo $__env->make('english.layout.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zams\urbainx-32\urbinx\Urbainx\resources\views/english/search.blade.php ENDPATH**/ ?>