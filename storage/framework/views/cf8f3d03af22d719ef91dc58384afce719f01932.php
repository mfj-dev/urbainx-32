<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Welcome Area Start ***** -->
<section class="urbianx-welcome-area bg-img bg-overlay" style="background-image: url('<?php echo e(asset(Voyager::image(setting('home.Background-home')))); ?>');">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                    <h2><?php echo e(setting('home.Title-home-arabic')); ?></h2>
                    <h4><?php echo e(setting('home.Sub-home-arabic')); ?></h4>
                </div>
                <!-- Hero Search Form -->
                <div class="hero-search-form">
                    <!-- Tabs -->
                    <!-- ======================================================= Tabs Content  ==================== -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="nav-places-tab" >
                            <h6><?php echo e(setting('home.home-Search-arabic')); ?></h6>
                            <!-- ======================================================= Tabs Content  ==================== -->
                            <?php echo Form::open(['method'=>'GET','url'=>'search','role'=>'search']); ?>

                            <?php echo e(csrf_field()); ?>

                            <select class="custom-select" name="search">
                                <option selected>مدينتك </option>
                                <!-- ======================================================= Tabs Content  ==================== -->
                                <?php $__currentLoopData = $Cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $City): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($City->id); ?>"><?php echo e($City->City_name_arabic); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- ======================================================= Tabs Content  ==================== -->
                            </select>
                            <select class="custom-select" name="search_cat">
                                <option selected>جميع الفئات  </option>
                                <!-- ======================================================= Tabs Content  ==================== -->
                                <?php $__currentLoopData = $Categores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->name_arabic); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- ======================================================= Tabs Content  ==================== -->
                            </select>
                            <button type="submit" class="btn urbianx-btn"><i class=" icon-feather-search" aria-hidden="true"></i> بحث  </button>
                            <?php echo e(Form::close()); ?>

                            <!-- ======================================================= Tabs Content  ==================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Social Btn -->
    <div class="hero-social-btn">
        <div class="social-title d-flex align-items-center">
            <h6>تابعنا على وسائل التواصل الإجتماعي </h6>
            <span></span>
        </div>
        <div class="social-btns">
            <!-- ======================================================= media Content  ==================== -->
            <a href="<?php echo e(setting('social-media.linkedin')); ?>"><i class="icon-feather-linkedin" aria-haspopup="true"></i></a>
            <a href="<?php echo e(setting('social-media.behance')); ?>"><i class="icon-brand-behance" aria-hidden="true"></i></a>
            <a href="<?php echo e(setting('social-media.dribbble')); ?>"><i class="icon-brand-dribbble" aria-hidden="true"></i></a>
            <a href="<?php echo e(setting('social-media.twitter')); ?>"><i class="icon-feather-twitter" aria-haspopup="true"></i></a>
            <a href="<?php echo e(setting('social-media.facebook')); ?>"><i class="icon-feather-facebook" aria-haspopup="true"></i></a>
            <!-- ======================================================= media Content  ==================== -->
        </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->
<!-- ***** Catagory Area Start ***** -->
<section class="urbianx-catagory-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-catagories">
                    <div class="row">
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                <div class="catagory-content">
                                    <i class=" icon-line-awesome-bed"></i>
                                    <a href="<?php echo e(setting('catagory-area.Hotels')); ?>">
                                        <h6>الفنادق</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                <div class="catagory-content">
                                    <i class=" icon-material-outline-restaurant"></i>
                                    <a href="<?php echo e(setting('catagory-area.Restaurants')); ?>">
                                        <h6>مطاعم </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                <div class="catagory-content">
                                    <i class=" icon-feather-shopping-bag"></i>
                                    <a href="<?php echo e(setting('catagory-area.Shopping')); ?>">
                                        <h6>التسوق </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                <div class="catagory-content">
                                  <i class=" icon-feather-scissors"></i>
                                  <a href="<?php echo e(setting('catagory-area.Beauty')); ?>">
                                    <h6>سبا الجمال </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Catagory Area -->
                    <div class="col-12 col-md">
                        <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                            <div class="catagory-content">
                                <i class=" icon-material-outline-movie"></i>
                                <a href="<?php echo e(setting('catagory-area.Cinema')); ?>">
                                    <h6>سينما</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ***** Catagory Area End ***** -->
<!-- ***** About Area Start ***** -->
<section class="urbianx-about-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content text-center">
                    <h2><?php echo e(setting('catagory-area.Tiltle-area-about-arabc')); ?></h2>
                    <p><?php echo e(setting('catagory-area.Content-area-about-arabic')); ?></p>
                </div>
            </div>
            <div class="col-12">  
                <!-- ======================================================= ads Content  ==================== -->
                <?php $__currentLoopData = $Ads_one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Advertisement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($Advertisement->Adv_link); ?>"><img src="<?php echo e(asset(Voyager::image($Advertisement->Adv_image))); ?>"></a> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- ======================================================= ads Content  ==================== -->
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area End ***** -->
<!-- ***** Editor Pick Area Start ***** -->
<section class="urbianx-editors-pick-area bg-img bg-overlay-9 section-padding-100" 
style="background-image: url('<?php echo e(asset(Voyager::image(setting('home.Background-Cities')))); ?>');">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-heading text-center">
                <span></span>
                <h4>يحدث المدن </h4>
                <p>المدن التي يجب عليك استكشافها هذا الصيف </p>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- ======================================================= media Content  ==================== -->
        <?php $__currentLoopData = $Cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $City): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="hover06 col-12 col-lg-4">
            <div class="single-features-area" style="background: transparent;">
                <!-- ======================================================= media Content  ==================== -->
                <a href="<?php echo e(url('Cities')); ?>/<?php echo e($City->slug); ?>"><img src="<?php echo e(asset(Voyager::image($City->City_image))); ?>" alt=""></a>
                <!-- Price -->
                <div class="price-start">
                    <!-- ======================================================= media Content  ==================== -->
                    <p><?php echo e($City->City_name_arabic); ?></p>
                    <!-- ======================================================= media Content  ==================== -->
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- ======================================================= media Content  ==================== -->
    </div>
    <div class="row">
        <div class="col-12"> 
            <!-- ======================================================= media Content  ==================== --> 
            <?php $__currentLoopData = $Ads_two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Advertisement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($Advertisement->Adv_link); ?>"><img src="<?php echo e(asset(Voyager::image($Advertisement->Adv_image))); ?>"></a> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- ======================================================= media Content  ==================== -->
        </div>
    </div>
</div>
</section>
<!-- ***** Editor Pick Area End ***** -->
<!-- ***** Features Destinations Area Start ***** -->
<section class="urbianx-features-destinations-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>حصرية </h4>
                    <p>قوائم حصرية شعبية في دليلنا </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="features-slides-rtl owl-carousel">
                    <!-- Single Features Area -->
                    <!-- Listes Content ================================================== -->
                    <?php $__currentLoopData = $Listes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Liste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $images = json_decode($Liste->Images,true); ?>
                    <?php $images[0]; ?> 
                    <div class="single-features-area">
                        <img src="<?php echo e(asset(Voyager::image($images[0]))); ?>" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <?php if(isset($Liste->Cite->City_name_arabic)): ?> 
                             <p><?php echo e($Liste->Cite->City_name_arabic); ?> | <?php if($Liste->active == 0): ?> مغلق الان!  <?php else: ?> مفتوح الان! <?php endif; ?></p>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <a href="<?php echo e(url('Listes')); ?>/<?php echo e($Liste->slug); ?>"><div class="feature-title">
                             <h5><a href="<?php echo e(url('Listes')); ?>/<?php echo e($Liste->slug); ?>"><?php echo e($Liste->List_name_arabic); ?></a>
                                <span class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class=" icon-line-awesome-check"></i></span></h5>
                                <?php if(isset($Liste->User->name)): ?> 
                                 <p><?php echo e($Liste->User->name); ?> | <?php echo e($Liste->Price_Range); ?> | <?php echo e($Liste->Category->name_arabic); ?></p>
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
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <!-- Listes Content ================================================== -->
             </div>
         </div>
     </div>
 </div>
</section>
<!-- ***** Features Destinations Area End ***** -->
<!-- ***** Features Restaurant Area Start ***** -->
<section class="urbianx-features-restaurant-area bg-default">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>فنادق مميزة </h4>
                    <p>قوائم حصرية مميزة في دليلنا </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="features-slides-rtl owl-carousel">
                 <!-- hotelListes Content ================================================== -->
                 <?php $__currentLoopData = $hotelListes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Liste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php $images = json_decode($Liste->Images,true); ?>
                 <?php $images[0]; ?> 
                 <div class="single-features-area">
                    <img src="<?php echo e(asset(Voyager::image($images[0]))); ?>" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <?php if(isset($Liste->Cite->City_name_arabic)): ?> 
                         <p><?php echo e($Liste->Cite->City_name_arabic); ?> | <?php if($Liste->active == 0): ?> مغلق الان!  <?php else: ?> مفتوح الان! <?php endif; ?></p>
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <a href="<?php echo e(url('Listes')); ?>/<?php echo e($Liste->slug); ?>">
                            <div class="feature-title">
                             <h5><?php echo e($Liste->List_name_arabic); ?>

                                <span class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class=" icon-line-awesome-check"></i> </span></h5>
                                <?php if(isset($Liste->User->name)): ?> 
                                 <p><?php echo e($Liste->User->name); ?> | <?php echo e($Liste->Price_Range); ?> | <?php echo e($Liste->Category->name_arabic); ?></p>
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
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <!-- hotelListes Content ================================================== -->
             </div>
         </div>
     </div>
 </div>
</section>
<!-- ***** Features Restaurant Area End ***** -->
<!-- ***** Features Events Area Start ***** -->
<section class="urbianx-features-events-area bg-img bg-overlay-9 section-padding-100-50" 
style="background-image: url('<?php echo e(asset(Voyager::image(setting('home.Background-Hotels')))); ?>')">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-heading text-center">
                <span></span>
                <h4> الأخبار والنصائح  </h4>
                <p>الخروج آخر الأخبار والمقالات من مدونتنا </p>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- ======================================================= news Content  ==================== -->
        <?php $__currentLoopData = $Posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-6">
            <div class="single-feature-events-area d-sm-flex align-items-center">
                <div class="feature-events-thumb">
                    <!-- ======================================================= news Content  ==================== -->
                    <img src="<?php echo e(asset(Voyager::image($Post->image))); ?>">
                </div>
                <!-- ======================================================= news Content  ==================== -->
                <div class="feature-events-content">
                    <h5><?php echo substr($Post->title_arabic, 0, 63); ?></h5>
                    <p><?php echo substr($Post->body_arabic, 0, 179); ?></p>
                </div>
                <!-- ======================================================= news Content  ==================== -->
                <div class="feature-events-details-btn">
                    <a href="<?php echo e(url('News')); ?>/<?php echo e($Post->slug); ?>"><i class="icon-material-outline-arrow-back"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- ======================================================= news Content  ==================== -->
    </div>
    <div class="row">
        <div class="col-12">  
            <!-- ======================================================= news Content  ==================== -->
            <?php $__currentLoopData = $Ads_three; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Advertisement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($Advertisement->Adv_link); ?>"><img src="<?php echo e(asset(Voyager::image($Advertisement->Adv_image))); ?>" style="width: 100%;"></a> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- ======================================================= news Content  ==================== -->
        </div>
    </div>
</div>
</section>
<!-- ***** Features Events Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('arabic.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zams\urbainx-32\codecanyon-23430909-urbainx-modern-directory-listing-script-theme\Urbainx\resources\views/arabic/home.blade.php ENDPATH**/ ?>