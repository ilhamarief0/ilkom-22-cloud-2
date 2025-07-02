<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="index.html" class="brand-logo" aria-label="Homepage">
            <img alt="Logo" src="{{ asset('assets/backend/media/logos/logo-light.png') }}" />
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle" aria-label="Toggle Sidebar" aria-expanded="false">
            <span class="svg-icon svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 ..." fill="#000000" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Toggle-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav" role="menu">
                <li class="menu-item {{ request()->routeIs('backend.dashboard.index') ? 'menu-item-active' : '' }}" role="menuitem" aria-haspopup="true">
                    <a href="{{ route('backend.dashboard.index') }}" class="menu-link" aria-label="Dashboard">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 ..." fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="menu-section" role="menuitem">
                    <h4 class="menu-text">{{ __('Logs') }}</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item {{ request()->routeIs('backend.activitylogs.index') ? 'menu-item-active' : '' }}" role="menuitem" aria-haspopup="true">
                    <a href="{{ route('backend.activitylogs.index') }}" class="menu-link" aria-label="Activity Logs">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 ..." fill="#000000" />
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">{{ __('Activity Logs') }}</span>
                    </a>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->

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
        }
    }
</style>
