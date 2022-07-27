@extends('layouts.dashboard.log-register-info')
@section('content')
    <!-- Validation Errors -->
    {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-head">
            <a href="index.html" class="logo"><img src="{{ asset('assets/dashboard/images//logo.svg') }}" class="img-fluid"
                    alt="logo"></a>
        </div>
        <h4 class="text-primary my-4">انشاء حساب جديد</h4>
        <div class="form-group">
            <input name="name" type="text" class="form-control" id="name" placeholder="اسم المستخدم"
                required="">
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control" id="email" placeholder="البريد الالكتروني"
                required="">
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <input name="username" type="text" class="form-control" id="username" placeholder="اسم المعرف"
                required="">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" id="password" placeholder="كلمة المرور"
                required="">
        </div>
        <div class="form-group">
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                placeholder="تأكيد كلمة المرور" required="">
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block font-18">انشاء حساب</button>
    </form>
    <p class="mb-0 mt-3">لديك حساب! <a href="{{ route('login') }}">تسجيل الدخول</a></p>
@endsection('content')
