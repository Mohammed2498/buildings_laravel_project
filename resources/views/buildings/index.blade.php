@extends('layouts.dashboard.app')
@section('page_title', 'الأبراج')
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
                        <th>الاسم</th>
                        <th>الوصف</th>
                        <th>عدد الشقق</th>
                        <th>العنوان</th>
                        <th> الصورة</th>
                        <th> الأمر</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buildings as $building)
                        <tr>
                            <td>{{ $building->id }}</td>
                            <td>{{ $building->name }}</td>
                            <td>{{ $building->description }}</td>
                            <td>{{ $building->apartments_number }}</td>
                            <td>{{ $building->address }}</td>
                            <td>
                                @if ($building->image)
                                    <img src="{{ asset('storage/' . $building->image) }}" alt="" width="50px"
                                        height="50px">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('buildings.edit', $building->id) }}" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('buildings.destroy', $building->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" style="margin-top: 8px" type="submit"> حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $buildings->links() }}
        </div>
    </div>
@endsection('content')
