@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Keunggulan Penyiaran dan Komunikasi Digital</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Penyiaran dan Komunikasi Digital</li>
            <li>Keunggulan</li>
        </ul>
    </div>
</div>
<!-- Page Heading Box END ==== -->

<!-- Page Content Box ==== -->
<div class="content-block">
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-b30">
                    <div class="feature-container">
                        <ul class="nav nav-tabs mb-4">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/penyiaran-dan-komunikasi-digital/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <ol class="ml-4">
                                <li>Unggul dalam bidang pengetahuan Teknologi Informasi</li>
                                <li>Konten Pendidikan berkualitas tinggi guna mempersiapkan mahasiswa menjadi individu yang aktif dan fleksibel sesuai dengan perkembangan teknologi</li>
                                <li>Dosen dan pengajar yang mumpuni dengan melibatkan para ahli dan professional</li>
                                <li>Memberikan bimbingan dan arahan studi yang seksama</li>
                                <li>Membentuk dan menjembatani jaringan komunikasi dengan para alumni dan professional di bidangnya</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection