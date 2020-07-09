@extends('layouts.main-page')

@section('active-pendaftaran', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Standar Biaya Perkuliahan</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Penerimaan</li>
            <li>Standar Biaya Perkuliahan</li>
        </ul>
    </div>
</div>
<!-- Page Heading Box END ==== -->
<!-- Page Content Box ==== -->
<div class="content-block">
    <!-- About Us ==== -->
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-b30">
                    <div class="feature-container">
                        <div class="icon-content mb-2">
                            <h4>Standar Biaya Pendaftaran</h4>
                            <p>Biaya pendaftaran untuk setiap jalur dikenakan sebesar Rp. 250.000,00</p>
                            <h4>Standar Biaya Perkuliahan</h4>
                            <p style="text-align: justify;">Setiap mahasiswa yang telah diterima di Universitas Siber Asia memiliki kewajiban Administratif pembayaran yakni UPP (Uang Pengembangan Pendidikan) dan Uang Paket Semester. Selain itu terdapat kewajiban di akhir semester yakni pembayaran uang Sidang Skripsi online.</p>
                            <h4 class="text-center">Biaya Pendidikan Per Semester</h4>
                            <table class="table table-bordered">
                                <tr class="bg-info text-center">
                                    <th>Program Studi</th>
                                    <th>UPP</th>
                                    <th>UPS</th>
                                    <th>Jumlah</th>
                                </tr>
                                <tr>
                                    <td>Manajemen Kontemporer (S1)</td>
                                    <td>Rp. 1.000.000,00</td>
                                    <td>Rp. 2.000.000,00</td>
                                    <td>Rp. 3.000.000,00</td>
                                </tr>
                                <tr>
                                    <td>Sistem Informasi (S1)</td>
                                    <td>Rp. 1.000.000,00</td>
                                    <td>Rp. 2.500.000,00</td>
                                    <td>Rp. 3.500.000,00</td>
                                </tr>
                                <tr>
                                    <td>Teknik Informatika (S1)</td>
                                    <td>Rp. 1.000.000,00</td>
                                    <td>Rp. 3.000.000,00</td>
                                    <td>Rp. 4.000.000,00</td>
                                </tr>
                                <tr>
                                    <td>Akuntansi dan Perpajakan (S1)</td>
                                    <td>Rp. 1.000.000,00</td>
                                    <td>Rp. 2.000.000,00</td>
                                    <td>Rp. 2.000.000,00</td>
                                </tr>
                                <tr>
                                    <td>Penyiaran dan Komunikasi Digital (S1)</td>
                                    <td>Rp. 1.000.000,00</td>
                                    <td>Rp. 2.500.000,00</td>
                                    <td>Rp. 3.500.000,00</td>
                                </tr>
                            </table>
                            <h4 class="text-center">Biaya Sidang Skripsi Online</h4>
                            <table class="table table-bordered">
                                <tr class="bg-info text-center">
                                    <th>Program Studi</th>
                                    <th>Sidang Skripsi</th>
                                </tr>
                                <tr>
                                    <td>Manajemen Kontemporer (S1)</td>
                                    <td>Rp. 1.500.000,00</td>
                                </tr>
                                <tr>
                                    <td>Sistem Informasi (S1)</td>
                                    <td>Rp. 1.500.000,00</td>
                                </tr>
                                <tr>
                                    <td>Teknik Informatika (S1)</td>
                                    <td>Rp. 1.500.000,00</td>
                                </tr>
                                <tr>
                                    <td>Akuntansi dan Perpajakan (S1)</td>
                                    <td>Rp. 1.500.000,00</td>
                                </tr>
                                <tr>
                                    <td>Penyiaran dan Komunikasi Digital (S1)</td>
                                    <td>Rp. 1.500.000,00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us END ==== -->
</div>
<!-- Page Content Box END ==== -->
@endsection