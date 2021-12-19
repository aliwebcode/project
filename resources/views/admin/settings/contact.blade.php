@extends('admin.layouts.admin')
@section('title','لوحة التحكم - معلومات التواصل ')
@section('settings','active open')
@section('contact','active')
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
                                <h4 class="card-title">معلومات التواصل</h4>
                            </div>
                            <div class="card-content p-2">
                                <form action="{{ route('contact.update') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>رقم الهاتف</label>
                                        <input type="tel" name="phone" class="form-control" value="{{ $settings->phone ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label>البريد الالكتروني</label>
                                        <input type="text" name="email" class="form-control" value="{{ $settings->email ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label>العنوان</label>
                                        <input type="text" name="address" class="form-control" value="{{ $settings->address ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label>رابط حساب فيسبوك</label>
                                        <input type="text" name="facebook" class="form-control" value="{{ $settings->facebook ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label>رابط حساب تويتر</label>
                                        <input type="text" name="twitter" class="form-control" value="{{ $settings->twitter ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label>رابط حساب إنستغرام</label>
                                        <input type="text" name="instagram" class="form-control" value="{{ $settings->instagram ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-info" type="submit">حفظ</button>
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
