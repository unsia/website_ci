@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Prospek Karir Manajemen Kontemporer</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Manajemen Kontemporer</li>
            <li>Prospek Karir</li>
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
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/manajemen-kontemporer/prospek-karir') }}">Prospek Karir</a>
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
                            <p>Lulusan Program Studi Manajemen Kontemporer Universitas Siber Asia nantinya diharapkan dapat menjadi orofesi seperti dibawah ini</p>
                            <ol class="ml-4">
                                <li>Entrepreneur/Wirausaha yang berwawasan strategi bisnis dan teknologi informasi</li>
                                <li>Chief Operational Officer pada korporasi/perusahaan</li>
                                <li>Konsultan Manajemen Strategi/bisnis global</li>
                                <li>Manajer yang berorientasi e-Bisnis</li>
                                <li>Manajer pada hampir semua bidang industri (manufaktur, jasa, transportasi, retail, perbankan)</li>
                                <li>Manajer HRD, Marketing, Accounting, Finance pada korporasi/perusahaan multinasional</li>
                                <li>Business researcher/developer pada industri perbankan, asuransi, jasa keuangan, perhotelan, dan berbagai industrylainnya</li>
                                <li>Manajer project and development</li>
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