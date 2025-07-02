<!doctype html> <!-- Menentukan bahwa ini adalah dokumen HTML5 -->
<html lang="en"> <!-- Tag pembuka HTML dengan atribut bahasa -->

<head>
    <!-- Metadata dasar dan pengaturan halaman -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="A modern and responsive electronics store template" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Judul dan favicon -->
    <title>Radios - Electronics Store WooCommerce Template</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="images/x-icon" />

    <!-- Memuat file-file CSS eksternal yang digunakan untuk styling -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/metisMenu.css" />
    <link rel="stylesheet" href="assets/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <div class="body_wrap"> <!-- Pembungkus seluruh isi halaman -->

        <!-- Preloader Area -->
        <div class="preloader_part" id="preloader" role="status" aria-label="Loading">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <!-- Tombol kembali ke atas dengan animasi lingkaran -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Menyisipkan bagian header, sidebar, konten, dan footer menggunakan Blade -->
        @include('frontend.layouts.header')
        @include('frontend.layouts.sidebar')
        @yield('content')
        @include('frontend.layouts.footer')

        <!-- Area pemberitahuan penggunaan cookie -->
        <div class="cookies-area">
            <p>This website uses cookies to improve your experience. By using this website, you agree to our <a href="#">Data Protection Policy</a>.</p>
            <a href="#" class="read-more">Read more</a>
            <div>
                <button class="cookie-btn">Accept</button>
            </div>
        </div>
    </div>

    <!-- Tempat menyisipkan script tambahan melalui Blade -->
    @stack('script')

    <!-- Memuat file-file JavaScript eksternal untuk interaksi dan fungsionalitas halaman -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/resize-sensor.min.js"></script>
    <script src="assets/js/theia-sticky-sidebar.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jqueryui.js"></script>
    <script src="assets/js/touchspin.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html> <!-- Akhir dokumen HTML -->
