<!DOCTYPE html>
<!--
Template Metronic dari Keenthemes: Template dashboard admin berbasis Bootstrap 4
Lisensi harus valid dari Themeforest
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<!-- Judul halaman -->
		<title>Metronic Live preview | Keenthemes</title>
		<!-- Deskripsi halaman untuk SEO -->
		<meta name="description" content="Metronic admin dashboard live demo..." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Token CSRF untuk keamanan -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Canonical URL -->
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		
		<!--begin::Fonts-->
		<!-- Font Google Poppins -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Page Vendors Styles (khusus halaman ini, contoh: fullcalendar)-->
		<link href="{{ asset('assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->

		<!--begin::Global Theme Styles (digunakan semua halaman)-->
		<link href="{{ asset('assets/backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->

		<!--begin::Layout Themes (tema header/aside)-->
		<link href="{{ asset('assets/backend/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->

		<!-- Ikon favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/backend/media/logos/favicon.ico') }}" />
	</head>
	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="...">
		<!--begin::Main-->

		<!--begin::Header Mobile (navbar versi mobile)-->
		<div id="kt_header_mobile" class="header-mobile ...">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="{{ asset('assets/backend/media/logos/logo-light.png') }}" />
			</a>
			<!--end::Logo-->

			<!--begin::Toolbar (tombol toggle menu dll)-->
			<div class="d-flex align-items-center">
				<!-- Toggle Aside Sidebar -->
				<button class="btn p-0 burger-icon ..." id="kt_aside_mobile_toggle"><span></span></button>
				<!-- Toggle Header Menu -->
				<button class="btn p-0 burger-icon ..." id="kt_header_mobile_toggle"><span></span></button>
				<!-- Toggle User Topbar -->
				<button class="btn btn-hover-text-primary ..." id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">...</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->

		<div class="d-flex flex-column flex-root">
			<!--begin::Page (kontainer utama)-->
			<div class="d-flex flex-row flex-column-fluid page">
				
				<!-- Sidebar kiri -->
                @include('backend.layouts.sidebar')
				
				<!--begin::Wrapper (konten utama)-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!-- Header atas -->
                    @include('backend.layouts.header')

                    <!-- Konten dinamis -->
                    @yield('content')

                    <!-- Footer bawah -->
					@include('backend.layouts.footer')
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->

		<!-- begin::User Panel (panel samping untuk profil pengguna) -->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header Panel -->
			<div class="offcanvas-header d-flex ...">
				<h3 class="...">User Profile</h3>
				<a href="#" class="btn btn-xs ..." id="kt_quick_user_close">
					<i class="ki ki-close ..."></i>
				</a>
			</div>
			<!--end::Header-->

			<!--begin::Content Panel -->
			<div class="offcanvas-content pr-5 mr-n5">
				<!-- Informasi pengguna login -->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold ...">{{ auth()->user()->name }}</a>
						<div class="text-muted mt-1">Application Developer</div>
						<!-- Email user & tombol logout -->
						<div class="navi mt-2">
							<a href="#" class="navi-item">...</a>
							<a href="#" id="logout-btn" class="btn btn-sm ...">Sign Out</a>
						</div>
					</div>
				</div>

				<!-- Pemisah -->
				<div class="separator separator-dashed mt-8 mb-5"></div>

				<!--begin::Nav menu dalam user panel-->
				<div class="navi navi-spacer-x-0 p-0">
					<!-- Link ke profil, pesan, aktivitas, dan tugas -->
					<a href="..." class="navi-item">...</a>
					<a href="..." class="navi-item">...</a>
					<a href="..." class="navi-item">...</a>
					<a href="..." class="navi-item">...</a>
				</div>
				<!--end::Nav-->

				<!-- Pemisah -->
				<div class="separator separator-dashed my-7"></div>
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->

		<!-- Konfigurasi JS Global -->
		<script>var HOST_URL = "https://preview.keenthemes.com/...";</script>
		<script>var KTAppSettings = { ... };</script>

		<!-- Script JS utama -->
		<script src="{{ asset('assets/backend/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/backend/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('assets/backend/js/scripts.bundle.js') }}"></script>
		<script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script>

		<!-- Script logout dengan SweetAlert -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#logout-btn').on('click', function(e){
                    e.preventDefault();
                    Swal.fire({
                        text: "Apakah Anda Yakin Ingin Logout?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, Logout!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: "btn btn-active-light",
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '{{ route('logout') }}',
                                method: 'POST',
                                dataType: 'json',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    window.location.href = '{{ route('login') }}';
                                },
                                error: function(xhr){
                                    console.error(xhr);
                                    Swal.fire({
                                        text: "Terjadi kesalahan saat logout!",
                                        icon: "error"
                                    });
                                }
                            });
                        }
                    });
                });
            });
        </script>

        <!-- Tambahan DataTables CDN -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

		<!-- Script untuk plugin halaman (contoh: fullcalendar) -->
		<script src="{{ asset('assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="{{ asset('assets/backend/js/pages/widgets.js') }}"></script>

        <!-- Stack untuk menyisipkan script tambahan dari child page -->
        @stack('scripts')
	</body>
	<!--end::Body-->
</html>
