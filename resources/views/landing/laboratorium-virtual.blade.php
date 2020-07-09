@extends('layouts.main-page')

@section('active-pendaftaran', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Laboratorium Virtual</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Fasilitas</li>
            <li>Laboratorium Virtual</li>
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
                            <p class="text-justify">UNSIA dalam menyelenggarakan kegiatan belajar mengajar dengan metode 100% full-online learning, merancang dan menyediakan adanya Virtual Laboratory atau Laboratorium Virtual. Virtual Labs merupakan fasilitas pembelajaran dimana mahasiswa diberikan video tutorial dari suatu modul praktikum pada Mata Kuliah Program Studi. Video tutorial diberikan di LMS (Learning Management System) sesuai dengan desain modul praktikum pada RPS (Rencana Pembelajaran Semester). Dengan mengikuti instruksi tutorial video, mahasiswa dapat langsung mempraktekannya langsung dengan bantuan software atau perangkat lunak untuk mencoba langkah-langkah instruksi. Dalam Virtual Labs di LMS, disediakan link-link software yang bersifat free untuk diunduh dan dinstall secara mandiri oleh mahasiswa di PC atau laptop. Hasil dari simulasi dengan software atau praktikum mandiri selanjutnya dapat diunggah di LMS dan diberikan assesmen oleh dosen pengampu Mata Kuliah.</p>
                            <div class="text-center mb-5">
                                <img src="{{ asset('homepages/images/fasilitas/lv1.png') }}" alt="">
                            </div>
                            <p>Berikut adalah contoh video teaser Virtual Lab. Yang mendemontrasikan suatu kegiatan perancangan.</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <video controls src="{{ asset('homepages/images/video/lab-virtual.mp4') }}"></video>
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