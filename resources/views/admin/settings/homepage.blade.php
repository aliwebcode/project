@extends('admin.layouts.admin')
@section('title','لوحة التحكم - إعدادات الصفحة الرئيسية  ')
@section('settings','active open')
@section('homepage','active')
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
                                <h4 class="card-title">شعار الموقع (لوغو)</h4>
                            </div>
                            <div class="card-content p-2">
                                @if($settings->logo)
                                    <div class="mb-3">
                                        <img src="{{ asset('assets/images/'.$settings->logo) }}"
                                             width="200"
                                             height="200">
                                    </div>
                                @endif
                                <form action="{{ route('homepage.update') }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>اختر صورة جديدة من جهازك بصيغة PNG</label>
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-info" type="submit">حفظ</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">صورة الغلاف</h4>
                            </div>
                            <div class="card-content p-2">
                                @if($settings->hero_image)
                                    <div class="mb-3">
                                        <img src="{{ asset('assets/images/'.$settings->hero_image) }}"
                                             width="200"
                                             height="200">
                                    </div>
                                @endif
                                <form action="{{ route('homepage.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>اختر صورة جديدة من جهازك بصيغة JPG أو PNG</label>
                                        <input type="file" class="form-control" accept="image/jpeg,image/png"
                                               name="hero_image">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-info" type="submit">حفظ</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">صورة قسم من نحن</h4>
                            </div>
                            <div class="card-content p-2">
                                @if($settings->about_us_image)
                                    <div class="mb-3">
                                        <img src="{{ asset('assets/images/'.$settings->about_us_image) }}"
                                             width="200"
                                             height="200">
                                    </div>
                                @endif
                                <form action="{{ route('homepage.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>اختر صورة جديدة من جهازك بصيغة JPG أو PNG</label>
                                        <input type="file" class="form-control" accept="image/jpeg,image/png"
                                               name="about_us_image">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-info" type="submit">حفظ</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">العبارة الترحيبية</h4>
                            </div>
                            <div class="card-content p-2">
                                <form action="{{ route('homepage.update') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="welcome_msg" class="form-control"
                                               value="{{ $settings->welcome_msg ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-info" type="submit">حفظ</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">من نحن</h4>
                            </div>
                            <div class="card-content p-2">
                                <form action="{{ route('homepage.update') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="about_us" class="form-control" cols="30"
                                                  rows="10">{{ $settings->about_us ?? "" }}</textarea>
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
