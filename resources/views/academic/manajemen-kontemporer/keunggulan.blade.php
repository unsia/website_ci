@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Keunggulan Manajemen Kontemporer</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Manajemen Kontemporer</li>
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
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/profil') }}">Profil Program Studi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/manajemen-kontemporer/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/profil-lulusan') }}">Profil Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manajemen-kontemporer.capaian_pembelajaran_lulusan') }}">Capaian Pembelajaran Lulusan</a>
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