@extends('admin.layouts.admin')
@section('title','لوحة التحكم - الخدمات ')
@section('settings','active open')
@section('services','active open')
<style>
    body, .card-body h4, .card-header .card-title {
        font-family: 'Cairo', sans-serif !important;
    }
</style>
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        @if(session()->get('msg'))
                            <p class="alert alert-success text-center mb-4">{{ session()->get('msg') }}</p>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">الخدمات</h4>
                                <div class="heading-elements">
                                    <a href="{{ route('services.add') }}" class="btn btn-sm round btn-info btn-glow">
                                        <i class="la la-plus font-medium-1"></i>
                                        <span>إضافة</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content p-2">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>صورة الخدمة</th>
                                            <th>الخدمة</th>
                                            <th>تاريخ الإضافة</th>
                                            <th>خيارات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($services) && count($services) > 0)
                                            @foreach($services as $service)
                                                <tr>
                                                    <td>
                                                        <img width="60" height="60"
                                                             src="{{ asset('assets/images/services/'.$service->image) }}">
                                                    </td>
                                                    <td>{{ $service->title }}</td>
                                                    <td>{{ date_format($service->created_at,"Y/m/d - H:i") }}</td>
                                                    <td>
                                                        <a class="btn btn-danger btn-sm"
                                                           href="{{ route('service.delete',$service->id) }}">
                                                            <i class="la la-trash-o"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>صورة الخدمة</th>
                                            <th>الخدمة</th>
                                            <th>تاريخ الإضافة</th>
                                            <th>خيارات</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
