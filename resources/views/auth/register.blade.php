@extends('layouts.app')

@section('content')
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                    <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-43">
                        {{ __('Register') }}
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email">
                        <input id="name" type="text" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Name</span>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email">
                        <input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">{{ __('Confirm Password') }}</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
                <div class="login100-more" style="background-image: url('{{ asset(Voyager::image(setting('login.background-regster'))) }}');">
                </div>
            </div>
        </div>
    </div>
@endsection
