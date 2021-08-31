@extends('arabic.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Welcome Area Start ***** -->
<section class="urbianx-welcome-area bg-img bg-overlay" style="background-image: url('{{ asset(Voyager::image(setting('home.Background-home'))) }}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                    <h2>{{ setting('home.Title-home-arabic') }}</h2>
                    <h4>{{ setting('home.Sub-home-arabic') }}</h4>
                </div>
                <!-- Hero Search Form -->
                <div class="hero-search-form">
                    <!-- Tabs -->
                    <!-- ======================================================= Tabs Content  ==================== -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="nav-places-tab" >
                            <h6>{{ setting('home.home-Search-arabic') }}</h6>
                            <!-- ======================================================= Tabs Content  ==================== -->
                            {!! Form::open(['method'=>'GET','url'=>'search','role'=>'search']) !!}
                            {{ csrf_field() }}
                            <select class="custom-select" name="search">
                                <option selected>مدينتك </option>
                                <!-- ======================================================= Tabs Content  ==================== -->
                                @foreach($Cities as $City)
                                <option value="{{ $City->id }}">{{ $City->City_name_arabic }}</option>
                                @endforeach
                                <!-- ======================================================= Tabs Content  ==================== -->
                            </select>
                            <select class="custom-select" name="search_cat">
                                <option selected>جميع الفئات  </option>
                                <!-- ======================================================= Tabs Content  ==================== -->
                                @foreach($Categores as $Category)
                                <option value="{{ $Category->id }}">{{ $Category->name_arabic }}</option>
                                @endforeach
                                <!-- ======================================================= Tabs Content  ==================== -->
                            </select>
                            <button type="submit" class="btn urbianx-btn"><i class=" icon-feather-search" aria-hidden="true"></i> بحث  </button>
                            {{ Form::close() }}
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
            <a href="{{ setting('social-media.linkedin') }}"><i class="icon-feather-linkedin" aria-haspopup="true"></i></a>
            <a href="{{ setting('social-media.behance') }}"><i class="icon-brand-behance" aria-hidden="true"></i></a>
            <a href="{{ setting('social-media.dribbble') }}"><i class="icon-brand-dribbble" aria-hidden="true"></i></a>
            <a href="{{ setting('social-media.twitter') }}"><i class="icon-feather-twitter" aria-haspopup="true"></i></a>
            <a href="{{ setting('social-media.facebook') }}"><i class="icon-feather-facebook" aria-haspopup="true"></i></a>
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
                                    <a href="{{ setting('catagory-area.Hotels') }}">
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
                                    <a href="{{ setting('catagory-area.Restaurants') }}">
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
                                    <a href="{{ setting('catagory-area.Shopping') }}">
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
                                  <a href="{{ setting('catagory-area.Beauty') }}">
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
                                <a href="{{ setting('catagory-area.Cinema') }}">
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
                    <h2>{{ setting('catagory-area.Tiltle-area-about-arabc') }}</h2>
                    <p>{{ setting('catagory-area.Content-area-about-arabic') }}</p>
                </div>
            </div>
            <div class="col-12">  
                <!-- ======================================================= ads Content  ==================== -->
                @foreach($Ads_one as $Advertisement)
                <a href="{{ $Advertisement->Adv_link }}"><img src="{{ asset(Voyager::image($Advertisement->Adv_image)) }}"></a> 
                @endforeach
                <!-- ======================================================= ads Content  ==================== -->
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area End ***** -->
<!-- ***** Editor Pick Area Start ***** -->
<section class="urbianx-editors-pick-area bg-img bg-overlay-9 section-padding-100" 
style="background-image: url('{{ asset(Voyager::image(setting('home.Background-Cities'))) }}');">
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
        @foreach($Cities as $City)
        <div class="hover06 col-12 col-lg-4">
            <div class="single-features-area" style="background: transparent;">
                <!-- ======================================================= media Content  ==================== -->
                <a href="{{ url('Cities') }}/{{ $City->slug }}"><img src="{{ asset(Voyager::image($City->City_image)) }}" alt=""></a>
                <!-- Price -->
                <div class="price-start">
                    <!-- ======================================================= media Content  ==================== -->
                    <p>{{ $City->City_name_arabic }}</p>
                    <!-- ======================================================= media Content  ==================== -->
                </div>
            </div>
        </div>
        @endforeach
        <!-- ======================================================= media Content  ==================== -->
    </div>
    <div class="row">
        <div class="col-12"> 
            <!-- ======================================================= media Content  ==================== --> 
            @foreach($Ads_two as $Advertisement)
            <a href="{{ $Advertisement->Adv_link }}"><img src="{{ asset(Voyager::image($Advertisement->Adv_image)) }}"></a> 
            @endforeach
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
                    @foreach($Listes as $Liste)
                    <?php $images = json_decode($Liste->Images,true); ?>
                    <?php $images[0]; ?> 
                    <div class="single-features-area">
                        <img src="{{ asset(Voyager::image($images[0])) }}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            @if(isset($Liste->Cite->City_name_arabic)) 
                             <p>{{ $Liste->Cite->City_name_arabic }} | @if($Liste->active == 0) مغلق الان!  @else مفتوح الان! @endif</p>
                            @else
                            @endif
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <a href="{{ url('Listes') }}/{{ $Liste->slug }}"><div class="feature-title">
                             <h5><a href="{{ url('Listes') }}/{{ $Liste->slug }}">{{ $Liste->List_name_arabic }}</a>
                                <span class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class=" icon-line-awesome-check"></i></span></h5>
                                @if(isset($Liste->User->name)) 
                                 <p>{{ $Liste->User->name }} | {{ $Liste->Price_Range }} | {{ $Liste->Category->name_arabic }}</p>
                                @else
                                @endif
                               </div>
                           </a>
                           <!--   ================  Favourites Doctor   ================  -->
                           {{ Form::open(['route' => ['Favourites.store'], 'method' => 'POST']) }}
                           {{ csrf_field() }}
                           {{ Form::hidden('Liste_id', $Liste->id) }}
                           <!--   ================  Favourites  ================  -->
                           <div class="feature-favourite">
                             <button type="submit"><i class=" icon-line-awesome-heart" aria-hidden="true"></i></button> 
                         </div>
                         {{ Form::close() }}
                         <!--   ================  review   ================  -->
                     </div>
                 </div>
                 @endforeach
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
                 @foreach($hotelListes as $Liste)
                 <?php $images = json_decode($Liste->Images,true); ?>
                 <?php $images[0]; ?> 
                 <div class="single-features-area">
                    <img src="{{ asset(Voyager::image($images[0])) }}" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        @if(isset($Liste->Cite->City_name_arabic)) 
                         <p>{{ $Liste->Cite->City_name_arabic }} | @if($Liste->active == 0) مغلق الان!  @else مفتوح الان! @endif</p>
                        @else
                        @endif
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <a href="{{ url('Listes') }}/{{ $Liste->slug }}">
                            <div class="feature-title">
                             <h5>{{ $Liste->List_name_arabic }}
                                <span class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class=" icon-line-awesome-check"></i> </span></h5>
                                @if(isset($Liste->User->name)) 
                                 <p>{{ $Liste->User->name }} | {{ $Liste->Price_Range }} | {{ $Liste->Category->name_arabic }}</p>
                                @else
                                @endif
                               </div>
                           </a>
                           <!--   ================  Favourites Doctor   ================  -->
                           {{ Form::open(['route' => ['Favourites.store'], 'method' => 'POST']) }}
                           {{ csrf_field() }}
                           {{ Form::hidden('Liste_id', $Liste->id) }}
                           <!--   ================  Favourites  ================  -->
                           <div class="feature-favourite">
                             <button type="submit"><i class=" icon-line-awesome-heart" aria-hidden="true"></i></button> 
                         </div>
                         {{ Form::close() }}
                         <!--   ================  review   ================  -->
                     </div>
                 </div>
                 @endforeach
                 <!-- hotelListes Content ================================================== -->
             </div>
         </div>
     </div>
 </div>
</section>
<!-- ***** Features Restaurant Area End ***** -->
<!-- ***** Features Events Area Start ***** -->
<section class="urbianx-features-events-area bg-img bg-overlay-9 section-padding-100-50" 
style="background-image: url('{{ asset(Voyager::image(setting('home.Background-Hotels'))) }}')">
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
        @foreach($Posts as $Post)
        <div class="col-6">
            <div class="single-feature-events-area d-sm-flex align-items-center">
                <div class="feature-events-thumb">
                    <!-- ======================================================= news Content  ==================== -->
                    <img src="{{ asset(Voyager::image($Post->image)) }}">
                </div>
                <!-- ======================================================= news Content  ==================== -->
                <div class="feature-events-content">
                    <h5>{!! substr($Post->title_arabic, 0, 63) !!}</h5>
                    <p>{!! substr($Post->body_arabic, 0, 179) !!}</p>
                </div>
                <!-- ======================================================= news Content  ==================== -->
                <div class="feature-events-details-btn">
                    <a href="{{ url('News') }}/{{ $Post->slug }}"><i class="icon-material-outline-arrow-back"></i></a>
                </div>
            </div>
        </div>
        @endforeach
        <!-- ======================================================= news Content  ==================== -->
    </div>
    <div class="row">
        <div class="col-12">  
            <!-- ======================================================= news Content  ==================== -->
            @foreach($Ads_three as $Advertisement)
            <a href="{{ $Advertisement->Adv_link }}"><img src="{{ asset(Voyager::image($Advertisement->Adv_image)) }}" style="width: 100%;"></a> 
            @endforeach
            <!-- ======================================================= news Content  ==================== -->
        </div>
    </div>
</div>
</section>
<!-- ***** Features Events Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection