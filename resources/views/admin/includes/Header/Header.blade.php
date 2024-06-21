<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
    data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
    data-kt-sticky-animation="false" style="top: 0px;" data-kt-sticky-enabled="true">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span
                        class="path2"></span></i>
            </div>
        </div>
        <!--end::Sidebar mobile toggle-->

        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="index.html" class="d-lg-none">
                <img alt="Logo" src="{{ asset('assets') }}/admin/media/logos/default-small.svg" class="h-30px">
            </a>
        </div>
        <!--end::Mobile logo-->

        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">

                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link--><span class="menu-link"><span class="menu-title">Layouts</span><span
                                class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-900px w-xxl-950px"
                            style="">
                            <!--begin:Dashboards menu-->
                            <div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6" data-kt-menu-dismiss="true">
                                <!--begin:Row-->
                                <div class="row">
                                    <!--begin:Col-->
                                    <div class="col-lg-7">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-3">
                                                <!--begin:Heading-->
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                    Layouts
                                                </h4>
                                                <!--end:Heading-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="layouts/light-sidebar.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Light Sidebar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="layouts/dark-sidebar.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Dark Sidebar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="layouts/light-header.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Light Header</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="layouts/dark-header.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Dark Header</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->

                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-3">
                                                <!--begin:Heading-->
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                    Toolbars
                                                </h4>
                                                <!--end:Heading-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/classic.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Classic</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/saas.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">SaaS</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/accounting.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Accounting</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/extended.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Extended</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/reports.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Reports</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->

                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-3">
                                                <!--begin:Heading-->
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                    Asides
                                                </h4>
                                                <!--end:Heading-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-1.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Filters</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-2.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Segments</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-3.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Shipment History</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-4.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Courier Activity</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-5.html" class="menu-link">
                                                        <span class="menu-bullet"><span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                        <span class="menu-title">Calendar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->

                                        <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>

                                        <!--begin:Layout Builder-->
                                        <div
                                            class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5">
                                            <div class="d-flex flex-column me-5">
                                                <div class="fs-6 fw-bold text-gray-800">
                                                    Layout Builder
                                                </div>
                                                <div class="fs-7 fw-semibold text-muted">
                                                    Customize, preview and export
                                                </div>
                                            </div>

                                            <a href="layout-builder.html" class="btn btn-sm btn-primary fw-bold">
                                                Try Builder
                                            </a>
                                        </div>
                                        <!--end:Layout Builder-->
                                    </div>
                                    <!--end:Col-->

                                    <!--begin:Col-->
                                    <div class="col-lg-5 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
                                        <img src="{{ asset('assets') }}/admin/media/stock/900x600/45.jpg"
                                            class="rounded mw-100" alt="">
                                    </div>
                                    <!--end:Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                            <!--end:Dashboards menu-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <!--begin:Menu link--><span class="menu-link"><span class="menu-title">Help</span><span
                                class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px"
                            style="">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                    target="_blank" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right"
                                    data-bs-original-title="Check out over 200 in-house components, plugins and ready for use solutions"
                                    data-kt-initialized="1"><span class="menu-icon"><i
                                            class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Components</span></a><!--end:Menu link-->
                            </div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right"
                                    data-bs-original-title="Check out the complete documentation"
                                    data-kt-initialized="1"><span class="menu-icon"><i
                                            class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Documentation</span></a><!--end:Menu link-->
                            </div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link--><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                    target="_blank"><span class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i></span><span
                                        class="menu-title">Changelog v8.2.0</span></a><!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->

            <!--begin::Navbar--------------------------------------------------------------------------------------------------------- -->
            <div class="app-navbar flex-shrink-0">

                <!--begin::Theme mode-->
                <div class="app-navbar-item ms-1 ms-md-4">
                    <!--begin::Menu toggle-->
                    <a href="#"
                        class="btn  mx-10 btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                        data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <h6>Mode</h6>
                    </a>
                    <!--begin::Menu toggle-->

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2 active" data-kt-element="mode"
                                data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="fa-regular fa-sun"></i>
                                </span>
                                <span class="menu-title"> Light </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="fa-regular fa-moon"></i>
                                </span>
                                <span class="menu-title"> Dark </span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Theme mode-->

                <!--begin::User menu-->
                <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <img src="{{ asset('assets') }}/admin/media/avatars/300-3.jpg" class="rounded-3"
                            alt="user">
                    </div>

                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ asset('assets') }}/admin/media/avatars/300-3.jpg">
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        Robert Fox
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                    </div>

                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                        robert@kt.com
                                    </a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" class="menu-link px-5">
                                My Profile
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item user-->
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative">
                                    Language
                                    <span
                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                        English
                                        <img class="w-15px h-15px rounded-1 ms-2"
                                            src="{{ asset('assets') }}/admin/media/flags/united-states.svg"
                                            alt="">
                                    </span>
                                </span>
                            </a>

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5 active">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1"
                                                src="{{ asset('assets') }}/admin/media/flags/united-states.svg"
                                                alt="">
                                        </span>
                                        English
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1"
                                                src="{{ asset('assets') }}/admin/media/flags/spain.svg"
                                                alt="">
                                        </span>
                                        Spanish
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1"
                                                src="{{ asset('assets') }}/admin/media/flags/germany.svg"
                                                alt="">
                                        </span>
                                        German
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1"
                                                src="{{ asset('assets') }}/admin/media/flags/japan.svg"
                                                alt="">
                                        </span>
                                        Japanese
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1"
                                                src="{{ asset('assets') }}/admin/media/flags/france.svg"
                                                alt="">
                                        </span>
                                        French
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item -->

                        <!--begin::Menu item user-->
                        <div class="menu-item px-5 my-1">
                            <a href="account/settings.html" class="menu-link px-5">
                                Account Settings
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item user-->
                        <div class="navbar">
                            <!-- Other navbar content -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            <a class="menu-item px-5" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->

                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->

                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                        id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                </div>
                <!--end::Header menu toggle-->

                <!--begin::Aside toggle-->
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar -------------------------------------------------------------------------------------------------------------->

        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
