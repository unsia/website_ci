@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Kurikulum Teknologi Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Teknologi Informasi</li>
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
                                <a class="nav-link" href="{{ url('/teknologi-informasi') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="{{ url('/teknologi-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/teknologi-informasi/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <ul class="ml-4">
                                <li class="mb-3">
                                    <h4>KURIKULUM BERBASIS KPT-KKNI level 6</h4>
                                    <p style="text-align: justify">Dengan penerapan KPT-KKNI level 6, Teknik Informatika telah merancang SKPI (Surat Keterangan Pendamping Ijazah) yang menerangkan jenjang pencapaian learning outcome lulusan. Selain itu, SKPI dirancang sebagai <i>recognition of competence outside the running curricula</i>, artinya kompetensi yang dicapai oleh peserta didik akan diakui oleh Asia Cyber University sebagai pelengkap pencapaian <i>learning outcome</i>. Sistem <i>recognition</i> atau pengakuan kompetensi yang dicapai oleh peserta didik adalah meliputi 3 komponen utama yakni kompetensi pendukung professional, kompetensi pendukung <i>soft skill</i>, dan kompetensi pendukung talenta/jalur bakat. Dengan demikian, penerapan KPT-KKNI level 6 di Teknik Informatika berupaya konsisten dalam membangun mutu lulusan di bidang Teknik Informatika.</p>
                                    <a href="{{ asset('homepages/documents/Kurikulum Program Studi TI.pdf') }}" class="btn btn-primary">KURIKULUM</a>
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