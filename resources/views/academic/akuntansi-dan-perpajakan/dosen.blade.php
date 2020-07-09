@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Dosen Akuntansi dan Perpajakan</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="/">Beranda</a></li>
            <li>Program Studi</li>
            <li>Akuntansi dan Perpajakan</li>
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
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/akuntansi-dan-perpajakan/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/akuntansi-dan-perpajakan/dosen') }}">Dosen</a>
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
                                    <td>Heni suryanti</td>
                                    <td>UMJ</td>
                                    <td>Akuntansi</td>
                                    <td>UUM/Unpadj</td>
                                    <td>Akuntansi</td>
                                    <td>2018</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>2</th>
                                    <td>Arni karina</td>
                                    <td>UNAS</td>
                                    <td>Manajemen</td>
                                    <td>UUM/UI</td>
                                    <td>Akuntansi</td>
                                    <td>2019</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>3</th>
                                    <td>Erwin Indriyanto</td>
                                    <td>Unpad</td>
                                    <td>Akuntansi</td>
                                    <td>UUM/Unpadj</td>
                                    <td>Akuntansi</td>
                                    <td>2019</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>4</th>
                                    <td>M. Nur</td>
                                    <td>-</td>
                                    <td>Akuntansi</td>
                                    <td>UUM</td>
                                    <td>Akuntansi</td>
                                    <td>2020</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>5</th>
                                    <td>Nungki Yartono</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>UUM</td>
                                    <td>Akuntansi</td>
                                    <td>2020</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>6</th>
                                    <td>Dipa Teruna</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>UUM</td>
                                    <td>Akuntansi</td>
                                    <td>2018</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>7</th>
                                    <td>Khairul S.Tobing</td>
                                    <td>Trisakti</td>
                                    <td>-</td>
                                    <td>UUM</td>
                                    <td>Akuntansi</td>
                                    <td>Akuntansi</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                                  <tr>
                                    <th>8</th>
                                    <td>Molina</td>
                                    <td>UMJ</td>
                                    <td>Akuntansi</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Akuntansi</td>
                                    <td>2020</td>
                                    <td><a href="#">Download</a></td>
                                  </tr>
                              </table>
                              <p>Rencana Penguatan Ilmu Pascadoktor</p>
                              <table class="table table-bordered">
                                <tr class="bg-info text-center">
                                  <th rowspan="2">No.</th>
                                  <th rowspan="2">Nama Dosen Tetap</th>
                                  <th colspan="3">S3</th>
                                  <th colspan="2">Post-Doctoral</th>
                                </tr>
                                <tr class="bg-success text-center">
                                  <th>Universitas</th>
                                  <th>Bidang Ilmu</th>
                                  <th>Tahun</th>
                                  <th>Universitas</th>
                                  <th>Tahun</th>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Padri Achyarsyah</td>
                                  <td>Unpadj</td>
                                  <td>Akuntansi</td>
                                  <td>2017</td>
                                  <td>Unpadj</td>
                                  <td>2019</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Bambang Subianto</td>
                                  <td>Undip</td>
                                  <td>Akuntansi</td>
                                  <td>2018</td>
                                  <td>Undip</td>
                                  <td>2020</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Asep Supriatna</td>
                                  <td>Undip</td>
                                  <td>Akuntansi</td>
                                  <td>2018</td>
                                  <td>Undip</td>
                                  <td>2020</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Zumratul Meini</td>
                                  <td>UI</td>
                                  <td>Akuntansi</td>
                                  <td>2018</td>
                                  <td>UI</td>
                                  <td>2020</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Ach. Aryanda</td>
                                  <td>Trisakti</td>
                                  <td>Akuntansi</td>
                                  <td>2018</td>
                                  <td>UI</td>
                                  <td>2020</td>
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