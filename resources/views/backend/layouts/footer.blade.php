<!--begin::Footer-->
<footer class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer" role="contentinfo">
    <!--begin::Container-->
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">&copy; {{ date('Y') }}</span>
            <a href="{{ url('/') }}" class="text-dark-75 text-hover-primary" target="_blank" rel="noopener noreferrer">
                {{ config('app.name', 'MyApp') }}
            </a>
        </div>
        <!--end::Copyright-->

        <!--begin::Navigation Links-->
        <nav class="nav nav-dark order-1 order-md-2">
            <a href="{{ url('/about') }}" class="nav-link pl-0 pr-5 text-hover-primary">About</a>
            <a href="{{ url('/team') }}" class="nav-link pl-0 pr-5 text-hover-primary">Team</a>
            <a href="{{ url('/contact') }}" class="nav-link pl-0 pr-0 text-hover-primary">Contact</a>
        </nav>
        <!--end::Navigation Links-->
        
    </div>
    <!--end::Container-->
</footer>
<!--end::Footer-->
