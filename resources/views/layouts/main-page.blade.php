<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="Website Resmi Universitas Siber Asia" />

    <!-- OG -->
    <meta property="og:title" content="Website Resmi Universitas Siber Asia" />
    <meta property="og:description" content="Website Resmi Universitas Siber Asia" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{ asset('homepages/images/favicon-usa.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('homepages/images/favicon-usa.png') }}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Universitas Siber Asia</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/assets.css') }}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/typography.css') }}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/shortcodes/shortcodes.css') }}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/menu.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('homepages/css/color/color-1.css') }}">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/vendors/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/vendors/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/vendors/revolution/css/navigation.css') }}">
    <!-- REVOLUTION SLIDER END -->

    <!-- ADDING STYLES CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/add-styles.css') }}">
    <!-- ADDING STYLES END-->

</head>

<body id="bg">
    <div class="page-wraper">

        <!-- Header Top ==== -->
        <header class="header rs-nav" style="height: 127px;">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="{{ route('landing.faq') }}"><i class="fa fa-question-circle"></i>Ask a
                                    Question</a>
                            </li>
                            <li><a href="mailto:asiacyberuniv@lms-usa.site"><i
                                        class="fa fa-envelope-o"></i>asiacyberuniv@lms-usa.site</a>
                            </li>
                            <li><a href="http://lms-usa.site/webmail" target="_blank"><i
                                        class="fa fa-envelope-open-o"></i>Web
                                    Mail</a>
                            </li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                {{-- <li>
                                    <select class="header-lang-bx">
                                        <option data-icon="flag flag-id">Indonesia</option>
                                        <option data-icon="flag flag-us">English US</option>
                                        <!-- <option data-icon="flag flag-uk">English UK</option> -->
                                    </select>
                                </li> --}}
                                <!-- <li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="{{ route('student.form_create_account') }}">Register</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <a href="/"><img src="{{ asset('homepages/images/logo-unsia.png') }}" alt=""></a>
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li><a href="javascript:;" class="btn-link" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/asiacyberuniversity/" class="btn-link" target="_blank"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <!-- Search Button ==== -->
                                    <li class="search-btn"><button id="quik-search-btn" type="button"
                                            class="btn-link"><i class="fa fa-search"></i></button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Search Box ==== -->
                        <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control"
                                    placeholder="Type to search">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="index.html"><img src="{{ asset('homepages/images/logo.png') }}" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav navigation">
                                <li>
                                    <a href="/">Beranda</a>
                                </li>
                                <li class="@yield('active-about')"><a href="javascript:;">Tentang UNSIA <i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('landing.salam_rektor') }}">Salam Rektor</i></a></li>
                                        <li><a href="{{ route('landing.kenapa_unsia') }}">Kenapa UNSIA?</i></a></li>
                                        <li><a href="{{ route('landing.keunggulan_unsia') }}">Keunggulan dan Manfaat
                                                UNSIA</i></a></li>
                                        <li><a href="{{ route('landing.list_of_partner') }}">List of Partner</i></a>
                                        </li>
                                        <li><a href="{{ route('landing.sejarah') }}">Sejarah UNSIA</i></a></li>
                                        <li><a href="{{ route('landing.visi_misi') }}">Visi Misi</i></a></li>
                                        <li><a href="{{ route('landing.struktur_organisasi') }}">Struktur
                                                Organisasi</i></a></li>
                                        <li><a href="{{ route('landing.faq') }}">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="menu-sub @yield('active-penerimaan')"><a href="javascript:;">Penerimaan<i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu sub">
                                        <li><a href="javascript:;">Jenjang S1<i class="fa fa-chevron-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('landing.jenjang_s1') }}">Info Pendaftaran</a>
                                                </li>
                                                <li><a href="{{ route('landing.admission_info') }}">Persyaratan
                                                        Pendaftaran</a></li>
                                                <li><a href="#">Periode Pendaftaran</a></li>
                                                <li><a href="http://portal.koreaswt.com/apply/index.jsp" target="_blank">Daftar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('landing.standar_biaya_perkuliahan') }}">Standar Biaya
                                                Perkuliahan</a></li>
                                        <li><a href="{{ route('landing.beasiswa') }}">Beasiswa</a></li>
                                        <li><a href="{{ route('landing.pembiayaan_soft_loan') }}">Pembiayaan Soft
                                                Loan</a></li>
                                    </ul>
                                </li>
                                <li class="menu-sub @yield('active-akademik')"><a href="javascript:;">Akademik <i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu sub">
                                        <li><a href="javascript:;">Program Studi <i class="fa fa-chevron-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('/manajemen-kontemporer') }}">Manajemen
                                                        Kontemporer</a></li>
                                                <li><a href="{{ url('/sistem-informasi') }}">Sistem Informasi</a></li>
                                                <li><a href="{{ url('/teknologi-informasi') }}">Teknologi Informasi</a>
                                                </li>
                                                <li><a href="{{ url('/akuntansi-dan-perpajakan') }}">Akuntansi dan
                                                        Perpajakan</a></li>
                                                <li><a href="{{ url('/penyiaran-dan-komunikasi-digital') }}">Penyiaran
                                                        dan Komunikasi Digital</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;">Proses Akademik<i class="fa fa-chevron-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('landing.academic_guide') }}">Panduan Akademik</a>
                                                </li>
                                                <li><a href="{{ route('landing.teaching_professor') }}">Teaching
                                                        Professor</a>
                                                </li>
                                                <li><a href="{{ route('landing.keunggulan_lulusan') }}">Keunggulan
                                                        Lulusan UNSIA</a>
                                                </li>
                                                <li><a href="{{ route('landing.peraturan_akademik') }}">Peraturan
                                                        Akademik</a></li>
                                                <li><a href="{{ route('landing.kalender_akademik') }}">Kalender
                                                        Akademik</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('landing.program_kampus_merdeka') }}">Program Kampus
                                                Merdeka</a></li>
                                        <li><a href="{{ route('landing.panduan_pembelajaran_online') }}">Panduan
                                                Pembelajaran Online</a></li>
                                        <li><a href="http://lms.unsia.id" target="_blank">Sistem Pembelajaran
                                                Online</a></li>
                                        <li><a href="http://akademik.unsia.id" target="_blank">Sistem Informasi
                                                Akademik</a></li>
                                        <li><a href="http://cyberlibrary.unsia.id" target="_blank">Digital Library</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Fasilitas<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('landing.learning_community') }}">Learning
                                                Community</i></a></li>
                                        <li><a href="{{ route('landing.laboratorium_virtual') }}">Laboratorium
                                                Virtual</i></a></li>
                                        <li><a href="{{ route('landing.studio_multimedia') }}">Studio Multimedia</i></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@yield('active-arsip')"><a href="javascript:;">Arsip<i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('landing.berita') }}">Berita</a></li>
                                        <li><a href="#">Kegiatan</a></li>
                                        <li><a href="{{ route('landing.siaran_pers') }}">Siaran Pers</a></li>
                                    </ul>
                                </li>
                                <li class="@yield('active-kontak')">
                                    <a href="{{ route('landing.kontak') }}">Kontak</a>
                                </li>
                                {{-- <li>
								<a href="http://portal.koreaswt.com/portal/login">Sistem Akademik</a>
							</li> --}}
                            </ul>
                            <div class="nav-social-link">
                                <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/asiacyberuniversity/"><i
                                        class="fa fa-instagram"></i></a>
                                <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- header END ==== -->
        <!-- Inner Content Box ==== -->
        <div class="page-content">
            <!-- Page Content Box ==== -->
            @yield('contentBox')
            <!-- Page Content Box END ==== -->
        </div>
        <!-- Inner Content Box END ==== -->
        <!-- Footer ==== -->
        <footer>
            <div class="footer-top">
                <div class="pt-exebar">
                    <div class="container">
                        <div class="d-flex align-items-stretch">
                            <div class="pt-logo mr-auto">
                                <a href="/"><img src="{{ asset('homepages/images/logo-unsia.png') }}" alt=""
                                        width="211px" /></a>
                            </div>
                            <div class="pt-social-link">
                                <ul class="list-inline m-a0">
                                    <li><a href="#" class="btn-link" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="btn-link" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn-link" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/asiacyberuniversity/" class="btn-link" target="_blank"><i
                                                class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="pt-btn-join">
                                <a href="http://portal.koreaswt.com/apply/index.jsp" class="btn ">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                            <div class="widget">
                                <h5 class="footer-title">Kontak Kami</h5>
                                <ul>
                                    <li><i class="fa fa-home mb-3"></i>&nbsp;&nbsp;&nbsp;&nbsp;Menara UNAS Ragunan</li>
                                    <li><i class="fa fa-phone mb-3"></i>&nbsp;&nbsp;&nbsp;&nbsp;+62-21-27806189</li>
                                    <li><i class="fa fa-envelope mb-3"></i>&nbsp;&nbsp;&nbsp;&nbsp;asiacyberuni@gmail.com</li>
                                </ul>
                                {{-- <table class="table table-borderless">
                                    <tr>
                                      <th class="text-right"><i class="fa fa-home"></i></th>
                                      <td >Menara UNAS Ragunan</td>
                                    </tr>
                                    <tr>
                                      <th class="text-right"><i class="fa fa-phone"></i></th>
                                      <td >+62-21-27806189</td>
                                    </tr>
                                    <tr>
                                      <th class="text-right"><i class="fa fa-envelope"></i></th>
                                      <td >asiacyberuni@gmail.com</td>
                                    </tr>
                                </table> --}}
                                {{-- <p class="m-b20">Masukkan email anda untuk mengetahui info terupdate dari kami</p>
                                <div class="subscribe-form m-b20">
                                    <form class="subscription-form" action="#" method="post">
                                        <div class="ajax-message"></div>
                                        <div class="input-group">
                                            <input name="email" required="required" class="form-control"
                                                placeholder="Your Email Address" type="email">
                                            <span class="input-group-btn">
                                                <button name="submit" value="Submit" type="submit" class="btn"><i
                                                        class="fa fa-arrow-right"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">UNSIA</h5>
                                        <ul>
                                            <li><a href="/">Beranda</a></li>
                                            <li><a href="{{ route('landing.about') }}">Tentang Kami</a></li>
                                            <li><a href="{{ route('landing.faq') }}">Tanya Jawab</a></li>
                                            <li><a href="{{ route('landing.kontak') }}">Kontak</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-8 col-md-8 col-sm-8">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title">Program Studi</h5>
                                        <ul>
                                            <li><a href="{{ url('/manajemen-kontemporer') }}">Manajemen Kontemporer</a>
                                            </li>
                                            <li><a href="{{ url('/sistem-informasi') }}">Sistem Informasi</a></li>
                                            <li><a href="{{ url('/teknologi-informasi') }}">Teknologi Informasi</a></li>
                                            <li><a href="{{ url('/akuntansi-dan-perpajakan') }}">Akuntansi dan
                                                    Perpajakan</a></li>
                                            <li><a href="{{ url('/penyiaran-dan-komunikasi-digital') }}">Penyiaran dan
                                                    Komunikasi Digital</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Courses</h5>
									<ul>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="courses-details.html">Details</a></li>
										<li><a href="membership.html">Membership</a></li>
										<li><a href="profile.html">Profile</a></li>
									</ul>
								</div>
							</div> -->
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                            <div class="widget widget_gallery gallery-grid-4">
                                <h5 class="footer-title">Galeri Kami</h5>
                                <ul class="magnific-image">
                                    <li><a href="{{ asset('homepages/images/gallery/pic1.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('homepages/images/gallery/pic1.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('homepages/images/gallery/pic2.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('homepages/images/gallery/pic2.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('homepages/images/gallery/pic3.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('homepages/images/gallery/pic3.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('homepages/images/gallery/pic4.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('homepages/images/gallery/pic4.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('homepages/images/gallery/pic5.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('homepages/images/gallery/pic5.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('homepages/images/gallery/pic6.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('homepages/images/gallery/pic6.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('homepages/images/gallery/pic7.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('homepages/images/gallery/pic7.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ asset('homepages/images/gallery/pic8.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('homepages/images/gallery/pic8.jpg') }}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <?php echo date("Y"); ?> | Copyright ©
                            Universitas Siber Asia <br> Tema oleh <a target="_blank"
                                href="https://www.templateshub.net">templateshub.net</a></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END ==== -->
        <button class="back-to-top fa fa-chevron-up"></button>
    </div>

    <!-- External JavaScripts -->
    <script src="{{ asset('homepages/js/jquery.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> --}}
    <script src="{{ asset('homepages/vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('homepages/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('homepages/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('homepages/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('homepages/vendors/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('homepages/vendors/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('homepages/vendors/counter/counterup.min.js') }}"></script>
    <script src="{{ asset('homepages/vendors/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ asset('homepages/vendors/masonry/masonry.js') }}"></script>
    <script src="{{ asset('homepages/vendors/masonry/filter.js') }}"></script>
    <script src="{{ asset('homepages/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('homepages/js/functions.js') }}"></script>
    <script src="{{ asset('homepages/js/contact.js') }}"></script>
    <!-- <script src="{{ asset('homepages/vendors/switcher/switcher.js') }}"></script> -->
    <!-- Revolution JavaScripts Files -->
    <script src="{{ asset('homepages/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('homepages/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            } else {
                ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/vendors/revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },

                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [768, 600, 600, 600],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "enterpoint",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                        type: "scroll",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $('a[href*=\\#]').bind('click', function (e) {
                e.preventDefault(); // prevent hard jump, the default behavior

                var target = $(this).attr("href"); // Set the target as variable

                // perform animated scrolling by getting top-position of target-element and set it as scroll target
                $('html, body').stop().animate({
                    scrollTop: $(target).offset().top
                }, 600, function () {
                    location.hash = target; //attach the hash (#jumptarget) to the pageurl
                });

                return false;
            });
        });

        $(window).scroll(function () {
            var scrollDistance = $(window).scrollTop();

            // Show/hide menu on scroll
            //if (scrollDistance >= 850) {
            //		$('nav').fadeIn("fast");
            //} else {
            //		$('nav').fadeOut("fast");
            //}

            // Assign active class to nav links while scolling
            $('.page-section').each(function (i) {
                if ($(this).position().top <= scrollDistance) {
                    $('.navigation li.active').removeClass('active');
                    $('.navigation li').eq(i).addClass('active');
                }
            });
        }).scroll();
    </script>
</body>

</html>
