@extends('layouts.dashboard.app')
@section('page_title', 'المستحدمين')
@section('action')
    <a href="{{ route('users.create') }} ">
        <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>
            اضافة مستخدم جديد</button>
    </a>
@endsection
@section('content')
    <div class="col-lg-10">
        <div class="card m-b-30">
            <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                @include('dashboard.users.partials.form')
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">اضافة</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">رجوع</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
