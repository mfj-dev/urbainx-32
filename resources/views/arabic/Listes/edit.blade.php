@extends('layouts.app')

@section('content') 

<!-- ============================================================= Content Start ============================================================= -->
<div class="container-contact100">
        <div class="wrap-contact100">
            {{ Form::open(['url'=>"Listes/$Liste->slug",'files' => 'true', 'method' => 'PUT','class' => 'contact100-form form-horizontal', 'enctype' => 'multipart/form-data']) }}
            @csrf
            <!-- ===========================  Listes ============================== -->
                
                <span class="contact100-form-title" style="font-family: 'Cairo', sans-serif !important;">
                    تحرير قائمة
                </span>
                <!--   ================  Messagge ================  -->
                @if(session('Liste'))
                <div class="alert alert-success" role="alert" style="width: 100%;font-family: 'Cairo', sans-serif !important;">
                    <p>تهانينا. قائمة التعديل الخاصة بك تم بنجاح :)  </p>
                </div>
                @endif
                <!--   ================  Messagge ================  -->
                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="List_name_arabic" placeholder="List Name" value="{{ $Liste->List_name_arabic }}">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="slug" value="{{ $Liste->slug }}" 
                            placeholder="Unit slug (like title with elemnt - to be beteer with seo)" required="required">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <select name="Category_id" class="input100" style="border: 0;padding: 0;width: 100%;" required> 
                        @if(isset($Liste->Category->name_arabic)) 
                          <option class="text-color" selected="selected" value="{{ $Liste->Category->name_arabic }}">{{ $Liste->Category->name_arabic }}</option>
                        @else
                        @endif
                        <!-- ============================= Category ============================= -->
                        @foreach($Categores as $Category) 
                        <option  value="{{ $Category->id }}">{{ $Category->name_arabic }}</option>
                        @endforeach
                        <!-- =============================  Category ============================= -->
                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <select name="cities_id" class="selectpicker" style="border: 0;padding: 0;width: 100%;" required>
                        @if(isset($Liste->Cite->City_name_arabic)) 
                          <option class="text-color" selected="selected" value="{{ $Liste->Cite->City_name_arabic }}">{{ $Liste->Cite->City_name_arabic }}</option>
                        @else
                        @endif
                        <!-- ============================= City ============================= -->
                        @foreach($Cities as $City) 
                        <option  value="{{ $City->id }}">{{ $City->City_name_arabic }}</option>
                        @endforeach
                        <!-- ============================= City ============================= -->
                    </select>
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Latitude" placeholder="List Latitude" value="{{ $Liste->Latitude }}">
                    <a href="https://www.maps.ie/coordinates.html" target="_blank">للحصول على الخريطة </a>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Longitude" placeholder="List Longitude" value="{{ $Liste->Longitude }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Phone" placeholder="List Phone" value="{{ $Liste->Phone }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Address" placeholder="List Address" value="{{ $Liste->Address }}">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Website" placeholder="List Website" value="{{ $Liste->Website }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Monday" placeholder="List Monday" value="{{ $Liste->Monday }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input class="input100" name="Tuesday" type="text" placeholder="List Tuesday" value="{{ $Liste->Tuesday }}">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Wednesday" type="text" placeholder="List Wednesday" value="{{ $Liste->Wednesday }}">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Thursday" type="text" placeholder="List Thursday" value="{{ $Liste->Thursday }}">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Friday" type="text" placeholder="List Friday" value="{{ $Liste->Friday }}">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Saturday" type="text" placeholder="List Saturday" value="{{ $Liste->Saturday }}">
                    <span class="focus-input100"></span>
                </div>
                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Sunday" type="text" placeholder="List Sunday" value="{{ $Liste->Sunday }}">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_Range" type="text"   placeholder="Price Range" value="{{ $Liste->Price_Range }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_From" type="text"   placeholder="Price From" value="{{ $Liste->Price_From }}">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_To" type="text"   placeholder="Price To" value="{{ $Liste->Price_To }}">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Twitter" type="text"   placeholder="Twitter" value="{{ $Liste->Twitter }}">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Facebook" type="text"   placeholder="Facebook" value="{{ $Liste->Facebook }}">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Linkedin" type="text"   placeholder="Linkedin" value="{{ $Liste->Linkedin }}">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="google_plus" type="text"   placeholder="google_plus" value="{{ $Liste->google_plus }}">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="youtube" type="text"   placeholder="youtube" value="{{ $Liste->youtube }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input class="input100" name="instagram" type="text"   placeholder="instagram" value="{{ $Liste->instagram }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input">
                    <input class="input100" name="Images[]{{ $errors->has('Images') ? ' is-invalid' : '' }}" type="file"   placeholder="Images" multiple value="{{ $Liste->Images }}">
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
                    <input  class="input100" name="description_arabic" type="text"  placeholder="Please enter your dec..." value="{{ $Liste->description_arabic }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn" style="font-family: 'Cairo', sans-serif !important;">تصحيح </button>
                        
                    <a class="contact100-form-btn" style="font-family: 'Cairo', sans-serif !important;color: #fff" href="{{ url('Users') }}/{{ Auth::user()->name }}">
                     <i class=" icon-material-outline-account-circle"></i> ملفي </a>
               
                </div>
           {{ Form::close() }}
        </div>
    </div>
<!-- ============================================================= Content end   ============================================================= -->
@endsection