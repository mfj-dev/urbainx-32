@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- Explore Area -->
<section class="urbianx-explore-area ">
    <!-- Explore Search Area -->
    <div class="explore-search-area d-md-flex">
        <!-- Explore Search Form -->
        <div class="explore-search-form">
            <!-- ==================== Users  =================== -->
            <img src="{!! asset(Voyager::image($User->avatar)) !!}" style="border: 2px solid #000;margin-bottom:10px;width: 100%;">
            <!-- ==================== Users  =================== -->
            <h6><i class=" icon-material-outline-account-circle"></i> {{ $User->name }}</h6>
            <!-- ==================== Users  =================== -->
            <p style="color: #fff;">{{ $User->dec }}</p>
            <!-- ==================== Users  =================== -->
            <p style="color: #fff;"><i class="icon-feather-phone-call"></i> {{ $User->Phone }}</p>
            <!-- ==================== Users  =================== -->
            <p style="color: #fff;"><i class="icon-material-outline-add-location"></i> {{ $User->Address }}</p>
            
            </div>
            <!-- ==================== Users  =================== -->
            <!-- Explore Search Result -->
            <div class="container-fluid">
                <div class="row">
                    @if($User->role_id == '3')
                    @else
                    @if(Auth::user()->id == $User->id)
                    <div class="col-12">
                        <div class="dark text-left">
                            <span></span>
                            <h4></h4>
                            <p>Popular Favourites</p>
                        </div>
                    </div>
                    @if(count($Favourites) == 0)
                    @else
                    <!-- ============================= Favourite User ============================= -->
                    @foreach($Favourites as $Favourite)
                    <?php $images = json_decode($Favourite->Liste->Images,true); ?>
                    <?php $images[0]; ?>

                    <div class="col-sm-2 mt-15">
                        <div class="single-features-area">
                            <img src="{{ asset(Voyager::image($images[0])) }}" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                @if(isset($Favourite->Liste->Cite->name)) 
                                <p>{{ $Favourite->Liste->Cite->name }} | @if($Favourite->Liste->active == 0) Closed Now! @else Open Now! @endif</p>
                                @else
                                @endif
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <a href="{{ url('Listes') }}/{{ $Favourite->Liste->slug }}">
                                <div class="feature-title">
                                 <h6>{!! substr($Favourite->Liste->List_name, 0, 20) !!}
                                    <span class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class=" icon-line-awesome-check"></i> </span></h6>
                                    {{ Form::open(['method' => 'DELETE', 'route' => ['Favourites.destroy', $Favourite->id]]) }} 
                                    {{ csrf_field() }}       
                                    <button type="submit" style="border: 0;background: transparent;"><i class="icon-material-outline-delete"></i> DELETE</button>
                                    {{ Form::close() }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @endif
                @endif
                <!-- ==================== Users  =================== -->
                @if($User->role_id == '3')
                <div class="col-12">
                    <div class="dark text-left">
                        <span></span>
                        <h4></h4>
                        <p>Popular Listes</p>
                    </div>
                </div>
                @else
                <!-- ==================== Users  =================== -->
                @endif
                <!-- ==================== Users  =================== -->
                <!-- Listes Content ================================================== -->
                @foreach($Listes as $Liste)
                <?php $images = json_decode($Liste->Images,true); ?>
                <?php $images[0]; ?> 
                <div class="col-sm-2 mt-15">
                    <div class="single-features-area">

                        <img src="{{ asset(Voyager::image($images[0])) }}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            @if(isset($Liste->Cite->name)) 
                            <p>{{ $Liste->Cite->name }} | @if($Liste->active == 0) Closed Now! @else Open Now! @endif</p>
                            @else
                            @endif
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <a href="{{ url('Listes') }}/{{ $Liste->slug }}"><div class="feature-title">
                             <h6>{!! substr($Liste->List_name, 0, 20) !!}
                                <span class="verified simptip-position-top simptip-movable" data-tooltip="Claimed"><i class=" icon-line-awesome-check"></i> </span></h6>
                                @if(isset($Liste->Category->name)) 
                                <p>{{ $Liste->User->name }} | {{ $Liste->Price_Range }} | {{ $Liste->Category->name }}</p>
                                @else
                                @endif
                            </div>
                        </a>
                        <div class="feature-favourite">
                            @guest
                            @else
                            <!-- ================ User content  =================== -->
                            @if(Auth::user()->id == $User->id)
                            <a href="{{ url('Listes') }}/{{ $Liste->slug }}/edit">Edit</a>
                            <!-- ================ User content  =================== -->
                            @else
                            @endif
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Listes Content ================================================== -->
            <!-- ============================= Favourite User ============================= -->
            @if(Auth::user()->id == $User->id)
            <div class="col-12">
                    <div class="dark text-left">
                        <span></span>
                        <h4></h4>
                        <p>My Messagge</p>
                    </div>
                </div>
            <!-- Boxed List / End -->
                @if(count($Messages) == 0)
                @else
                <!-- ============================= Favourite User ============================= -->
                @foreach($Messages as $Message)
                <div class="col-sm-2 mt-15">
                    <div class="single-features-area">
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <a><div class="feature-title">
                             <h6>{{ $Message->name }}</h6>
                             <p>{{ $Message->Messages }}</p> 
                             {{ Form::open(['method' => 'DELETE', 'route' => ['Messages.destroy', $Message->id]]) }} 
                             {{ csrf_field() }}       
                              <button type="submit" style="border: 0;background: transparent;"><i class="icon-material-outline-delete"></i> DELETE</button>
                             {{ Form::close() }}  
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @else
            @endif
            <!-- ============================= Favourite User ============================= -->
            @if(Auth::user()->id == $User->id)
            @if($User->role_id == '3')
                  <div class="col-12">
                    <div class="dark text-left">
                        <span></span>
                        <h4></h4>
                        <p>My Book Liste</p>
                    </div>
                </div>
                <!-- Boxed List / End -->
                @else
                @endif
                @if(count($Books) == 0)
                @else
                <!-- ============================= Favourite User ============================= -->
                @foreach($Books as $Book)
                <div class="col-sm-2 mt-15">
                    <div class="single-features-area">
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <a><div class="feature-title">
                            @if(isset($Book->Liste->List_name)) 
                            <!-- ==================== Liste  =================== -->
                            <h6>{{ $Book->Liste->List_name }}</h6>
                            <!-- ==================== Liste  =================== --> 
                            @else
                            @endif
                             <p>{{ $Book->Book_content }}</p> 
                             {{ Form::open(['method' => 'DELETE', 'route' => ['Books.destroy', $Book->id]]) }} 
                             {{ csrf_field() }}       
                              <button type="submit" style="border: 0;background: transparent;"><i class="icon-material-outline-delete"></i> DELETE</button>
                             {{ Form::close() }}  
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @else
            @endif
        </div>
    </div>
</div>
<!-- Explore Map Area -->
</section>
<!-- ============================================================= Content end   ============================================================= -->
@endsection