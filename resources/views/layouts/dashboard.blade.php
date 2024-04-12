<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/general/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/general/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('assets/general/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/general/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/general/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block">Api Challenge</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        @include('components.navbar')

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('components.sidebar')

    <main id="main" class="main">
        @yield('content')
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- JS Files -->
    <script src="{{ asset('assets/general/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/general/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/general/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/general/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/general/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/general/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/general/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/general/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/general/js/main.js') }}"></script>

</body>

</html>