@extends('layouts.dashboard.login')
@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" class="alert alert-danger" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-head">
            <a href="index.html" class="logo"><img src="{{ asset('assets/dashboard/images//logo.svg') }}" class="img-fluid"
                    alt="logo"></a>
        </div>
        <h4 class="text-primary my-4">تسجيل الدخول</h4>
        <!-- Email Address -->
        <div class="form-group">
            <input name="email" type="email" class="form-control" id="email" placeholder="أدخل البريد الالكتروني"
                required>
        </div>
        <!-- Password -->
        <div class="form-group">
            <input name="password" type="password" class="form-control" id="password" placeholder="كلمة المرور" required>
        </div>
        <!-- Remember Me -->
        <div class="form-row mb-3">
            <div class="col-sm-6">
                <div class="custom-control custom-checkbox text-right">
                    <input name="remember" type="checkbox" class="custom-control-input" id="remember_me">
                    <label class="custom-control-label font-14" for="remember_me">تذكرني</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="forgot-psw">
                    @if (Route::has('password.request'))
                        <a id="forgot-psw" href="{{ route('password.request') }}" class="font-14">
                            نسيت كلمة المرور</a>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
        <div class="login-or">
            <h6 class="text-muted">OR</h6>
        </div>
        <p class="mb-0 mt-3">ليس لديك حساب؟ <a href="{{ route('register') }}">انشاء حساب جديد</a>
        </p>
        </div>
        </div>
    </form>
@endsection('content')
