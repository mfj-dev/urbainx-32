@extends('layouts.app')

@section('content')
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
                    <span class="login100-form-title p-b-43">
                        {{ __('Login') }}
                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email">
                        <input  id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus >
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div >
                           
                        
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="txt1" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('{{ asset(Voyager::image(setting('login.background-login'))) }}');">
                </div>
            </div>
        </div>
    </div>
@endsection
