@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Dosen Manajemen Kontemporer</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Manajemen Kontemporer</li>
            <li>Dosen</li>
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
                                <a class="nav-link active" href="{{ url('/manajemen-kontemporer/dosen') }}">Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/profil-lulusan') }}">Profil Lulusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manajemen-kontemporer.capaian_pembelajaran_lulusan') }}">Capaian Pembelajaran Lulusan</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <table class="table table-bordered text-center">
                                  <tr class="bg-info">
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama Dosen Tetap</th>
                                    <th colspan="2">S2</th>
                                    <th colspan="3">S3</th>
                                    <th rowspan="2">CV</th>
                                  </tr>
                                  <tr class="bg-success">
                                    <th>Universitas</th>
                                    <th>Bidang Ilmu</th>
                                    <th>Universitas</th>
                                    <th>Bidang Ilmu</th>
                                    <th>Tahun</th>
                                  </tr>
                                  <tr>
                                    <th>1</th>
                                    <td>Dr. Ir. Edi Sugiono,  SE., MM</td>
                                    <td>Universitas  Negeri Jember</td>
                                    <td>Manajemen</td>
                                    <td>Universitas Brawijaya</td>
                                    <td>Manajemen SDM</td>
                                    <td>2018</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>2</th>
                                    <td>Dr. Sugeng Prasetno, SE., MH.</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Manajemen</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Manajemen Strategik</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>3</th>
                                    <td>Dr. Kusama, Pramanajati SE., M.Si.M.</td>
                                    <td>Inggris</td>
                                    <td>Manajemen</td>
                                    <td>Universitas Gajah Mada</td>
                                    <td>Manajemen Keuangan</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>4</th>
                                    <td>Drs. Suadi Putra, M.Si.M</td>
                                    <td>Universitas Nasional</td>
                                    <td>Manajemen</td>
                                    <td>Unhas</td>
                                    <td>Manajemen Pemasaran</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>5</th>
                                    <td>Dwitya  Kirana Amry, B.Sc., MSC.</td>
                                    <td>Warwick University England</td>
                                    <td>Manajemen</td>
                                    <td>Warwick University England</td>
                                    <td>Manajemen</td>
                                    <td>2019</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>6</th>
                                    <td>Mufidah Sahid SE., MM.</td>
                                    <td>Universitas Nasional</td>
                                    <td>Manajemen</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>2016</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>7</th>
                                    <td>Dr. Sukusen Soemarinda, DipTech., MBA.</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Ekonomi Manajemen</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
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