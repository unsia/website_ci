<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
    <!--end::Base Path -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Brainloka')) | Login</title>
    <meta name="description" content="Updates and statistics">
    <meta name="keyword" content="cei, eduinkor, education, indonesia, korea, cyber">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('assets/css/demo1/pages/custom/general/login/login-3.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/vendors/global/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{ asset('assets/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />

    <!-- Additional CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />

    @yield('page-css')

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('homepages/images/favicon-usa.png') }}"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

@yield('content')

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('assets/vendors/global/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>
@include('sweetalert::alert')

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('assets/js/demo1/pages/login/login-general.js') }}" type="text/javascript"></script>

@yield('page-js')

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
