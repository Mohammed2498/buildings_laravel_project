@extends('layouts.dashboard.app')
@section('page_title', 'الأبراج')
@section('content')
    <div class="col-lg-10">
        <div class="card m-b-30">
            <form method="POST" action="{{ route('buildings.store') }}" enctype="multipart/form-data">
                @csrf
                @include('buildings.partials.form')
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> اضافة</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
