@extends('layouts.app')

@section('content')

<!-- ============================================================= Content Start ============================================================= -->
<div class="container-contact100">
		<div class="wrap-contact100">
				<!-- ============================= User Edit ============================= -->
                {{ Form::open(['url'=>"Users/$User->name",'files' => 'true', 'method' => 'PUT','class' => 'contact100-form form-horizontal', 'enctype' => 'multipart/form-data']) }}
                @csrf
				<span class="contact100-form-title">
					تصحيح  {{ $User->name }}
				</span>
                    <!--   ================  Bed Messagge ================  -->
                    @if(session('Messagge'))
                    <div class="alert alert-success" role="alert" style="width: 100%;">
                        <p>تهانينا. حساب التحرير الخاص بك تم كتابه بنجاح  :)  </p>
                    </div>
                    @endif
                    <!--   ================  Messagge ================  -->
				<div class="wrap-input100 rs1">
					<input  class="input100" type="text" name="name" placeholder="Name" value="{{ $User->name }}">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1">
					<input class="input100" name="email" type="email" placeholder="Email Address" value="{{ $User->email }}" required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1">
					<input class="input100" name="avatar{{ $errors->has('avatar') ? ' is-invalid' : '' }}" type="file"  value="{{ $User->avatar }}" placeholder="Avatar">
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
                
                <div class="wrap-input100 rs1">
					<input class="input100" name="Phone" type="text"  value="{{ $User->Phone }}" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1">
					<input class="input100" name="password" type="text"  placeholder="Password (leave blank to keep the original password)">
					<span class="focus-input100"></span>
				</div>
				<!-- ============================= User ============================= -->
                {{ Form::hidden('password', $User->password) }}
                {{ Form::hidden('role_id', $User->role_id) }}
                <!-- ============================= User ============================= -->
                {{ Form::hidden('remember_token', $User->remember_token) }}
                <!-- ============================= User ============================= -->

				<div class="wrap-input100 rs1">
					<input  class="input100" type="Address" name="Address" value="{{ $User->Address }}" placeholder="Address">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100">
					<input  class="input100" name="dec_arabic" type="text" value="{{ $User->dec_arabic }}" placeholder="يرجى إدخال ديك ... ">

					<span class="focus-input100"></span>
				</div>
                <div class=" rs1">
					<input type="checkbox" name="role_id" value="3"> كن ليستر مان <br>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn">تحرير الحساب  </button>
                        
					<a class="contact100-form-btn" style="color: #fff" href="{{ url('Users') }}/{{ Auth::user()->name }}">
					 <i class=" icon-material-outline-account-circle"></i> ملفي  </a>
				</div>
			</form>
		</div>
	</div>
<!-- ============================================================= Content end   ============================================================= -->
@endsection