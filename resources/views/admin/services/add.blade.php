@extends('admin.layouts.admin')
@section('title','لوحة التحكم - إضافة خدمة جديدة ')
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
                                <h4 class="card-title">إضافة خدمة جديدة</h4>
                                <div class="heading-elements">
                                    <a href="{{ route('services') }}" class="p-1 btn btn-sm round btn-info btn-glow">
                                        <span>رجوع</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content p-2">
                                <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>صورة الخدمة</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>عنوان الخدمة</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>وصف الخدمة</label>
                                        <textarea class="form-control" name="text" cols="30" rows="10" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="حفظ">
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
