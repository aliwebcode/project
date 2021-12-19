@extends('admin.layouts.admin')
@section('title','لوحة التحكم - الرئيسية')
@section('index','active open')
@section('sidebarMain','active open')
<style>

    table tr td, table tr, table th {
        text-align: center;
    }

    .heading-elements span {
        font-size: 1.1rem !important;
    }
</style>
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card bg-info">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-check-square text-white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-white text-right">
                                            <h3 class="text-white">12</h3>
                                            <span>الخدمات</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card bg-danger">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-image text-white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-white text-right">
                                            <h3 class="text-white">22</h3>
                                            <span>معرض الأعمال</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card bg-success">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-users text-white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-white text-right">
                                            <h3 class="text-white">32</h3>
                                            <span>مشتركين</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card bg-warning">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-envelope text-white font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-white text-right">
                                            <h3 class="text-white">44</h3>
                                            <span>البريد</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest Mails -->
{{--                <div class="row">--}}
{{--                    <div class="col-12 col-lg-8">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">أحدث الرسائل</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-de mb-0" style="font-size: 14px;">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>عنوان الرسالة</th>--}}
{{--                                            <th>المرسل</th>--}}
{{--                                            <th>معاينة</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        @forelse($mails as $mail)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{ $mail->subject }}</td>--}}
{{--                                                <td>{{ $mail->name }}</td>--}}
{{--                                                <td>--}}
{{--                                                    <a href="{{ route('admin.mail.show',$mail->id) }}"--}}
{{--                                                       style="padding: 5px" class="btn btn-info btn-sm">--}}
{{--                                                        <i class="la la-external-link"></i>--}}
{{--                                                    </a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @empty--}}
{{--                                            <tr>--}}
{{--                                                <td class="text-center">لا يوجد رسائل.</td>--}}
{{--                                            </tr>--}}
{{--                                        @endforelse--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-4">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h4 class="card-title">أحدث المشتركين</h4>--}}
{{--                            </div>--}}
{{--                            <div class="card-content">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-de mb-0" style="font-size: 14px;">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>البريد الإلكتروني</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        @forelse($subs as $sub)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{ $sub->email }}</td>--}}
{{--                                            </tr>--}}
{{--                                        @empty--}}
{{--                                            <tr>--}}
{{--                                                <td class="text-center">لا يوجد مشتركين.</td>--}}
{{--                                            </tr>--}}
{{--                                        @endforelse--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
@endsection
