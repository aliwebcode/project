<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
    <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
            rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/timedropper.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/style-rtl.css')}}">
    <!-- END Custom CSS-->
    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body, .card-body h4, .card-header .card-title, h1, h2, h3, h4, h5, h6 {
            font-family: 'Cairo', sans-serif !important;
        }
        .table th, .table td{text-align: center}
        .table td {vertical-align:middle}
        form label {
            font-size: 16px !important;
        }
        .alert {
            text-align: center;
            font-size: 16px;
        }
        .heading-elements span {
            font-size: 1.1rem !important;
        }
        .card .card-title {
            letter-spacing: 0 !important;
        }
        .filepond--drop-label.filepond--drop-label label {
            font-family: 'Cairo', sans-serif !important;
        }

        .filepond--credits {
            display: none !important;
        }

    </style>
</head>
<body class="vertical-layout @yield('body_class') vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@include('admin.layouts.header')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.layouts.sidebar')

@yield('content')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.layouts.footer')

<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assets/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('assets/admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>

@stack('script')
</body>
</html>