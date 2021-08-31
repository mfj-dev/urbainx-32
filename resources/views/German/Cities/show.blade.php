@extends('German.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Listing Destinations Area Start ***** -->
    <section class="urbianx-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <!-- Cities Content ================================================== -->
                        <h4>Featured {{ $City->City_name_german }}</h4>
                        <!-- Cities Content ================================================== -->
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12 mb-15">  
                <!-- Cities Content ads ================================================== -->
                @foreach($Ads_six as $Advertisement)
                     <a href="{{ $Advertisement->Adv_link }}"><img src="{{ asset(Voyager::image($Advertisement->Adv_image)) }}" width="100%"></a> 
                @endforeach
                <!-- Cities Content ads ================================================== -->
            </div>
            </div>
            <div class="row">
            <!-- Listes Content ================================================== -->
            @foreach($Listes as $Liste)
            <?php $images = json_decode($Liste->Images,true); ?>
            <?php $images[0]; ?> 
            <div class="col-12 col-sm-6">
                <div class="single-features-area mb-50">
                    <!-- Cities Content ================================================== -->
                    <img src="{{ asset(Voyager::image($images[0])) }}" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        @if(isset($Liste->Cite->City_name_german)) 
                        <!-- ==================== Liste  =================== -->
                        <p>{{ $Liste->Cite->City_name_german }} | @if($Liste->active == 0) Closed Now! @else Open Now! @endif</p>
                        <!-- ==================== Liste  =================== --> 
                        @else
                        @endif
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h4><a href="{{ url('Listes') }}/{{ $Liste->slug }}">{{ $Liste->List_name_german }}</a></h4>
                            @if(isset($Liste->User->name)) 
                            <!-- ==================== Liste  =================== -->
                            <h5>{{ $Liste->User->name }}  | {{ $Liste->Price_Range }} | {{ $Liste->Category->name_german }}</h5>
                            <!-- ==================== Liste  =================== --> 
                            @else
                            @endif
                            <p>{!! substr($Liste->description_german, 0, 90) !!}</p>
                        </div>
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
            </div>
            <!-- Single Features Area -->
            @endforeach
            </div>
            <div class="row">
            <div class="col-12 mb-15">  
                <!-- Cities Content ================================================== -->
                @foreach($Ads_seven as $Advertisement)
                     <a href="{{ $Advertisement->Adv_link }}"><img src="{{ asset(Voyager::image($Advertisement->Adv_image)) }}" width="100%"></a> 
                @endforeach
                <!-- Cities Content ================================================== -->
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection