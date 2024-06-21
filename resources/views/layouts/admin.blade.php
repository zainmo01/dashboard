<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<head>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        " />
    <meta name="keywords"
        content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('assets/admin/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdn.ki-icons.com/duotone/css/ki-duotone.css">
    @yield('styles')

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default"
    data-kt-app-sidebar-minimize="on" style="" data-kt-sticky-app-header-minimize="on"
    data-kt-app-header-minimize="on">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode =
                    document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
                    "dark" :
                    "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!--begin::Header header-start  -->
            @include('admin.includes.Header.Header')
            <!--end::Header-->

            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::Sidebar sidebar-start-->
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <!--begin::Logo-->
                    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="index.html">
                            <img alt="Logo" src="{{ asset('assets/admin/media/logos/default-dark.svg') }}"
                                class="h-25px app-sidebar-logo-default">
                            <img alt="Logo" src="{{ asset('assets/admin/media/logos/default-small.svg') }}"
                                class="h-20px app-sidebar-logo-minimize">
                        </a>
                        <!--end::Logo image-->

                        <div id="kt_app_sidebar_toggle"
                            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate active"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="app-sidebar-minimize">
                            <i class="fa-brands fa-openid"></i>
                        </div>
                        <!--end::Sidebar toggle-->
                    </div>
                    <!--end::Logo-->

                    <!--begin::sidebar menu-->
                    @include('admin.includes.Sidebar.Sidebar')
                    <!--end::sidebar menu-->

                    <!--begin::Footer-->
                    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                        <a href="https://preview.keenthemes.com/html/metronic/docs"
                            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                            data-bs-original-title="200+ in-house components and 3rd-party plugins"
                            data-kt-initialized="1">
                            <span class="btn-label"> Back to website </span>

                            <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">

                        <!--end::Toolbar-->

                        <!--begin::Content-->
                        @yield('content')
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->

                    <!--begin::Footer-->
                    @include('admin.includes.Footer.Footer')
                    <!--end::Footer-->

                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "{{ asset('') }}assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

    <script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/admin/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->





    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004"
            d="M-1 295.4723558298747L-1 295.4723558298747C-1 295.4723558298747 27.175694465637207 295.4723558298747 27.175694465637207 295.4723558298747C27.175694465637207 295.4723558298747 54.351388931274414 295.4723558298747 54.351388931274414 295.4723558298747C54.351388931274414 295.4723558298747 81.52708339691162 295.4723558298747 81.52708339691162 295.4723558298747C81.52708339691162 295.4723558298747 108.70277786254883 295.4723558298747 108.70277786254883 295.4723558298747C108.70277786254883 295.4723558298747 135.87847232818604 295.4723558298747 135.87847232818604 295.4723558298747C135.87847232818604 295.4723558298747 163.05416679382324 295.4723558298747 163.05416679382324 295.4723558298747C163.05416679382324 295.4723558298747 190.22986125946045 295.4723558298747 190.22986125946045 295.4723558298747C190.22986125946045 295.4723558298747 217.40555572509766 295.4723558298747 217.40555572509766 295.4723558298747C217.40555572509766 295.4723558298747 244.58125019073483 295.4723558298747 244.58125019073483 295.4723558298747C244.58125019073483 295.4723558298747 271.75694465637207 295.4723558298747 271.75694465637207 295.4723558298747C271.75694465637207 295.4723558298747 298.9326391220093 295.4723558298747 298.9326391220093 295.4723558298747C298.9326391220093 295.4723558298747 326.1083335876465 295.4723558298747 326.1083335876465 295.4723558298747C326.1083335876465 295.4723558298747 353.2840280532837 295.4723558298747 353.2840280532837 295.4723558298747C353.2840280532837 295.4723558298747 380.4597225189209 295.4723558298747 380.4597225189209 295.4723558298747C380.4597225189209 295.4723558298747 407.6354169845581 295.4723558298747 407.6354169845581 295.4723558298747C407.6354169845581 295.4723558298747 434.8111114501953 295.4723558298747 434.8111114501953 295.4723558298747C434.8111114501953 295.4723558298747 461.9868059158325 295.4723558298747 461.9868059158325 295.4723558298747C461.9868059158325 295.4723558298747 489.16250038146967 295.4723558298747 489.16250038146967 295.4723558298747C489.16250038146967 295.4723558298747 489.16250038146967 295.4723558298747 489.16250038146967 295.4723558298747 ">
        </path>
    </svg>
    <div class="daterangepicker ltr show-ranges opensleft">
        <div class="ranges">
            <ul>
                <li data-range-key="Today">Today</li>
                <li data-range-key="Yesterday">Yesterday</li>
                <li data-range-key="Last 7 Days">Last 7 Days</li>
                <li data-range-key="Last 30 Days">Last 30 Days</li>
                <li data-range-key="This Month">This Month</li>
                <li data-range-key="Last Month">Last Month</li>
                <li data-range-key="Custom Range">Custom Range</li>
            </ul>
        </div>
        <div class="drp-calendar left">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default"
                type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled"
                type="button">Apply</button> </div>
    </div>
    <div class="flatpickr-calendar hasTime animate" tabindex="-1">
        <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z">
                    </path>
                </svg></span>
            <div class="flatpickr-month">
                <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months"
                        aria-label="Month" tabindex="-1">
                        <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                        <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                        <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                        <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                        <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                        <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                        <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                        <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                        <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September
                        </option>
                        <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                        <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                        <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                    </select>
                    <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                            aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                </div>
            </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                    </path>
                </svg></span>
        </div>
        <div class="flatpickr-innerContainer">
            <div class="flatpickr-rContainer">
                <div class="flatpickr-weekdays">
                    <div class="flatpickr-weekdaycontainer">
                        <span class="flatpickr-weekday">
                            Sun</span><span class="flatpickr-weekday">Mon</span><span
                            class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                            class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                            class="flatpickr-weekday">Sat
                        </span>
                    </div>
                </div>
                <div class="flatpickr-days" tabindex="-1">
                    <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="May 26, 2024"
                            tabindex="-1">26</span><span class="flatpickr-day prevMonthDay"
                            aria-label="May 27, 2024" tabindex="-1">27</span><span
                            class="flatpickr-day prevMonthDay" aria-label="May 28, 2024"
                            tabindex="-1">28</span><span class="flatpickr-day prevMonthDay"
                            aria-label="May 29, 2024" tabindex="-1">29</span><span
                            class="flatpickr-day prevMonthDay" aria-label="May 30, 2024"
                            tabindex="-1">30</span><span class="flatpickr-day prevMonthDay"
                            aria-label="May 31, 2024" tabindex="-1">31</span><span class="flatpickr-day"
                            aria-label="June 1, 2024" tabindex="-1">1</span><span class="flatpickr-day"
                            aria-label="June 2, 2024" tabindex="-1">2</span><span class="flatpickr-day"
                            aria-label="June 3, 2024" tabindex="-1">3</span><span class="flatpickr-day"
                            aria-label="June 4, 2024" tabindex="-1">4</span><span class="flatpickr-day"
                            aria-label="June 5, 2024" tabindex="-1">5</span><span class="flatpickr-day"
                            aria-label="June 6, 2024" tabindex="-1">6</span><span class="flatpickr-day"
                            aria-label="June 7, 2024" tabindex="-1">7</span><span class="flatpickr-day"
                            aria-label="June 8, 2024" tabindex="-1">8</span><span class="flatpickr-day"
                            aria-label="June 9, 2024" tabindex="-1">9</span><span class="flatpickr-day"
                            aria-label="June 10, 2024" tabindex="-1">10</span><span class="flatpickr-day"
                            aria-label="June 11, 2024" tabindex="-1">11</span><span class="flatpickr-day"
                            aria-label="June 12, 2024" tabindex="-1">12</span><span class="flatpickr-day"
                            aria-label="June 13, 2024" tabindex="-1">13</span><span class="flatpickr-day"
                            aria-label="June 14, 2024" tabindex="-1">14</span><span class="flatpickr-day"
                            aria-label="June 15, 2024" tabindex="-1">15</span><span class="flatpickr-day"
                            aria-label="June 16, 2024" tabindex="-1">16</span><span class="flatpickr-day today"
                            aria-label="June 17, 2024" aria-current="date" tabindex="-1">17</span><span
                            class="flatpickr-day" aria-label="June 18, 2024" tabindex="-1">18</span><span
                            class="flatpickr-day" aria-label="June 19, 2024" tabindex="-1">19</span><span
                            class="flatpickr-day" aria-label="June 20, 2024" tabindex="-1">20</span><span
                            class="flatpickr-day" aria-label="June 21, 2024" tabindex="-1">21</span><span
                            class="flatpickr-day" aria-label="June 22, 2024" tabindex="-1">22</span><span
                            class="flatpickr-day" aria-label="June 23, 2024" tabindex="-1">23</span><span
                            class="flatpickr-day" aria-label="June 24, 2024" tabindex="-1">24</span><span
                            class="flatpickr-day" aria-label="June 25, 2024" tabindex="-1">25</span><span
                            class="flatpickr-day" aria-label="June 26, 2024" tabindex="-1">26</span><span
                            class="flatpickr-day" aria-label="June 27, 2024" tabindex="-1">27</span><span
                            class="flatpickr-day" aria-label="June 28, 2024" tabindex="-1">28</span><span
                            class="flatpickr-day" aria-label="June 29, 2024" tabindex="-1">29</span><span
                            class="flatpickr-day" aria-label="June 30, 2024" tabindex="-1">30</span><span
                            class="flatpickr-day nextMonthDay" aria-label="July 1, 2024" tabindex="-1">1</span><span
                            class="flatpickr-day nextMonthDay" aria-label="July 2, 2024" tabindex="-1">2</span><span
                            class="flatpickr-day nextMonthDay" aria-label="July 3, 2024" tabindex="-1">3</span><span
                            class="flatpickr-day nextMonthDay" aria-label="July 4, 2024" tabindex="-1">4</span><span
                            class="flatpickr-day nextMonthDay" aria-label="July 5, 2024" tabindex="-1">5</span><span
                            class="flatpickr-day nextMonthDay" aria-label="July 6, 2024" tabindex="-1">6</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flatpickr-time" tabindex="-1">
            <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                    tabindex="-1" step="1" min="1" max="12" maxlength="2"><span
                    class="arrowUp"></span><span class="arrowDown"></span></div><span
                class="flatpickr-time-separator">:</span>
            <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                    tabindex="-1" step="5" min="0" max="59" maxlength="2"><span
                    class="arrowUp"></span><span class="arrowDown"></span></div><span class="flatpickr-am-pm"
                title="Click to toggle" tabindex="-1">PM</span>
        </div>
    </div>
</body>

@yield('script')
<script>
    var hostUrl = "{{ asset('assets/admin/index.html') }}";
</script>
<script src="{{ asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/admin/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('assets/admin/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('assets/admin/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('assets/admin/js/custom/utilities/modals/users-search.js') }}"></script>

</body>

</html>
