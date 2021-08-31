@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ***** Listing Destinations Area Start ***** -->
    <section class="urbianx-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <!-- ***** Category ***** -->
                        <h4>Featured {{ $Category->name }}</h4>
                        <!-- ***** Category ***** -->
                    </div>
                </div>
            </div>
            <div class="row">
            <!-- Listes Content ================================================== -->
            @foreach($Listes as $Liste)
            <?php $images = json_decode($Liste->Images,true); ?>
            <?php $images[0]; ?> 
            <div class="col-12 col-sm-6">
                <div class="single-features-area mb-50">
                    <!-- Listes Content ================================================== -->
                    <img src="{{ asset(Voyager::image($images[0])) }}" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        @if(isset($Liste->Cite->name)) 
                        <!-- Listes Content ================================================== -->
                        <p>{{ $Liste->Cite->name }} | @if($Liste->active == 0) Closed Now! @else Open Now! @endif</p> 
                        @else
                        @endif
                    </div>
                    <!-- Listes Content ================================================== -->
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <!-- Listes Content ================================================== -->
                            <h4><a href="{{ url('Listes') }}/{{ $Liste->slug }}">{{ $Liste->List_name }}</a></h4>
                            <!-- Listes Content ================================================== -->
                            @if(isset($Liste->User->name)) 
                            <!-- Listes Content ================================================== -->
                            <h5>{{ $Liste->User->name }}  | {{ $Liste->Price_Range }} | {{ $Liste->Category->name }}</h5> 
                            @else
                            @endif
                            <!-- Listes Content ================================================== -->
                            <p>{!! substr($Liste->description, 0, 90) !!}</p>
                        </div>
                         <!--   ================  Favourites Doctor   ================  -->
                        {{ Form::open(['route' => ['Favourites.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
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
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection