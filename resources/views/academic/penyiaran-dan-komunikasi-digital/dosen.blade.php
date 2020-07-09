@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Dosen Penyiaran dan Komunikasi Digital</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Penyiaran dan Komunikasi Digital</li>
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
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penyiaran-dan-komunikasi-digital/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/penyiaran-dan-komunikasi-digital/dosen') }}">Dosen</a>
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
                                    <td>Dian Metha Ariyanti, S.Sos., M.Si</td>
                                    <td>Univervsitas Indonesia</td>
                                    <td>Manajemen Komunikasi/ Manajemen Media</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>2011</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>2</th>
                                    <td>Adi Prakoso, M.Si</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>3</th>
                                    <td>Romika Junaidi</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>4</th>
                                    <td>Daniel Wisnu W</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>5</th>
                                    <td>Yayu Sriwartini, S.Sos., M.Si</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Komunikasi</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>6</th>
                                    <td>Dr. Dwi Kartika</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Komunikasi</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>7</th>
                                    <td>Dr Nurhasanah</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Universitas Sahid</td>
                                    <td>Komunikasi</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>8</th>
                                    <td>Rosanah, M.Si</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>9</th>
                                    <td>Nursatyo, M.Si</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>10</th>
                                    <td>Siska Fitria</td>
                                    <td>Universitas Islam Negeri</td>
                                    <td>Komunikasi Dahwah</td>
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