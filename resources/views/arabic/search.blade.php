@extends('arabic.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Listing Destinations Area Start ***** -->
<section class="dorne-listing-destinations-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <!-- ====================== search NULL =========== -->
            @if(isset($search) == '' ||  count($Listes) == 0) 
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>بحث </h4>
                    <p>0  نتيجة </p>
                </div>
            </div>
            @else
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>بحث </h4>
                    <p>وجدنا النتيجة </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Features Area -->
            <!-- Listes Content ================================================== -->
            @foreach($Listes as $Liste)
            <?php $images = json_decode($Liste->Images,true); ?>
            <?php $images[0]; ?> 
            <div class="col-lg-4">
                <div class="single-features-area">
                    <img src="{{ asset(Voyager::image($images[0])) }}" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        @if(isset($Liste->Cite->City_name_arabic)) 
                            <p>{{ $Liste->Cite->City_name_arabic }} | @if($Liste->active == 0) مغلق الان!  @else مفتوح الان!  @endif</p>
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
         </div>
         @endforeach
         <!-- Listes Content ================================================== -->
     </div>
     @endif
 </div>
</section>
<!-- ***** Listing Destinations Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection










