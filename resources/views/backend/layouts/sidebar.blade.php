<!--begin::Aside-->
<aside class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside" role="complementary">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{ route('backend.dashboard.index') }}" class="brand-logo" aria-label="Homepage">
            <img alt="Logo" src="{{ asset('assets/backend/media/logos/logo-light.png') }}" />
        </a>
        <!--end::Logo-->

        <!--begin::Toggle Button-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle" aria-label="Toggle Sidebar" aria-expanded="false">
            <span class="svg-icon svg-icon-xl">
                <!--begin::Svg Icon-->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                    <g fill="none">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M5.3,6.7 C4.9,6.3 4.9,5.7 5.3,5.3 C5.7,4.9 6.3,4.9 6.7,5.3 L12.7,11.3 ..." fill="#000"/>
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Toggle Button-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <nav id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Navigation-->
            <ul class="menu-nav" role="menu">
                <!-- Dashboard -->
                <li class="menu-item {{ request()->routeIs('backend.dashboard.index') ? 'menu-item-active' : '' }}" role="none">
                    <a href="{{ route('backend.dashboard.index') }}" class="menu-link" role="menuitem" aria-label="Dashboard">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                <g fill="none">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12.9,16.1 L19.4,10.9 ..." fill="#000"/>
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">{{ __('Dashboard') }}</span>
                    </a>
                </li>

                <!-- Section Title -->
                <li class="menu-section" role="presentation">
                    <h4 class="menu-text">{{ __('Logs') }}</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md" aria-hidden="true"></i>
                </li>

                <!-- Activity Logs -->
                <li class="menu-item {{ request()->routeIs('backend.activitylogs.index') ? 'menu-item-active' : '' }}" role="none">
                    <a href="{{ route('backend.activitylogs.index') }}" class="menu-link" role="menuitem" aria-label="Activity Logs">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                                <g fill="none">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M11.05,18.67 L5.33,14.12 ..." fill="#000"/>
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">{{ __('Activity Logs') }}</span>
                    </a>
                </li>
            </ul>
            <!--end::Menu Navigation-->
        </nav>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</aside>
<!--end::Aside-->

<!-- Responsive Enhancement -->
<style>
    .aside {
        transition: all 0.3s ease-in-out;
    }

    @media (max-width: 768px) {
        .aside {
            display: none;
        }

        .aside.show {
            display: block;
            position: fixed;
            z-index: 1050;
            background-color: #1e1e2d;
            height: 100vh;
            overflow-y: auto;
        }
    }
</style>
