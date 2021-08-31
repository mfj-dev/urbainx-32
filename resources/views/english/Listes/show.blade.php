@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<?php $images = json_decode($Liste->Images,true); ?>
<?php $images[0]; ?> 
<div class="breadcumb-area height-700 bg-img bg-overlay" style="background-image: url('{{ asset(Voyager::image($images[0])) }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-content">
                    <div class="map-ratings-review-area d-flex">
                        <a style="border-radius: 5px;"><img src="{{ asset(Voyager::image(setting('star.five-star'))) }}">
                            @if(isset($Reviews) || count($Reviews) > 0)
                            <!-- ==================== Reviews  =================== -->
                            {{ count($Reviews) }} Ratings
                            <!-- ==================== Reviews  =================== -->
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Single Listing Area Start ***** -->
<section class="urbianx-single-listing-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Listing Content -->
            <div class="col-12 col-lg-8">
                <div class="single-listing-content">

                    <div class="listing-title">
                        <!-- ==================== Liste  =================== -->
                        <h4>{{ $Liste->List_name}}  <span style="background-color: #40b3ef;border-radius: 100%;color: #fff;display: inline-block;height: 15px;line-height: 15px;margin-top: -3px;text-align: center;vertical-align: middle;width: 15px;font-size: 10px;" class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class=" icon-line-awesome-tag"></i></span></h4>
                        @if(isset($Liste->Cite->name)) 
                        <!-- Listes Content ================================================== -->
                        <h6>{{ $Liste->Cite->name }} | {{ $Liste->User->name }} | {{ $Liste->Category->name }} | {{ $Liste->Price_Range }}</h6> 
                        @else
                        @endif
                    </div>
                    <div class="single-slides owl-carousel">
                        <!-- ============================== Content Liste images =============== -->
                        <?php $Listeimages = json_decode($Liste->Images); ?>
                        @if($Listeimages != null)
                        @foreach($Listeimages as $Listeimage)
                        <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="{{ asset(Voyager::image($Listeimage)) }}">
                        </div>
                        <!-- Single Features Area -->
                        @endforeach
                        @endif 
                        <!-- ==================== Liste  =================== -->
                    </div>
                    <div class="single-listing-nav">
                        <nav>
                            <ul id="listingNav">
                                <li class="active"><a href="#overview">Overview</a></li>
                                <li><a href="#review">Reviews</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="overview-content mt-50" id="overview">
                        <p>{{ $Liste->description }}</p>
                    </div>
                    <div class="listing-reviews-area mt-100" id="review">
                        <h4>reviews</h4>
                        <!--   ================  review  ================  -->
                        @if(isset($Reviews) || count($Reviews) > 0)
                        <!-- ==================================== Reviews  ======================================== -->
                        @foreach($Reviews as $review)
                        <div class="single-review-area">
                            <div class="reviewer-meta d-flex align-items-center">
                                <img src="{!! asset(Voyager::image($review->User->avatar)) !!}" alt="">
                                <div class="reviewer-content">
                                    <div class="review-title-ratings d-flex justify-content-between">
                                        <h5>“{{ $review->Reviews_title }}”</h5>
                                        <div class="ratings">
                                            <!-- ==================================== Reviews  ======================================== -->
                                            @if($review->Reviews_star == 1)
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            @endif
                                            @if($review->Reviews_star == 2)
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            @endif
                                            @if($review->Reviews_star == 3)
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">

                                            @endif
                                            @if($review->Reviews_star == 4)
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            @endif
                                            @if($review->Reviews_star == 5)
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            <img src="{!! asset(Voyager::image(setting('star.five-star'))) !!}" alt="">
                                            @endif
                                            <!-- ==================== Liste  ======================================================== -->
                                        </div>
                                    </div>
                                    <!-- ==================== Liste  =================== -->
                                    <p>{{ $review->Reviews_content }}</p>
                                </div>
                            </div>
                            <div class="reviewer-name">
                                @if(isset($review->User->name)) 
                                <!-- ==================== Liste  =================== -->
                                <h6>{{ $review->User->name }}</h6>
                                <!-- ==================== Liste  =================== --> 
                                @else
                                @endif
                                <p>{{ date('M j, Y', strtotime($review->created_at)) }}</p>
                                <!-- ==================== Liste  =================== -->
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <!--   ================ foreach review ================  -->
                    </div>
                    <!-- Contact Form -->
                    <div class="contact-form contact-form-widget mt-50">
                        <h6> Rate us and Write a Review </h6>
                        Reviews
                        <!--   ================  Reviews Doctor   ================  -->
                        {{ Form::open(['route' => ['Reviews.store'], 'method' => 'POST']) }}
                        {{ csrf_field() }}
                        {{ Form::hidden('Liste_id', $Liste->id) }}
                        <!--   ================  review  ================  -->
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="Reviews_title" class="form-control" placeholder="Your Title">
                            </div>
                            <div class="col-12">
                             <select name="Reviews_star" class="form-control" class="custom-select " id="destinations">
                                <option selected="">Your Star Review</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="Reviews_content" class="form-control"  cols="30" rows="10" placeholder="Your Review"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn urbianx-btn" style="border-radius: 5px;">Review</button>
                        </div>
                    </div>
                    {{ Form::close() }}
                    <!--   ================  review   ================  -->
                </div>
            </div>
        </div>
        <!-- Listing Sidebar -->
        <div class="col-12 col-md-8 col-lg-4">
            <div class="listing-sidebar">
             <!-- Opening Hours Widget -->
             <div class="opening-hours-widget" style="margin-top: 90px;">
                <h6>Opening Hours</h6>
                <!-- ==================== Liste  =================== -->
                <ul class="opening-hours">
                    <li>
                        <p>Saturday</p>
                        <p>{{ $Liste->Saturday }}</p>
                    </li>
                    <li>
                        <p>Sunday</p>
                        <p>{{ $Liste->Sunday }}</p>
                    </li>
                    <li>
                        <p>Monday</p>
                        <p>{{ $Liste->Monday }}</p>
                    </li>
                    <!-- ==================== Liste  =================== -->
                    <li>
                        <p>Tuesday</p>
                        <p>{{ $Liste->Tuesday }}</p>
                    </li>
                    <!-- ==================== Liste  =================== -->
                    <li>
                        <p>Thursday</p>
                        <p>{{ $Liste->Thursday }}</p>
                    </li>
                    <li>
                        <!-- ==================== Liste  =================== -->
                        <p>Wednesday</p>
                        <p>{{ $Liste->Wednesday }}</p>
                    </li>
                    <li>
                        <p>Friday</p>
                        <p>{{ $Liste->Friday }}</p>
                    </li>
                </ul>
                <!-- ==================== Liste  =================== -->
            </div>
            <!-- Listing Verify -->
            <div class="listing-verify mt-40">
                <div id="single-job-map-container">
                    <!-- ==================== map Liste  =================== -->
                    <div id="singleListingMap" data-latitude="{{ $Liste->Latitude }}" data-longitude="{{ $Liste->Longitude }}" data-map-icon="im im-icon-Hamburger">
                    </div>
                    <a href="#" id="streetView">Street View</a>
                </div>
            </div>
            <!-- Book A Table Widget -->
            <div class="book-a-table-widget mt-50">
                <h6>Book A Request</h6>
                <!--   ================  Books   ================  -->
                {{ Form::open(['route' => ['Books.store'], 'method' => 'POST']) }}
                {{ csrf_field() }}
                {{ Form::hidden('Liste_id', $Liste->id) }}
                @if(isset($Liste->User->id)) 
                <!-- ==================== Liste  =================== -->
                {{ Form::hidden('Listeman_id', $Liste->User->id) }}
                <!-- ==================== Liste  =================== --> 
                @else
                @endif
                <!--   ================  Books  ================  -->
                <textarea class="custom-select" name="Book_content"></textarea>
                <button type="submit" class="btn urbianx-btn bg-white text-dark" style="width: 100%;">
                 <i class="icon-material-outline-access-time" aria-hidden="true"></i> Send </button>
                 {{ Form::close() }}
                 <!--   ================  Books  ================  -->
             </div>
             <!-- Opening Hours Widget -->
             <div class="opening-hours-widget mt-50">
                <h6>Price Range : From {{ $Liste->Price_From }} To {{ $Liste->Price_To }}</h6>
            </div>
            <!-- Opening Hours Widget -->
            <!-- Opening Hours Widget -->
            <div class="opening-hours-widget mt-50">
                <h6>informations</h6>
                <ul class="opening-hours">
                    <li>
                        <p><i class="icon-material-outline-my-location"></i> {{ $Liste->Address }}</p>
                    </li>
                    <li>
                        <p><i class="icon-feather-phone-call"></i>  {{ $Liste->Phone }} </p>
                    </li>
                    <li>
                        <p><i class="icon-line-awesome-globe"></i>  {{ $Liste->Website }} </p>
                    </li>
                    <li><div class="footer-social-btns">
                        <a href="{{ $Liste->Linkedin }}"><i class="icon-brand-linkedin" aria-haspopup="true"></i></a>
                        <a href="{{ $Liste->youtube }}"><i class="icon-feather-youtube" aria-hidden="true"></i></a>
                        <a href="{{ $Liste->instagram }}"><i class="icon-brand-instagram" aria-hidden="true"></i></a>
                        <a href="{{ $Liste->Twitter }}"><i class="icon-line-awesome-twitter-square" aria-haspopup="true"></i></a>
                        <a href="{{ $Liste->Facebook }}"><i class=" icon-line-awesome-facebook-official" aria-haspopup="true"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Opening Hours Widget -->
        <!-- Author Widget -->
        <div class="author-widget mt-50 d-flex align-items-center">
            <img src="{{ asset(Voyager::image($Liste->User->avatar)) }}" alt="">
            <div class="authors-name">
                <a href="{{ url('Users') }}/{{ $Liste->User->name }}">{{ $Liste->User->name }}</a>
                <p>The Owner</p>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="contact-form contact-form-widget mt-50" style="border-radius: 5px;">
            <h6>Contact Message</h6>
            <!--   ================  Books   ================  -->
            {{ Form::open(['route' => ['Messages.store'], 'method' => 'POST']) }}
            {{ csrf_field() }}
            {{ Form::hidden('Liste_id', $Liste->id) }}
            @if(isset($Liste->User->id)) 
            <!-- ==================== Liste  =================== -->
            {{ Form::hidden('Listeman_id', $Liste->User->id) }}
            <!-- ==================== Liste  =================== --> 
            @else
            @endif
        <!--   ================  Books  ================  -->
            <div class="row">
                <div class="col-12">
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="col-12">
                    <textarea name="Messages" class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn urbianx-btn"style="border-radius: 5px;">Send</button>
                </div>
            </div>
            {{ Form::close() }}
            <!--   ================  Books  ================  -->
        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- ***** Single Listing Area End ***** -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
    Snackbar.show({
        text: 'Your status has been changed!',
        pos: 'bottom-center',
        showAction: false,
        actionText: "Dismiss",
        duration: 3000,
        textColor: '#fff',
        backgroundColor: '#383838'
    }); 
}); 
// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() { 
    Snackbar.show({
        text: 'Copied to clipboard!',
    }); 
}); 
</script>
<!-- ============================================================= Content end   ============================================================= -->
@endsection