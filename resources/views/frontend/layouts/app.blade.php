<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Judul halaman dinamis --}}
    <title>@yield('title', config('app.name', 'Radios - Electronics Store'))</title>

    {{-- Meta tambahan --}}
    <meta name="description" content="@yield('meta_description', 'Toko elektronik online terbaik')">
    <meta name="keywords" content="@yield('meta_keywords', 'elektronik, belanja, radios')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

    {{-- Font & Icon --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    {{-- CSS utama --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Custom tambahan --}}
    @stack('styles')
</head>

<body>
    {{-- Preloader --}}
    <div id="preloader_part">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    {{-- Header --}}
    @include('layouts.partials.header')

    {{-- Sidebar atau slide bar (opsional) --}}
    @include('layouts.partials.slidebar')

    {{-- Konten utama --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.partials.footer')

    {{-- Script --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- Snap Midtrans (jika ada checkout) --}}
    @hasSection('midtrans')
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    @endif

    {{-- Script tambahan dari halaman --}}
    @stack('scripts')

    {{-- Optional JS untuk spinner --}}
    <script>
        window.addEventListener('load', function() {
            document.getElementById('preloader_part').style.display = 'none';
        });
    </script>
</body>
</html>
