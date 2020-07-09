@extends('layouts.main-page')

@section('active-pendaftaran', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Studio Multimedia</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Fasilitas</li>
            <li>Studio Multimedia</li>
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
                            <p class="text-justify">UNSIA menyediakan fasilitas Studio Multimedia menggunakan teknologi Video Recording dari Korea Selatan. Studio Multimedia merupakan salah satu fasilitas utama dalam menunjang kegiatan pembelajaran, yakni untuk memproduksi video e-learning yang berkualitas tinggi dengan disertai teknologi multimedia, animasi dan simulasi dengan software. Studio Multimedia ini juga dapat digunakan oleh Mahasiswa untuk melakukan pembuatan konten pembelajaran.</p>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3">
                                    <img src="{{ asset('homepages/images/fasilitas/sm1.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('homepages/images/fasilitas/sm2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3">
                                    <img src="{{ asset('homepages/images/fasilitas/sm3.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('homepages/images/fasilitas/sm4.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <video controls src="{{ asset('homepages/images/video/studio-multimedia.mp4') }}"></video>
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