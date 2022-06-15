@extends('layouts.dashboard.app')
@section('page_title', 'الشقق السكنية')
@section('action')
    <a href="#">
        <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>اضافة شقة
            سكنية</button>
    </a>
@endsection
@section('content')
    <div class="card-body">
        <h6 class="card-subtitle">جدول الأبراج السكنية في قطاع غزة</h6>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>اسم السمتخدم </th>
                        <th>البريد الالكتروني</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection('content')
