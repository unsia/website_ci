@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Kurikulum Penyiaran dan Komunikasi Digital</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Penyiaran dan Komunikasi Digital</li>
            <li>Kurikulum</li>
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
                                <a class="nav-link active"
                                    href="{{ url('/penyiaran-dan-komunikasi-digital/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <ul class="ml-4">
                                <li class="mb-3">
                                    <h4>KURIKULUM BERBASIS KPT-KKNI level 6</h4>
                                    <p style="text-align: justify">Dengan penerapan KPT-KKNI level 6, Penyiaran dan Komunikasi Digital  telah merancang SKPI (Surat Keterangan Pendamping Ijazah) yang menerangkan jenjang pencapaian learning outcome lulusan. Selain itu, SKPI dirancang sebagai recognition of competence outside the running curricula, artinya kompetensi yang dicapai oleh peserta didik akan diakui oleh Asia Cyber Universitysebagai pelengkap pencapaian learning outcome. Sistem recognition atau pengakuan kompetensi yang dicapai oleh peserta didik adalah meliputi 3 komponen utama yakni kompetensi pendukung professional, kompetensi pendukung soft skill, dan kompetensi pendukung talenta/jalur bakat. Dengan demikian, penerapan KPT-KKNI level 6 di Penyiaran dan Komunikasi Digital  berupaya konsisten dalam membangun mutu lulusan di bidang komunikasi</p>
                                </li>
                                <li>
                                    <h4>SEBARAN MATA KULIAH PROGRAM STUDI SISTEM INFORMASI 2020</h4>
                                    <p>Jumlah sks Program Studi (minimum untuk kelulusan) :  144 sks yang tersusun sebagai berikut:</p>
                                    <p>Secara keseluruhan, terdapat 42 mata kuliah di Prodi Penyiaran dan Komunikasi Digital yang terdistribusi ke dalam 7 semester. Berikut perinciannya:</p>
                                    <P>- Download File</P>
                                    <a href="{{ asset('homepages/documents/Kurikulum Prodi Penyiaran dan Komunikasi Digital.pdf') }}" class="btn btn-primary">KURIKULUM</a>
                                    <a href="{{ asset('homepages/documents/Distribusi Mata Kuliah Penyiaran dan Komunikasi Digital.xlsx') }}" class="btn btn-success">DISTRIBUSI MATA KULIAH</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection