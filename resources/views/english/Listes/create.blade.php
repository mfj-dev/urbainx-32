@extends('layouts.app')

@section('content')

<!-- ============================================================= Content Start ============================================================= -->
<div class="container-contact100">
        <div class="wrap-contact100">
                <!-- ===========================  Listes ============================== -->
          {{ Form::open(['route' => ['Listes.store'], 'method' => 'POST','files' => 'true','class' => 'contact100-form form-horizontal', 'enctype' => 'multipart/form-data']) }}
          {{ csrf_field() }}
                <span class="contact100-form-title">
                    Create List
                </span>
                <!--   ================  Messagge ================  -->
                @if(session('Liste'))
                <div class="alert alert-success" role="alert" style="width: 100%;">
                    <p>Congratulations. Your Create List has been successfully :) </p>
                </div>
                @endif
                <!--   ================  Messagge ================  -->
                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="List_name" placeholder="List Name">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="slug" value="Unit{{ $Listsmax + '1'}}" 
                            placeholder="Unit slug (like title with elemnt - to be beteer with seo)" required="required">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <select name="Category_id" class="input100" style="border: 0;padding: 0;width: 100%;" required> 
                        <option class="text-color" selected="selected">List Category</option>
                        <!-- ============================= Category ============================= -->
                        @foreach($Categores as $Category) 
                        <option  value="{{ $Category->id }}">{{ $Category->name }}</option>
                        @endforeach
                        <!-- =============================  Category ============================= -->
                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <select name="cities_id" class="selectpicker" style="border: 0;padding: 0;width: 100%;" required>
                        <option class="text-color" selected="selected">City</option>
                        <!-- ============================= City ============================= -->
                        @foreach($Cities as $City) 
                        <option  value="{{ $City->id }}">{{ $City->name }}</option>
                        @endforeach
                        <!-- ============================= City ============================= -->
                    </select>
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Latitude" placeholder="List Latitude">
                    <a href="https://www.maps.ie/coordinates.html" target="_blank">To Get Map</a>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Longitude" placeholder="List Longitude">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Phone" placeholder="List Phone">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Address" placeholder="List Address">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Website" placeholder="List Website">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Monday" placeholder="List Monday">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input class="input100" name="Tuesday" type="text" placeholder="List Tuesday">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Wednesday" type="text" placeholder="List Wednesday">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Thursday" type="text" placeholder="List Thursday">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Friday" type="text" placeholder="List Friday">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Saturday" type="text" placeholder="List Saturday">
                    <span class="focus-input100"></span>
                </div>
                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Sunday" type="text" placeholder="List Sunday">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_Range" type="text"   placeholder="Price Range">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_From" type="text"   placeholder="Price From">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_To" type="text"   placeholder="Price To">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Twitter" type="text"   placeholder="Twitter">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Facebook" type="text"   placeholder="Facebook">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Linkedin" type="text"   placeholder="Linkedin">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="google_plus" type="text"   placeholder="google_plus">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="youtube" type="text"   placeholder="youtube">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input class="input100" name="instagram" type="text"   placeholder="instagram">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input">

                    <input class="input100" name="Images[]{{ $errors->has('Images') ? ' is-invalid' : '' }}" type="file"   placeholder="Images" multiple >
                    <span class="focus-input100"></span>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                
                <div class="wrap-input100">
                    <input  class="input100" name="description" type="text"  placeholder="Please enter your dec...">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn">Create</button>
                        
                    <button  class="contact100-form-btn"><a style="color: #fff" href="{{ url('Users') }}/{{ Auth::user()->name }}">
                     <i class=" icon-material-outline-account-circle"></i> My Profile </a>
                    </button>
                </div>
            {{ Form::close() }}
            <!-- ===========================  Listes ============================== -->
        </div>
    </div>
<!-- ============================================================= Content end   ============================================================= -->
@endsection