@extends('auth.app')

@section('content')
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(/assets/media//bg/bg-3.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img alt="Brainloka" src="{{ asset('img/brand/logo-brainloka.png') }}">
                        </a>
                    </div>
                    <div class="kt-login__forgot" style="display: block">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Reset Your Password</h3>
                            <div class="kt-login__desc">Fill in the form below for reset your password</div>
                        </div>
                        <form class="kt-form" action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="input-group">
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" placeholder="Email" name="email" id="kt_email" autocomplete="off" required>
                                @if($errors->has('email'))
                                    <div id="email-error" class="error invalid-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="input-group">
                                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" placeholder="Password" name="password" autocomplete="off" required>
                                @if($errors->has('password'))
                                    <div id="password-error" class="error invalid-feedback">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="input-group">
                                <input class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password" placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required>
                                @if($errors->has('password_confirmation'))
                                    <div id="password_confirmation-error" class="error invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>
                            <div class="kt-login__actions">
                                <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->
@endsection
