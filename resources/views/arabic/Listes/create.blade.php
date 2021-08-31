@extends('layouts.app')

@section('content') 

<!-- ============================================================= Content Start ============================================================= -->
<div class="container-contact100">
        <div class="wrap-contact100">
            <!-- ===========================  Listes ============================== -->
            {{ Form::open(['route' => ['Listes.store'], 'method' => 'POST','files' => 'true','class' => 'contact100-form form-horizontal', 'enctype' => 'multipart/form-data']) }}
                {{ csrf_field() }}
                <span class="contact100-form-title" style="font-family: 'Cairo', sans-serif !important;">
                    إنشاء قائمة 
                </span>
                <!--   ================  Messagge ================  -->
                @if(session('Liste'))
                <div class="alert alert-success" role="alert" style="width: 100%;" >
                    <p>تهانينا. لديك قائمة إنشاء بنجاح  :)  </p>
                </div>
                @endif
                <!--   ================  Messagge ================  -->
                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="List_name_arabic" placeholder="اسم القائمة " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 rs1">
                <input  class="input100" type="text" name="slug" value="Unit{{ $Listsmax + '1'}}" 
                placeholder="Unit slug (مثل العنوان مع عنصر - ليكون أفضل مع سيو )" required="required" style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <select name="Category_id" class="input100" style="border: 0;padding: 0;width: 100%;" required style="font-family: 'Cairo', sans-serif !important;"> 
                        <option class="text-color" selected="selected">قائمة الفئة </option>
                        <!-- ============================= Category ============================= -->
                        @foreach($Categores as $Category) 
                        <option  value="{{ $Category->id }}" style="font-family: 'Cairo', sans-serif !important;">{{ $Category->name_arabic }}</option>
                        @endforeach
                        <!-- =============================  Category ============================= -->
                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <select name="cities_id" class="selectpicker" style="border: 0;padding: 0;width: 100%;" required style="font-family: 'Cairo', sans-serif !important;">
                        <option class="text-color" selected="selected">مدينة </option>
                        <!-- ============================= City ============================= -->
                        @foreach($Cities as $City) 
                        <option  value="{{ $City->id }}" style="font-family: 'Cairo', sans-serif !important;">{{ $City->City_name_arabic }}</option>
                        @endforeach
                        <!-- ============================= City ============================= -->
                    </select>
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Latitude" placeholder="قائمة Latitude " style="font-family: 'Cairo', sans-serif !important;">
                    <a href="https://www.maps.ie/coordinates.html" target="_blank" style="font-family: 'Cairo', sans-serif !important;">للحصول على الخريطة </a>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Longitude" placeholder="قائمة الطول " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Phone" placeholder="قائمة الهاتف " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Address" placeholder="عنوان القائمة " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Website" placeholder="قائمة الموقع " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input  class="input100" type="text" name="Monday" placeholder="قائمة الاثنين " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input class="input100" name="Tuesday" type="text" placeholder="قائمة الثلاثاء " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Wednesday" type="text" placeholder="قائمة الاربعاء " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Thursday" type="text" placeholder="قائمة الخميس " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Friday" type="text" placeholder="قائمة الجمعة " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="Saturday" type="text" placeholder="قائمة السبت " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Sunday" type="text" placeholder="قائمة الاحد " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_Range" type="text"   placeholder="نطاق السعر " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_From" type="text"   placeholder="السعر يبدأ من " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Price_To" type="text"   placeholder="السعر الى " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Twitter" type="text"   placeholder="تغريد " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Facebook" type="text"   placeholder="فيس بوك " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="Linkedin" type="text"   placeholder="تابعني على " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>

                 <div class="wrap-input100 rs1">
                    <input class="input100" name="google_plus" type="text"   placeholder="جوجل بلس " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                 <div class="wrap-input100 rs1">
                    <input class="input100" name="youtube" type="text"   placeholder="موقع YouTube " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1">
                    <input class="input100" name="instagram" type="text"   placeholder="الانستقرام " style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input class="input100" name="Images[]{{ $errors->has('Images') ? ' is-invalid' : '' }}" type="file"   placeholder="صور" multiple>
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
                    <input  class="input100" name="description_arabic" type="text"  placeholder="يرجى إدخال ديك ..." style="font-family: 'Cairo', sans-serif !important;">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn" style="font-family: 'Cairo', sans-serif !important;">خلق </button>
                        
                    <button  class="contact100-form-btn"><a style="font-family: 'Cairo', sans-serif !important;color: #fff" href="{{ url('Users') }}/{{ Auth::user()->name }}">
                     <i class=" icon-material-outline-account-circle"></i> ملفي </a>
                    </button>
                </div>
            {{ Form::close() }}
            <!-- ===========================  Listes ============================== -->
        </div>
    </div>
<!-- ============================================================= Content end   ============================================================= -->
@endsection