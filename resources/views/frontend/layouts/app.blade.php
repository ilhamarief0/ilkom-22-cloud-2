<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata Umum -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A modern and responsive electronics store template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Judul Halaman dan Favicon -->
    <title>@yield('title', 'Radios - Electronics Store')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <!-- CSS Utama -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    @stack('styles')
</head>

<body>
    <div class="body_wrap">

        <!-- Preloader -->
        <div class="preloader_part">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <!-- Tombol Kembali ke Atas -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Layout Halaman -->
        @include('frontend.layouts.header')
        @include('frontend.layouts.sidebar')

        <main>
            @yield('content')
        </main>

        @include('frontend.layouts.footer')

        <!-- Pemberitahuan Cookie -->
        <div class="cookies-area">
            <p>Website ini menggunakan cookies untuk meningkatkan pengalaman pengguna. Dengan menggunakan situs ini, Anda menyetujui <a href="#">Kebijakan Privasi</a>.</p>
            <a href="#" class="read-more">Baca Selengkapnya</a>
            <div>
                <button class="cookie-btn">Terima</button>
            </div>
        </div>
    </div>

    <!-- Script Tambahan -->
    @stack('script')

    <!-- JavaScript Utama (Letakkan di akhir body untuk performa) -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('assets/js/uikit.min.js') }}"></script>
    <script src="{{ asset('assets/js/resize-sensor.min.js') }}"></script>
    <script src="{{ asset('assets/js/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jqueryui.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
