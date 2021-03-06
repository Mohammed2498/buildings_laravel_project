@extends('layouts.dashboard.app')
@section('page_title', 'الشقق السكنية')
@section('content')
    <div class="col-lg-10">
        <div class="card m-b-30">
            <form method="POST" action="{{ route('apartments.store') }}" enctype="multipart/form-data">
                @csrf
                @include('apartments.partials.form')
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> اضافة</button>
                        <a href="{{ route('apartments.index') }}" class="btn btn-secondary">رجوع</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
