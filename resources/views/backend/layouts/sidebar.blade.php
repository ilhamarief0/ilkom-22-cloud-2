<!--begin::Aside-->
<aside class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{ route('backend.dashboard.index') }}" class="brand-logo" aria-label="Homepage">
            <img alt="Logo" src="{{ asset('assets/backend/media/logos/logo-light.png') }}" />
        </a>
        <!--end::Logo-->

        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle" aria-label="Toggle Sidebar" aria-expanded="false">
            <span class="svg-icon svg-icon-xl">
                <!-- Icon: Angle Double Left -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M15.5 19l-7-7 7-7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.5 19l-7-7 7-7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </button>
        <!--end::Toggle-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <nav id="kt_aside_menu" class="aside-menu my-4" role="navigation" aria-label="Sidebar Navigation"
             data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
                @php
                    $isActive = fn($route) => request()->routeIs($route) ? 'menu-item-active' : '';
                @endphp

                <li class="menu-item {{ $isActive('backend.dashboard.index') }}" role="none">
                    <a href="{{ route('backend.dashboard.index') }}" class="menu-link" role="menuitem" aria-label="Dashboard">
                        <span class="svg-icon menu-icon">
                            <!-- Icon: Dashboard -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8v-10h-8v10zm0-18v6h8V3h-8z" fill="currentColor"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-section" role="presentation">
                    <h4 class="menu-text">Logs</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md" aria-hidden="true"></i>
                </li>

                <li class="menu-item {{ $isActive('backend.activitylogs.index') }}" role="none">
                    <a href="{{ route('backend.activitylogs.index') }}" class="menu-link" role="menuitem" aria-label="Activity Logs">
                        <span class="svg-icon menu-icon">
                            <!-- Icon: Activity -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M3 12h3l3 8 4-16 3 8h5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="menu-text">Activity Logs</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--end::Aside Menu-->
</aside>
<!--end::Aside-->

<style>
    .aside {
        transition: transform 0.3s ease-in-out;
        background-color: #1e1e2d;
        z-index: 1001;
    }

    @media (max-width: 768px) {
        .aside {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 250px;
            transform: translateX(-100%);
        }

        .aside.show {
            transform: translateX(0);
        }
    }
</style>
