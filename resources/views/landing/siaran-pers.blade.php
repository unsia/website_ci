@extends('layouts.main-page')

@section('active-arsip', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Siaran Pers</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Arsip</li>
            <li>Siaran Pers</li>
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
                                <img src="{{ asset('homepages/images/berita/mpr-unas.jpg') }}" class="card-img-top"
                                    alt="Foto-Berita-3">
                                <div class="card-body">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-calendar"></i>Agustus 26, 2019</a></li>
                                    </ul>
                                    <h5 class="post-title">YMIK Terima Izin Pendirian Universitas Siber Pertama di Indonesia
                                    </h5>
                                    <p>BALI (YMIK) – Yayasan Memajukan Ilmu dan Kebudayaan (YMIK) menerima izin prinsip pendirian Universitas Siber Asia dari Menteri Riset, Teknologi dan Pendidikan Tinggi, Prof.  Mohamad Nasir, Ph.D., Ak, dalam acara Hari Kebangkitan Teknologi Nasional (HAKTEKNAS) ke 24 di Sanur, Bali, Senin (26/8). Unsiber merupakan universitas swasta berbasis full online learning pertama di Indonesia yang mendapatkan lisensi dari pemerintah.</p>
                                    <div class="post-extra">
                                        <a href="{{ asset('homepages/documents/YMIK Terima Izin Pendirian Universitas Siber Pertama di Indonesia.pdf') }}"
                                            class="btn-link">READ MORE</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('homepages/images/berita/FotoRilis-1.jpeg') }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>Februari 28, 2019</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title">Kunjungi Korea Selatan, Menristek Dikti Antusias Terapkan Pembelajaran Berbasis Cyber Di Indonesia</h5>
                                            <p class="card-text">JAKARTA (UNAS) – Menteri Riset Teknologi dan Pendidikan Tinggi (MENRISTEK DIKTI), Prof. H. Mohamad Nasir, Ak., PhD bersama delegasi Indonesia dan Rektor Universitas Siber Asia, Jan Youn Cho, Ph.D., CPA dan Rektor Universitas Nasional, Dr. El Amry Bermawi Putera, M.A melakukan kunjungan kerja ke Korea Selatan pada 25-26 Februari 2019. Kunjungan ke Korea Selatan selain untuk meningkatkan kerjasama antara kedua negara dalam bidang pendidikan, juga dalam rangka melihat implementasi pembelajaran berbasis online atau cyber di negara gingseng tersebut.</p>
                                            <div class="post-extra">
                                                <a href="{{ asset('homepages/documents/Kunjungi Korea Selatan, Menristek Dikti Antusias Terapkan Pembelajaran Berbasis Cyber Di Indonesia.pdf') }}"
                                                    class="btn-link">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('homepages/images/berita/FotoRilis-3.jpg') }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <ul class="media-post">
                                                <li><a href="#"><i class="fa fa-calendar"></i>Sep 4, 2016</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title">Rintis Cyber University dengan Universitas Korea Selatan</h5>
                                            <p class="card-text">JAKARTA (UNAS) – Yayasan Memajukan Ilmu dan Kebudayaan melalui Universitas Nasional kembali meningkatkan kerjasama dengan universitas asing. Kali ini kerjasama dilakukan dengan Cyber Hankuk University for Foreign Studies (CUFS) asal Korea Selatan. Keduanya sepakat untuk merintis pendirian Cyber University yang memungkinkan mahasiswa kedua universitas dapat menikmati pembelajaran via online dari kedua negara.</p>
                                            <div class="post-extra">
                                                <a href="{{ asset('homepages/documents/Rintis Cyber University dengan Universitas Korea Selatan.pdf') }}"
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