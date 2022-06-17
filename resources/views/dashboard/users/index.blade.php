@extends('layouts.dashboard.app')
@section('page_title', 'المستحدمين')
@section('action')
    <a href="{{ route('users.create') }} ">
        <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>
            اضافة مستخدم جديد</button>
    </a>
@endsection
@section('content')
    <div class="card-body">
        <h6 class="card-subtitle">جدول الأبراج السكنية في قطاع غزة</h6>
        @if (session()->has('done'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('done') }}
            </div>
        @endif
        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الصورة</th>
                        <th>اسم السمتخدم</th>
                        <th>البريد الالكتروني</th>
                        <th>الدولة</th>
                        <th>المدينة</th>
                        <th>تاريخ الميلاد</th>
                        <th>الأمر</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                @if ($user->profile->image)
                                    <img src="{{ asset('storage/' . $user->profile->image) }}" alt=""
                                        height="20px" width="20px">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->profile->country }}</td>
                            <td>{{ $user->profile->city }}</td>
                            <td>{{ $user->profile->birthdate }}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-success">عرض</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endsection('content')
