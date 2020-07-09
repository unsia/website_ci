@extends('auth.app')

@section('content')
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(assets/media//bg/bg-3.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img alt="Brainloka" src="{{ asset('homepages/images/logo-usa.png') }}" width="50%">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Masuk untuk melengkapi pendaftaran</h3>
                        </div>
                        <form class="kt-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row kt-login__extra">
                                <!-- <div class="col">
                                    <label class="kt-checkbox">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                                        <span></span>
                                    </label>
                                </div> -->
                                <div class="col kt-align-right">
                                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Lupa Password?</a>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Masuk</button>
                                <button type="button" class="btn btn-light btn-elevate kt-login__btn-secondary" onclick="location.href='/'">Batal</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__forgot">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Lupa Password?</h3>
                            <div class="kt-login__desc">Masukkan emailmu untuk mengubah passwordmu:</div>
                        </div>
                        <form class="kt-form" action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                            </div>
                            <div class="kt-login__actions">
                                <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Kirim</button>&nbsp;&nbsp;
                                <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Batal</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__account">
                        <span class="kt-login__account-msg">
                            Belum punya akun pendaftaran?
                        </span>
                        <a href="{{ route('student.form_create_account') }}" class="kt-login__account-link">Daftar!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->
@endsection