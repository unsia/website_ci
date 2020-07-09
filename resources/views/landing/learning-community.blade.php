@extends('layouts.main-page')

@section('active-pendaftaran', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Learning Community</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Fasilitas</li>
            <li>Learning Community</li>
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
                            <p class="text-justify">UNSIA menyediakan fasilitas ruangan Learning Community dengan fitur internet akses high-speed for free yang diperuntukkan bagi semua mahasiswa untuk melakukan aktifitas diskusi, sharing, presentasi tim dan browsing. Tujuan diadakannya Learning Community adalah mahasiswa dapat melakukan aktifitas akademik dan soft-skill di kampus UNSIA. Dengan cara tersebut, mahasiswa UNSIA dapat berkenalan satu sama lain untuk saling berbagi dan terciptanya kolaborasi aktif dalam berbagai hal. Mahasiswa diberikan kesempatan setiap hari untuk bisa saling diskusi topik-topik yang aktual dan memunculkan ide dan gagasan inovatif dalam kerangka penguatan soft-skill. Dengan cara demikian, Learning Community di UNSIA akan menghasilkan komunitas mahasiswa yang saling belajar, saling berbagi dan saling menguatkan satu sama lain untuk berhasil mencapai cita-cita.</p>
                            <div class="text-center mb-5">
                                <img src="{{ asset('homepages/images/fasilitas/lc1.jpg') }}" alt="">
                            </div>
                            <div class="text-center mb-5">
                                <img src="{{ asset('homepages/images/fasilitas/lc2.png') }}" alt="">
                            </div>
                            <p class="text-center">Sumber gambar: <a href="http://clipart-library.com/professional-learning-cliparts.html">clipart-library.com</a></p>
                            <div class="text-center mb-5">
                                <img src="{{ asset('homepages/images/fasilitas/lc3.jpg') }}" alt="">
                            </div>
                            <p class="text-center">Fasilitas ruangan Learning Community di Kampus UNSIA, Menara Ragunan.</p>
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