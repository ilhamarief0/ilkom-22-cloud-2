<!DOCTYPE html>
<html lang="en">
	<!--begin::Head (bagian kepala HTML, berisi meta, link CSS, dll.)-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Login Page 2 | Keenthemes</title>
        <!-- Token CSRF untuk keamanan -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />

		<!--begin::Fonts (menggunakan font Poppins dari Google Fonts)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Page Custom Styles (khusus untuk halaman login ini)-->
		<link href="{{ asset('assets/backend/css/pages/login/classic/login-2.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->

		<!--begin::Global Theme Styles (untuk seluruh halaman)-->
		<link href="{{ asset('assets/backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->

		<!--begin::Layout Themes (tema untuk header, brand, aside)-->
		<link href="{{ asset('assets/backend/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backend/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/backend/media/logos/favicon.ico') }}" />
	</head>
	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		
		<!--begin::Main (container utama login)-->
		<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login" style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">

		<div class="d-flex flex-column flex-root">
			<!--begin::Login (container login)-->
			<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">

				<!--begin::Aside (panel kiri login)-->
				<div class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">

					<!--begin: Aside Container-->
					<div class="d-flex flex-row-fluid flex-column justify-content-between">

						<!--begin::Aside body (konten utama aside)-->
						<div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
							
							<!-- Logo -->
							<a href="#" class="mb-15 text-center">
								<img src="{{ asset('assets/backend/media/logos/logo-letter-1.png') }}" class="max-h-75px" alt="" />
							</a>

							<!--begin::Signin (form login)-->
							<div class="login-form login-signin">
								<div class="text-center mb-10 mb-lg-20">
									<h2 class="font-weight-bold">Sign In</h2>
									<p class="text-muted font-weight-bold">Enter your username and password</p>
								</div>

                                <!-- Pesan logout -->
                                @if(Session::has('logout_message'))
                                <div id="logout-alert" class="alert alert-success mb-5">
                                    {{ Session::get('logout_message') }}
                                </div>
                                @endif

                                <!-- Pesan reset password -->
                                @if(Session::has('reset_message'))
                                <div id="logout-alert" class="alert alert-success mb-5">
                                    {{ Session::get('reset_message') }}
                                </div>
                                @endif

								<!--begin::Form (form login POST)-->
								<form class="form" novalidate="novalidate" id="kt_login_signin_form" action="{{route('login.post')}}" method="POST">
                                    @csrf
									<div class="form-group py-3 m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Email" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group py-3 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password" placeholder="Password" name="password" />
									</div>
									<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
										<div class="checkbox-inline">
											<label class="checkbox checkbox-outline m-0 text-muted">
											<input type="checkbox" name="remember" />
											<span></span>Remember me</label>
										</div>
										<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forgot Password ?</a>
									</div>
									<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
										<div class="my-3 mr-2">
											<span class="text-muted mr-2">Don't have an account?</span>
											<a href="javascript:;" id="kt_login_signup" class="font-weight-bold">Signup</a>
										</div>
										<button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->

							<!--begin::Signup (form pendaftaran)-->
							<div class="login-form login-signup">
								<div class="text-center mb-10 mb-lg-20">
									<h3 class="">Sign Up</h3>
									<p class="text-muted font-weight-bold">Enter your details to create your account</p>
								</div>

								<!-- Pesan sukses signup -->
								@if(session('message'))
            					<div class="alert alert-success">
                				{{session('message')}}
            					</div>
            					@endif

								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_login_signup_form"/>
									@csrf
									<div class="form-group py-3 m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Fullname" name="fullname" autocomplete="off" />
									</div>
									<div class="form-group py-3 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group py-3 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Password" name="password" autocomplete="off" />
									</div>
									<div class="form-group py-3 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
									</div>
									<div class="form-group mt-5">
										<div class="checkbox-inline">
											<label class="checkbox checkbox-outline">
											<input type="checkbox" name="agree" />
											<span></span>I Agree the
											<a href="#" class="ml-1">terms and conditions</a>.</label>
										</div>
									</div>
									<div class="form-group d-flex flex-wrap flex-center">
										<button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
										<button id="kt_login_signup_cancel" class="btn btn-outline-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signup-->

							<!--begin::Forgot (form lupa password)-->
							<div class="login-form login-forgot">
								<div class="text-center mb-10 mb-lg-20">
									<h3 class="">Forgotten Password ?</h3>
									<p class="text-muted font-weight-bold">Enter your email to reset your password</p>
								</div>

								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_login_forgot_form">
									<div class="form-group py-3 border-bottom mb-10">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group d-flex flex-wrap flex-center">
										<button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
										<button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Forgot-->
						</div>
						<!--end::Aside body-->

						<!--begin: Aside footer untuk versi desktop-->
						<div class="d-flex flex-column-auto justify-content-between mt-15">
							<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© Radios Electronic Store</div>
							<div class="d-flex order-1 order-sm-2 my-2">
								<a href="#" class="text-muted text-hover-primary">Privacy</a>
								<a href="#" class="text-muted text-hover-primary ml-4">Legal</a>
								<a href="#" class="text-muted text-hover-primary ml-4">Contact</a>
							</div>
						</div>
						<!--end: Aside footer untuk versi desktop-->
					</div>
					<!--end: Aside Container-->
				</div>
				<!--end::Aside-->

				<!--begin::Content (bagian isi utama, bisa dikembangkan)-->
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
	</div>
	<!--end::Main-->

	<!--begin::Script konfigurasi Metronic-->
	<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>

	<!--begin::Global Config untuk JS-->
	<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": {...}, "font-family": "Poppins" };</script>
	<!--end::Global Config-->

	<!--begin::Global Theme Bundle-->
	<script src="{{ asset('assets/backend/plugins/global/plugins.bundle.js') }}"></script>
	<script src="{{ asset('assets/backend/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
	<script src="{{ asset('assets/backend/js/scripts.bundle.js') }}"></script>
	<script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script>
	<!--end::Global Theme Bundle-->

	<!--begin::Page Scripts (khusus halaman login)-->
	<script src="{{ asset('assets/backend/js/pages/custom/login/login-general.js') }}"></script>
	<!--end::Page Scripts-->

	</body>
	<!--end::Body-->
</html> 
