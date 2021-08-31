@extends('German.layout.inside')

@section('content')
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
                    <p>Städte, die Sie diesen Sommer erkunden müssen</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-15"> 
                <!-- Cities Content ads ================================================== --> 
                @foreach($Ads_four as $Advertisement)
                <a href="{{ $Advertisement->Adv_link }}"><img src="{{ asset(Voyager::image($Advertisement->Adv_image)) }}" width="100%"></a> 
                @endforeach
                <!-- Cities Content ads ================================================== -->
            </div>
        </div>
        <div class="row">
            <!-- Cities Content ================================================== -->
            @foreach($Cities as $City)
            <div class="hover06 col-12 col-lg-4">
                <!-- Cities Content ================================================== -->
                <div class="single-features-area" style="background: transparent;">
                    <!-- Cities Content ================================================== -->
                    <a href="{{ url('Cities') }}/{{ $City->slug }}"><img src="{{ asset(Voyager::image($City->City_image)) }}" alt=""></a>
                    <!-- Price -->
                    <div class="price-start">
                        <!-- Cities Content ================================================== -->
                        <p>{{ $City->City_name_german }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Cities Content ================================================== -->
        </div>
        <div class="row">
            <div class="col-12">  
                <!-- Cities Content ads ================================================== -->
                @foreach($Ads_five as $Advertisement)
                <a href="{{ $Advertisement->Adv_link }}"><img src="{{ asset(Voyager::image($Advertisement->Adv_image)) }}" width="100%"></a> 
                @endforeach
                <!-- Cities Content ads ================================================== -->
            </div>
        </div>
    </div>
</section>
<!-- ***** Listing Destinations Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection