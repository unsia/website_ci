@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Dosen Sistem Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Sistem Informasi</li>
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
                                <a class="nav-link" href="{{ url('/sistem-informasi') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/profil') }}">Profil Program
                                    Studi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sistem-informasi/prospek-karir') }}">Prospek
                                    Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/sistem-informasi/dosen') }}">Dosen</a>
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
                                    <td>Andrianingsih, S.Kom., MMSI</td>
                                    <td>Universitas Gunadarma</td>
                                    <td>Sistem Informasi</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>2</th>
                                    <td>Dr. Fauziah, S.Kom., MMSI</td>
                                    <td>Universitas Gunadarma</td>
                                    <td>Sistem Informasi</td>
                                    <td>Universitas Gunadarma</td>
                                    <td>Artifical Intelligent</td>
                                    <td>2018</td>
                                    <td><a href="{{ asset('homepages/documents/cv/CV Dr. Fauziah, S.Kom, MMSI.pdf') }}">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>3</th>
                                    <td>Ira Diana Sholihati, S.Kom., MMSI</td>
                                    <td>Universitas Gunadarma</td>
                                    <td>sistem Informasi Bisnis</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>4</th>
                                    <td>Ir. Endah Tri Esthi, MMSI</td>
                                    <td>Universitas Gunadarma</td>
                                    <td>Sistem Informasi</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="{{ asset('homepages/documents/cv/CV Ir. Endah Tri Esthi Handajani, MMSI.pdf') }}">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>5</th>
                                    <td>Yunan Fauzi Wijaya, S.Kom., MMSI</td>
                                    <td>Universitas Gunadarma</td>
                                    <td>Data Science</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="{{ asset('homepages/documents/cv/CV Yunan Fauzi Wijaya, SKom, MMSI.pdf') }}">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>6</th>
                                    <td>Gatot Supriyono, MMSI</td>
                                    <td>Universitas Gunadarma</td>
                                    <td>Sistem Informasi Bisnis</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>7</th>
                                    <td>Ari Gunawan, MMSI</td>
                                    <td>Universitas Gunadarma</td>
                                    <td>Data Science</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="{{ asset('homepages/documents/cv/CV Arie Gunawan.pdf') }}">Download</a></td>
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