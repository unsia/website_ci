@extends('layouts.main-page')

@section('active-berita', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Berita</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Arsip</li>
            <li>Berita</li>
        </ul>
    </div>
</div>
<!-- Page Heading Box END ==== -->
<!-- Page Content Box ==== -->
<div class="content-block">
    <!-- About Us ==== -->
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-b30">
                    <div class="feature-container">
                        <div class="icon-content mb-2">
                            <div class="card mb-3">
                                <img src="{{ asset('homepages/images/berita/Foto-Berita-3.jpg') }}" class="card-img-top"
                                    alt="Foto-Berita-3">
                                <div class="card-body">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-calendar"></i>April 16 2020</a></li>
                                        <li><a href="#"><i class="fa fa-user"></i>By kompasiana</a></li>
                                    </ul>
                                    <h5 class="post-title">Mahasiswa Tetap Kuliah Via Daring di Saat Pandemi Covid-19
                                    </h5>
                                    <p>Pasca merebaknnya pandemi covid-19 pemerintah mengeluarkan kebijakan pembatasan
                                        sosial bagi seluruh masyarakat Indonesia guna memutus mata rantai penyebaran
                                        virus covid-19. Sebagai tindak lanjutnya rektor di semua perguruan tinggi di
                                        Indonesia akhirnya mengeluarkan surat keputusan untuk diberlakukannya aktifitas
                                        perkuliahan secara daring atau online tidak tatap muka seperti biasanya.</p>
                                    <div class="post-extra">
                                        <a href="https://www.kompasiana.com/gilangswn25/5e987deb097f3629161d51f2/mahasiswa-tetap-kuliah-via-daring-disaat-pandemi-covid-19"
                                            class="btn-link">READ MORE</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('homepages/images/berita/foto-berita-2.jpeg') }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>April 7 2020</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i>By kompas.com</a></li>
                                            </ul>
                                            <h5 class="card-title">Ribuan Video Telekonferensi Zoom Bocor di Internet
                                            </h5>
                                            <p class="card-text">Jakarta – Zoom, sebuah aplikasi telekonferensi yang
                                                sedang naik daun di tengah pandemic Covid-19 mulai diragukan
                                                keamanannya. Terdapat laporan terbaru yang menyebutkan bahwa ribuan
                                                rekaman video dari teleconference Zoom bogor atau banyak tersebar di
                                                internet</p>
                                            <div class="post-extra">
                                                <a href="https://tekno.kompas.com/read/2020/04/07/07030057/ribuan-video-telekonferensi-zoom-bocor-di-internet"
                                                    class="btn-link">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('homepages/images/berita/foto-Berita-1.jpg') }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>April 1 2020</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i>By MPR UNAS</a></li>
                                            </ul>
                                            <h5 class="card-title">Pandemi Covid-19 jadi momentum bergotong royong</h5>
                                            <p class="card-text">Jakarta,- Dosen Sosiolog Universitas Nasional (Unas)
                                                Adilita Pramanti, menyatakan, penyebaran pandemi coronavirus anyar
                                                (Covid-19) di Indonesia menjadi momentum untuk bergotong royong. Baik
                                                oleh pemerintah, swasta, maupun masyarakat</p>
                                            <div class="post-extra">
                                                <a href="https://www.unas.ac.id/berita/pandemi-covid-19-jadi-momentum-bergotong-royong/"
                                                    class="btn-link">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('homepages/images/blog/latest-blog/blog-1.jpg') }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>Feb 28 2019</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i>By Ristekdikti</a></li>
                                            </ul>
                                            <h5 class="card-title">Indonesia-Korea Selatan Menjajaki Kerja Sama Cyber University</h5>
                                            <p class="card-text">Jakarta – Pendidikan dengan teknologi cyber university harus dipandang sebagai alat untuk
                                                meningkatkan kualitas pembelajaran.</p>
                                            <div class="post-extra">
                                                <a href="https://www.ristekbrin.go.id/kabar/indonesia-korea-selatan-menjajaki-kerja-sama-cyber-university/"
                                                    class="btn-link">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('homepages/images/blog/latest-blog/blog-2.jpg') }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>Sep 27 2018</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i>By Jawapos</a></li>
                                            </ul>
                                            <h5 class="card-title">Indonesia
                                                Cyber University Siap Dibentuk, Ini Peranannya</h5>
                                            <p class="card-text">Regulasi baru tentang pendidikan jarak jauh (PJJ) atau distance learning telah
                                                diterbitkan Menristekdikti Mohamad Nasir.</p>
                                            <div class="post-extra">
                                                <a href="https://www.jawapos.com/nasional/pendidikan/27/09/2018/indonesia-cyber-university-siap-dibentuk-ini-peranannya/"
                                                    class="btn-link">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('homepages/images/blog/latest-blog/blog-3.jpg') }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>Maret 28 2018</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i>By Mediaindonesia</a></li>
                                            </ul>
                                            <h5 class="card-title">Cyber
                                                University Awasi Sistem Perkuliahan Online.</h5>
                                            <p class="card-text">MENTERI Riset Teknologi dan Pendidikan Tinggi M Nasir menyebutkan keberadaan 'cyber
                                                university' bakal mengawasi sistem perkuliahan daring (online) yang dilakukan perguruan
                                                tinggi.</p>
                                            <div class="post-extra">
                                                <a href="https://mediaindonesia.com/read/detail/151977-menristekditi-cyber-university-awasi-sistem-perkuliahan-online"
                                                    class="btn-link">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('homepages/images/berita/beranda/dua.jpg') }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>Februari 13, 2017</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i>By MPR UNAS</a></li>
                                            </ul>
                                            <h5 class="card-title">YMIK RESMIKAN GEDUNG KULIAH BARU</h5>
                                            <p class="card-text">JAKARTA (UNAS) – Yayasan Memajukan Ilmu dan Kebudayaan (YMIK) menambah fasilitas baru untuk perkuliahan, dengan meresmikan Gedung baru di kawasan Jakarta Selatan.</p>
                                            <div class="post-extra">
                                                <a href="https://www.unas.ac.id/berita/universitas-nasional-resmikan-gedung-kuliah-baru/"
                                                    class="btn-link">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us END ==== -->
</div>
<!-- Page Content Box END ==== -->
@endsection