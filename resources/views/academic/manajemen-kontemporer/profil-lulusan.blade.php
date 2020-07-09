@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Profil Lulusan <br> Manajemen Kontemporer</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Manajemen Kontemporer</li>
            <li>Profil Lulusan</li>
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
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/manajemen-kontemporer/profil-lulusan') }}">Profil Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manajemen-kontemporer.capaian_pembelajaran_lulusan') }}">Capaian Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <p>Profile lulusan Program Studi Manajemen dirumuskan berdasarkan hasil Tracer Study yang dilakukan oleh Asosiasi Manajemen menghasilkan konsentrasi mayoritas dari sebagian besar alumni di bidang pekerjaan manajemen pemasaran, keuangan, sumberdaya manusia dan operasional perusahaan.  Profile lulusan yang dirumuskan tersebut menjadi acuan Program Studi Manajemen Kontemporer untuk dideskripsikan pengetahuan dan keahlian spesifiknya. Selanjutnya Profile lulusan Program Studi Manajemen Kontemporer Asia Cyber University dipersiapkan untuk menjadi sarjana Manajemen dengan profil sebagaimana berikut ini:</p>
                            <table class="table table-bordered">
                                <tr>
                                    <th>No.</th>
                                    <th>Profil Lulusan</th>
                                    <th>Deskripsi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Manajer Lini Pertama</td>
                                    <td>Bertanggung jawab atas pekerjaan karyawan non manajer yang dipimpinnya</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Peneliti Pemula</td>
                                    <td>Bertanggung jawab atas proses perancangan, pengambilan data, input data dan interprestasi riset yang Sederhana</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wirausahawan Pemula</td>
                                    <td>Bertanggung jawab atas keberlangsungan (eksistensi) bisnis yang didirikannya</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection