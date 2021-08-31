@extends('arabic.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area height-700 bg-img bg-overlay" style="background-image: url('{{ asset(Voyager::image($Post->image)) }}')">
</div>
<!-- ***** Breadcumb Area End ***** -->
<!-- ***** Single Listing Area Start ***** -->
<section class="dorne-single-listing-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Listing Content -->
            <div class="col-12 col-lg-8">
                <div class="single-listing-content">
                    <div class="listing-title">
                        <!-- ==================== News  =================== -->
                        <h4>{{ $Post->title_arabic }}</h4>
                        <h6>{{ date('M j, Y', strtotime($Post->created_at)) }}</h6>
                    </div>
                    <div class="overview-content mt-50" id="overview">
                        <p>{{ $Post->body_arabic }}</p>
                    </div>
                    <!-- ==================== News  =================== -->
                    <div class="listing-reviews-area mt-100" id="review">
                        <h4>تعليقات </h4>
                        @foreach($Comments as $Comment)
                        <div class="single-review-area">
                            <div class="reviewer-meta d-flex align-items-center">
                                <img src="{{ asset(Voyager::image($Comment->User->avatar)) }}" alt="">
                                <div class="reviewer-content">
                                    <p>
                                        {{ $Comment->Comment_content }}
                                    </p>
                                </div>
                            </div>
                            <div class="reviewer-name">
                                @if(isset($Comment->User->name)) 
                                <!-- ==================== Liste  =================== -->
                                 <h6>{{ $Comment->User->name }}</h6>
                                <!-- ==================== Liste  =================== --> 
                                @else
                                @endif
                                <p>{{ date('M j, Y', strtotime($Comment->created_at)) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- ==================== News  =================== -->
                    <div class="contact-form contact-form-widget mt-50">
                        <h6> مرحبا :) واكتب تعليق  </h6>
                        <!--   ================  Comment    ================  -->
                        {{ Form::open(['route' => ['Comments.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                        {{ csrf_field() }}
                        {{ Form::hidden('Post_id', $Post->id) }}
                        <!--   ================  Comment  ================  -->
                        <div class="row">
                            <!-- ==================== News  =================== -->
                            <div class="col-12">
                                <textarea name="Comment_content" class="form-control" cols="30" rows="10" placeholder="تعليقك"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn urbianx-btn" style="border-radius: 5px;">تعليق  </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Listing Sidebar -->
        <div class="col-12 col-md-8 col-lg-4">
            <div class="listing-sidebar">
                <!-- ==================== News  =================== -->
                @foreach($Posts as $Post)
                <!-- Author Widget -->
                <div class="author-widget mt-30 d-flex align-items-center">
                    <img src="{{ asset(Voyager::image($Post->image)) }}" alt="" style="width: 90px !important;height: 80px !important;">
                    <div class="authors-name">
                        <!-- ==================== News  =================== -->
                        <a href="{{ url('News') }}/{{ $Post->slug }}">{!! substr($Post->title_arabic, 0, 49) !!}</a>
                        <!-- ==================== News  =================== -->
                        <p>{!! substr($Post->body_arabic, 0, 59) !!}</p>
                        <!-- ==================== News  =================== -->
                    </div>
                </div>
                @endforeach
                <!-- ==================== News  =================== -->
            </div>
            <div class="mt-30">
                <!-- ==================== ads News  =================== -->
                @foreach($Ads_eat as $Advertisement)
                 <!-- ==================== News  =================== -->
                 <a href="{{ $Advertisement->Adv_link }}"><img src="{{ asset(Voyager::image($Advertisement->Adv_image)) }}"></a> 
                @endforeach
                <!-- ==================== ads News  =================== -->
            </div>
        </div>
    </div>
</div>
</section>
<!-- ***** Single Listing Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection