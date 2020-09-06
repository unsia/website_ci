<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="Universitas Siber Asia" />

    <!-- OG -->
    <meta property="og:title" content="Universitas Siber Asia" />
    <meta property="og:description" content="Universitas Siber Asia" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('homepages/prodi//images/favicon.png') }}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>@yield('prodi') - @yield('title')</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/prodi/css/assets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/prodi/vendors/calendar/fullcalendar.css')}}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/prodi/css/typography.css')}}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/prodi/css/shortcodes/shortcodes.css')}}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/prodi/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/prodi/css/dashboard.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('homepages/prodi/css/color/color-1.css')}}">

    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    <header class="ttr-header">
        <div class="ttr-header-wrapper">
            <!--sidebar menu toggler start -->
            <div class="ttr-toggle-sidebar ttr-material-button">
                <i class="ti-close ttr-open-icon"></i>
                <i class="ti-menu ttr-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->
            <!--logo start -->
            <div class="ttr-logo-box">
                <div>
                    <a href="/" class="ttr-logo">
                        <img class="ttr-logo-mobile" alt="" src="{{ asset('homepages/prodi/images/logo-mobile.png')}}" width="30" height="30">
                        <img class="ttr-logo-desktop" alt="" src="{{ asset('homepages/prodi/images/logo-white.png')}}" width="160" height="27">
                    </a>
                </div>
            </div>
            <!--logo end -->
            <div class="ttr-header-menu">
                <!-- header left menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="" class="ttr-material-button ttr-submenu-toggle">Program Studi - @yield('prodi')</a>
                    </li>
                </ul>
                <!-- header left menu end -->
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- Left sidebar menu start -->
<div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <a href="/"><img alt="" src="{{ asset('homepages/prodi/images/logo.png')}}" width="122" height="27"></a>
            <div class="ttr-sidebar-toggle-button">
                <i class="ti-arrow-left"></i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- sidebar menu start -->
        <nav class="ttr-sidebar-navi">
            <ul>
                <li>
                    <a href="{{ route('akuntansi') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('akuntansi.dosen') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-user"></i></span>
                        <span class="ttr-label">Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('akuntansi.keunggulan') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-cup"></i></span>
                        <span class="ttr-label">Keunggulan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('akuntansi.kurikulum') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-book"></i></span>
                        <span class="ttr-label">Kurikulum</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('akuntansi.prospek_karir') }}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-medall"></i></span>
                        <span class="ttr-label">Prospek Karir</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>
<!-- Left sidebar menu end -->
<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">@yield('title')</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>@yield('prodi')</a></li>
                <li>@yield('title')</li>
            </ul>
        </div>

        @yield('contentBox')

        <!-- External JavaScripts -->
<script src="{{ asset('homepages/prodi/js/jquery.min.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/scroll/scrollbar.min.js') }}"></script>
<script src="{{ asset('homepages/prodi/js/functions.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/chart/chart.min.js') }}"></script>
<script src="{{ asset('homepages/prodi/js/admin.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/calendar/moment.min.js') }}"></script>
<script src="{{ asset('homepages/prodi/vendors/calendar/fullcalendar.js') }}"></script>
<script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
<script>
    const players = Array.from(document.querySelectorAll(".js-player")).map(
        (p) => new Plyr(p)
    );
</script>
<script>
    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2019-03-12',
            navLinks: true, // can click day/week names to navigate views

            weekNumbers: true,
            weekNumbersWithinDays: true,
            weekNumberCalculation: 'ISO',

            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [{
                    title: 'All Day Event',
                    start: '2019-03-01'
                },
                {
                    title: 'Long Event',
                    start: '2019-03-07',
                    end: '2019-03-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2019-03-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2019-03-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2019-03-11',
                    end: '2019-03-13'
                },
                {
                    title: 'Meeting',
                    start: '2019-03-12T10:30:00',
                    end: '2019-03-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2019-03-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2019-03-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2019-03-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2019-03-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2019-03-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2019-03-28'
                }
            ]
        });

    });
</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>