@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Kurikulum Akuntansi dan Perpajakan</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Akuntansi dan Perpajakan</li>
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
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="{{ url('/akuntansi-dan-perpajakan/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <ul class="ml-4">
                                <li class="mb-3">
                                    <h4>KURIKULUM BERBASIS KPT-KKNI level 6</h4>
                                    <p style="text-align: justify">Dengan penerapan KPT-KKNI level 6, Akuntansi & Perpajakan telah merancang SKPI (Surat Keterangan Pendamping Ijazah) yang menerangkan jenjang pencapaian learning outcome lulusan. Selain itu, SKPI dirancang sebagai recognition of competence outside the running curricula, artinya kompetensi yang dicapai oleh peserta didik akan diakui oleh Asia Cyber University sebagai pelengkap pencapaian learning outcome. Sistem recognition atau pengakuan kompetensi yang dicapai oleh peserta didik adalah meliputi 3 komponen utama yakni kompetensi pendukung professional, kompetensi pendukung soft skill, dan kompetensi pendukung talenta/jalur bakat. Dengan demikian, penerapan KPT-KKNI level 6 di Akuntansi & Perpajakan berupaya konsisten dalam membangun mutu lulusan di bidang Akuntansi & Perpajakan.</p>
                                    <a href="{{ asset('homepages/documents/Kurikulum Program Studi Akuntansi dan Perpajakan.pdf') }}" class="btn btn-primary">KURIKULUM</a>
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