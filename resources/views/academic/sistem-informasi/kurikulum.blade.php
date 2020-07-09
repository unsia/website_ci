@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Kurikulum Sistem Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Sistem Informasi</li>
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
                                <a class="nav-link" href="{{ url('/sistem-informasi') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/profil') }}">Profil Program
                                    Studi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/sistem-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/prospek-karir') }}">Prospek
                                    Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/profil-lulusan') }}">Profil
                                    Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('sistem-informasi.capaian_pembelajaran_lulusan') }}">Capaian
                                    Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <ul class="ml-4">
                                <li class="mb-3">
                                    <h4>KURIKULUM BERBASIS KPT-KKNI level 6</h4>
                                    <p style="text-align: justify">Kurikulum pendidikan tinggi Prodi Sistem Informasi (Prodi SI) merupakan body knowledge of information sistem yang tersusun atas perencanaan learning outcome sebagai bagian proses utama dalam menghasilkan outcome program. Prodi SI yang telah mendapatkan akreditasi BAN PT peringkat B pada 2014 berupaya intensif untuk semakin mengokohkan jati dirinya dalam menghasilkan lulusan yang bermutu di bidang information system dan diserap oleh stakeholder/user. Dalam upaya tersebut, Prodi SI melakukan upgrading kurikulum dari KBK menjadi KPT-KKNI (Kurikulum Pendidikan Tinggi berbasis KKNI). KPT-KKNI disusun berdasarkan analisis data tracer study dan rekomendasi program outcome dan learning outcome dari APTIKOM (Asosiasi Pendidikan Tinggi Informatika dan Komputer).</p>
                                </li>
                                <li>
                                    <h4>SEBARAN MATA KULIAH PROGRAM STUDI SISTEM INFORMASI 2020</h4>
                                    <p>Jumlah sks Program Studi (minimum untuk kelulusan) :  144 sks yang tersusun sebagai berikut:</p>
                                    <P>- Download File</P>
                                    <a href="{{ asset('homepages/documents/Kurikulum Program Studi Sistem Informasi.pdf') }}" class="btn btn-primary">KURIKULUM</a>
                                    <a href="{{ asset('homepages/documents/Deskripsi Mata Kuliah Sistem Informasi.pdf') }}" class="btn btn-primary">DESKRIPSI MATA KULIAH</a>
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